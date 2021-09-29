<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user', 'user');
		is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->user->getUser();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}



	// BAGIAN EDIT PROFILE
	public function edit()
	{
		$data['title'] = 'Edit profile';
		$data['user'] = $this->user->getUser();
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		if($this->form_validation->run() == false ) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('templates/footer');
		} else {
		$name = $this->input->post('name');
		$email = $this->input->post('email');

		$img = $_FILES['image']['name'];

		$config['upload_path']          = './assets/img/profile/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image') ) {
        	$old_img = $data['user']['img'];
        	if($old_img != 'default.jpg') {
        		unlink(FCPATH . 'assets/img/profile/' . $old_img );
        	}

        	$new_img = $this->upload->data('file_name');
        	$this->db->set('img', $new_img);
    

        } else {
					 
		$this->session->set_flashdata('flash', '<div class="alert alert-danger text-monospace "> Change failed </div>');
		redirect('user/edit');

        }


		$this->db->set('name', $name);
		$this->db->where('email', $email);
		$this->db->update('user');



		$this->session->set_flashdata('flash', '<div class="alert alert-success text-monospace "> Change success </div>');
		redirect('user/edit');
		}
	}

	// BAGIAN CHANGEPASSWORD
	public function changepassword()
	{
		$data['title'] = 'Change password';
		$data['user'] = $this->user->getUser();

		$this->form_validation->set_rules('current', 'Current', 'trim|required');
		$this->form_validation->set_rules('password1', 'Password1', 'trim|required');
		$this->form_validation->set_rules('password2', 'Password2', 'trim|required');

		if ( $this->form_validation->run() == false ){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/change-password', $data);
		$this->load->view('templates/footer');
		} else {
			$current_password = $this->input->post('current', true);
			if (!password_verify($current_password, $data['user']['password'])){
				$this->session->set_flashdata('flash', '<div class="alert alert-danger text-monospace" role="role"> wrong password </div>');
				redirect('user/changepassword');
			} else {
				$new_password = $this->input->post('password1', true);
				if($new_password == $current_password){
					$this->session->set_flashdata('flash', '<div class="alert alert-danger text-monospace" role="role"> password cannot the same as current password </div>');
					redirect('user/changepassword');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('flash', '<div class="alert alert-success text-monospace" role="role"> change success </div>');
					redirect('user/changepassword');


				}
			}
		}

	}
}





















