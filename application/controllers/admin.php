<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin', 'admin');
		is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->admin->getUser();
		$data['message'] = $this->admin->getMessage();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}



		// BAGIAN ROLE
	public function role() 
	{
		$data['title'] = 'Role';
		$data['user'] = $this->admin->getUser();
		$data['role'] = $this->admin->getRole();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}




	// BAGIAN ACCESS MENU
	public function access($role_id)
	{
		$data['title'] = 'Access menu';
		$data['user'] = $this->admin->getUser();
		$data['menu'] = $this->admin->getMenu();
		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/access-menu', $data);
		$this->load->view('templates/footer');
	}

	// BAGIAN CHANGEACCESS
	public function changeAccess()
	{
		$roleId = $this->input->post('roleId');
		$menuId = $this->input->post('menuId');

		$data = [

			'role_id' => $roleId,
			'menu_id' => $menuId

		];


		$result = $this->db->get_where('user_access_menu', $data);

		if($result->num_rows() < 1 ) {
			$this->db->insert('user_access_menu', $data );
		} else {
			$this->db->delete('user_access_menu', $data );
		}

		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="role"> change success </div');
		redirect('admin/role');
	}


	// BAGIAN ACCOUNT
	public function account()
	{
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata($data['keyword'], 'keyword');
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$this->db->from('user');
		$this->db->like('name', $data['keyword']);	




		$config['base_url'] = 'http://localhost/latihan1/admin/account/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['title'] = 'Account user';
		$data['user'] = $this->admin->getUser();
		$data['user1'] = $this->admin->getAllUser($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/account', $data);
		$this->load->view('templates/header');
		
	}

	// BAGIAN DELETEACCOUN
	public function deleteAccount($id)
	{
		$this->db->delete('user', ['id' => $id]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="role"> user has been deleted </div');
		redirect('admin/account');
	}


	// BAGIAN DETAIL ACCOUNT
	public function detailAccount($id)
	{
		$data['title'] = 'Detail user';
		$data['user'] = $this->admin->getUser();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/Detail-account', $data);
		$this->load->view('templates/header');
	}


	// DELETE MESSAGE
	public function deleteMessage($id)
	{
		$this->admin->deleteMesage($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alerr"> Message has been deleted </div');
		redirect('admin');
	}


}






















