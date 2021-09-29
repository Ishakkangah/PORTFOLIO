<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_model {
	public function getUser()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}

	public function getAllUser($limit, $start, $keyword = null)
	{
		if($keyword){
			$this->db->like('name', $keyword);
			$this->db->or_like('email', $keyword);
		}
		return $this->db->get('user')->result_array($limit, $start);
	}



	public function getRole()
	{
		return $this->db->get('user_role')->result_array();
	}

	public function getMenu()
	{
		$this->db->where('id !=', 1);
		return $this->db->get('user_Menu')->result_array();
	}


	public function deleteUser($id)
	{
		$this->db->delete('user', ['id' => $id]);
	}


	public function getAllresult()
	{
		return $this->db->get('user')->num_rows();
	}


	public function getMessage()
	{	
		$message = "SELECT *
					  FROM message
					 ORDER BY date_created DESC
						";
		return $this->db->query($message)->result_array();
	}


	public function deleteMesage($id)
	{
		$this->db->delete('message', ['id' => $id]);
	}
}
