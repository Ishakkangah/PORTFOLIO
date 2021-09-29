<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_submenu extends CI_model {
	public function getUser()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}


	// BAGIAN GETMENU
	public function getMenu()
	{
		return $this->db->get('user_menu')->result_array();
	}



	// JOIN TABLE
	public function getSubmenu()
	{
		$query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
					FROM `user_sub_menu` JOIN `user_menu`
					  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
		";

		return $this->db->query($query)->result_array();
	}



	// JOIN TABLE
	public function getSubmenu1()
	{
		$query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
					FROM `user_sub_menu` JOIN `user_menu`
					  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
		";

		return $this->db->query($query)->row_array();
	}

	public function insertSubmenu()
	{
		$data = [

			'title' => $this->input->post('title', true),
			'menu_id' => $this->input->post('menu_id', true),
			'icon' => $this->input->post('icon', true),
			'url' => $this->input->post('url', true),
			'is_active' => $this->input->post('is_active', true)
		];

		$this->db->insert('user_sub_menu', $data);
	}


	// BAGIAN DETAIL SUBMENU
	public function detailSubmenu($id)
	{
		return $this->db->get_where('user_sub_menu',['id' => $id])->row_array();
	}




	public function updateSubmenu()
	{
		$data = [

			'title' => $this->input->post('title', true),
			'menu_id' => $this->input->post('menu_id', true),
			'icon' => $this->input->post('icon', true),
			'url' => $this->input->post('url', true),
			'is_active' => $this->input->post('is_active', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_sub_menu', $data);

		
	}

















}
