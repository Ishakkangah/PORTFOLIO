<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_model {
	public function getUser()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}
}
