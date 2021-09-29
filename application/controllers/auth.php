<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('email')){
			redirect('user');
		}

		
		$data['title'] = 'Login page';

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false ) {
		$this->load->view('templates/header_auth', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer_auth');
		} else {
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		// CEK APAKAH USERNYA ADA ?
		if($user) {
			if($user['is_active'] == 1) {
				if(password_verify($password, $user['password'])) {

					$data = [

						'email' => $user['email'],
						'role_id' => $user['role_id']

					];

					$this->session->set_userdata($data);
					if($user['role_id'] == 1 ) {
						redirect('admin');
					} else {
						redirect('user');
					}

				} else {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Password wrong! </div>');
					redirect('auth');	
				}
			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Your email has not in actived </div>');
					redirect('auth');
			}

		} else {
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> This email has not registed </div>');
			redirect('auth');
		}


	}




















	public function registration()
	{
		if ($this->session->userdata('email')){
			redirect('user');
		}


		$data['title'] = 'register page';

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has been already'
		]);

		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password2]|min_length[3]',[
			'min_length' => 'password too short',
			'matches' => 'password dont machest'
			]);

		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password1]');

		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|min_length[3]|matches[password1]', [
		]);

		if ( $this->form_validation->run() == false ) {
		$this->load->view('templates/header_auth', $data);
		$this->load->view('auth/registration');
		$this->load->view('templates/footer_auth');
		} else {
			$email = $this->input->post('email');
			$data = [

				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'img' => 'default.JPG',
				'is_active' => 0,
				'date_created' => time(),
				'role_id' => 2
			];

			$token = base64_encode(random_bytes(32));
			$user_token = [

				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];


			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token );

			$this->_sendEmail($token, 'verify');


			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Congratulation, your account has been created, Please actived </div>');
			redirect('auth');

		}
	}

		private function _sendEmail($token, $type )
		{
			$config = [

				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'juair5043@gmail.com',
				'smtp_pass' => 'juai123321',
				'smtp_port' => 465,
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'newline'   => "\r\n"
			];

			$this->load->library('email', $config);
			$this->email->initialize($config);


			$this->email->from('juair5043@gmail.com', 'Prakerja');
			$this->email->to($this->input->post('email'));

			if($type == 'verify') {
			$this->email->subject('Account activation');
			$this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Actived</a>');
			} else  if($type == 'forgot') {
					$this->email->subject('Reset password');
					$this->email->message('Click this link to verify your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') .'&token=' . urlencode($token) . '">Reset password</a>');
			}


			if($this->email->send()) {
				return true;
			} else {
				echo $this->email->print_debugger();
				die;
			}
		}


		public function verify()
		{
			$email = $this->input->get('email');
			$token = $this->input->get('token');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			if($user) {
				$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
				if($user_token) {
					if(time() - $user_token['date_created'] < (60*60*24)) {

						// jika berhasil tambahkan user ke tabel user
						$this->db->set('is_active', 1);
						$this->db->where('email', $email);
						$this->db->update('user');

						$this->db->delete('user_token', ['email' => $email]);
						$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Email has been created, please login </div>');
						redirect('auth');


					} else {
						// Jika gagal hapus data email pada tabel user dan table user token
						$this->db->delete('user', ['email' => $email]);
						$this->db->delete('user_token', ['email' => $email ]);

						$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Token expired </div>');
						redirect('auth');
					}

				} else {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Token invalid </div>');
					redirect('auth');
				}

			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Account actived failed! wrong email. </div>');
				redirect('auth');
			}

		}








	// bagian logout
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> your has been logout </div>');
			redirect('auth');

	}



	public function blocked()
	{
		$data['title'] = 'Blocked';
		$this->load->view('templates/header', $data);
		$this->load->view('auth/blocked');
	}


	// BAGIAN FORGOTPASSWORD
	public function forgotpassword()
	{
		$data['title'] = 'Forgot password';

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == false ) {
		$this->load->view('templates/header_auth', $data);
		$this->load->view('auth/forgot-password');
		$this->load->view('templates/footer_auth');
		} else {

			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
			
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			if($user) {

				$this->db->insert('user_token', $user_token);	
				$this->_sendEmail($token, 'forgot');
				$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Please check your email to verify your account </div>');
				redirect('auth/forgotpassword');

			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Email has not in registed or not activated </div>');
				redirect('auth/forgotpassword');
			}
		}
	}

	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if($user_token) {

				$this->session->set_userdata('reset_email', $email);
				$this->_ForgotPassword();
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Reset failed , wrong token </div>');
			} else {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Reset failed , wrong token </div>');
					redirect('auth');
			}

		} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Reset failed , wrong email </div>');
				redirect('auth');
			
		}
	}



	public function _ForgotPassword()
	{
		$this->form_validation->set_rules('password1', 'Password1', 'trim|required|min_length[3]|matches[password2]',[
			'min_length' => 'Password to shoot',
			'matches' => 'Password has not matches'
		]);
		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|min_length[3]|matches[password1]');

		if($this->form_validation->run() == false ) {
		$data['title'] = 'Reset Password';
		$this->load->view('templates/header_auth', $data);
		$this->load->view('auth/Reset-password');
		$this->load->view('templates/footer_auth');
		} else {
			$password1 = $this->input->post('password1', true);
			$password_hash = password_hash($password1, PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password_hash);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->db->delete('user_token',['email' => $email, 'token' => $token]);
			$this->session->unset_userdata('reset_email');


			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Changepassword success </div>');
			redirect('auth');
		}

	}

}











