<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_menu extends CI_model {
	public function getUser()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}

	// BAGIAN GETMENU
	public function getMenu()
	{
		return $this->db->get('user_menu')->result_array();
	}

	// INSERT MENU
	public function insertMenu()
	{
		$this->db->insert('user_menu', ['menu' => $this->input->post('menu', true)]);
	}



	// BAGIAN DELETE MENU
	public function deleteMenu($id)
	{	
		$this->db->delete('user_menu', ['id' => $id]);
	}


	// BAGIAN DETAIL MEU
	public function detailMenu($id)
	{
		return $this->db->get_where('user_menu', ['id' => $id])->row_array();
	}


	// BAGIAN UPDATE MENU
	public function updateMenu()
	{
		$data = [

			'menu' => htmlspecialchars($this->input->post('menu', true))

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_menu', $data);
	}

}










