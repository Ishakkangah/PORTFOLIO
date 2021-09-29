<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_menu', 'menu');
		$this->load->model('model_submenu', 'submenu');
		is_logged_in();
	}

	// BAGIAN MENU
	public function index()
	{
		$data['title'] = 'Menu management';
		$data['user'] = $this->menu->getUser();
		$data['menu'] = $this->menu->getMenu();

		$this->form_validation->set_rules('menu', 'Menu', 'required|trim');

		if($this->form_validation->run() == false ) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/footer');
		} else {
			$this->menu->insertMenu();
			$this->session->set_flashdata('flash', '<div class="alert alert-success text-lowercase" role="alert"> data has been inserted </div>');
			redirect('menu');
		}
	}


	// BAGIAN DELETE MENU
	public function delete($id)
	{
		$this->menu->deleteMenu($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success text-lowercase" role="alert"> data has been deleted </div>');
		redirect('menu');
	} 


	// BAGIAN DETEIL MENU
	public function detail($id)
	{
		$data['title'] = 'Detail management';
		$data['user'] = $this->menu->getUser();
		$data['detail'] = $this->menu->detailMenu($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/detail', $data);
		$this->load->view('templates/footer');
	}



	// BAGIAN UPDATE
	public function update($id)
	{
		$data['title'] = 'update menu management';
		$data['user'] = $this->menu->getUser();
		$data['menu'] = $this->menu->getMenu();
		$data['detail'] = $this->menu->detailMenu($id);


		$this->form_validation->set_rules('menu', 'Menu', 'required|trim');

		if($this->form_validation->run() == false ) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/update', $data);
		$this->load->view('templates/footer');
		} else {
			$this->menu->updateMenu();
			$this->session->set_flashdata('flash', '<div class="alert alert-success text-lowercase" role="alert"> data has been updated </div>');
			redirect('menu');
		}
	}






	// BAGIAN INSERT SUBMENU
	public function submenu()
	{
		$data['title'] = 'Submenu management';
		$data['user'] = $this->submenu->getUser();
		$data['submenu'] = $this->submenu->getSubmenu();
		$data['menu'] = $this->submenu->getMenu();

		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('menu_id', 'Menu_id', 'trim|required');
		$this->form_validation->set_rules('icon', 'Icon', 'trim|required');
		$this->form_validation->set_rules('url', 'Url', 'trim|required');

		if ( $this->form_validation->run() == false ){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('submenu/index', $data);
		$this->load->view('templates/footer');
		} else {
			$this->submenu->insertSubmenu();
			$this->session->set_flashdata('flash', '<div class="alert alert-success text-lowercase" role="alert"> data has been inserted </div>');
			redirect('menu/submenu');
		}
	}

	// BAGIAN DELETE SUBMENU
	public function deleteSubmenu($id)
	{
		$this->db->delete('user_sub_menu', ['id' => $id]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success text-lowercase" role="alert"> data has been deleted </div>');
			redirect('menu/submenu');
	}


	// BAGIAN DETAIL SUBMENU
	public function detailSubmenu($id)
	{
		$data['title'] = 'Detail submenu';
		$data['user'] = $this->submenu->getUser();
		$data['detail'] = $this->submenu->detailSubmenu($id);
		$data['submenu'] = $this->submenu->getSubmenu1();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('submenu/detail', $data);
		$this->load->view('templates/footer');
		
	}


	// BAGIAN INSERT SUBMENU
	public function updateSubmenu($id)
	{
		$data['title'] = 'Update submenu';
		$data['user'] = $this->submenu->getUser();
		$data['detail'] = $this->submenu->detailSubmenu($id);
		$data['menu'] = $this->submenu->getMenu();

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('menu_id', 'Menu_id', 'trim|required');
		$this->form_validation->set_rules('icon', 'Icon', 'trim|required');
		$this->form_validation->set_rules('url', 'Url', 'trim|required');
		$this->form_validation->set_rules('is_active', 'is_active', 'trim|required');
		

		if ( $this->form_validation->run() == false ){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('submenu/update', $data);
		$this->load->view('templates/footer');
		} else {

		$data = [

				'menu_id' => $this->input->post('menu_id', true),
				'title' => $this->input->post('title', true),
				'icon' => $this->input->post('icon', true),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active', true)

			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('user_sub_menu', $data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
			  submenu updated success
			</div>');
			redirect('menu/submenu');
		
		}
	}
}















