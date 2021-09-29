<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_landing extends CI_model {
	public function insertlanding()
	{
		$data = [

			'name' => htmlspecialchars($this->input->post('name', true)),
			'name' => htmlspecialchars($this->input->post('name', true)),
			'message' => htmlspecialchars($this->input->post('message', true)),
			'date_created'=> time()

		];


		$this->db->insert('message', $data);

	}



	public function getPoto()
	{
		return $this->db->get('poto')->result_array();
	}


	public function getPotoo()
	{
		return $this->db->get('poto')->row_array();
	}


	public function getBiodata()
	{
		return $this->db->get('biodata')->row_array();
	}

	public function getContact()
	{
		return $this->db->get('contact')->row_array();
	}

	public function getHobby()
	{
		return $this->db->get('hobby')->result_array();
	}


	public function getUser()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}

	public function getEducation()
	{
		return $this->db->get('education')->result_array();
	}

	public function getExperience()
	{
		return $this->db->get('Work_experience')->result_array();
	}

	public function getPotoById($id)
	{
		return $this->db->get_where('poto', ['id' => $id])->row_array();
	}

	public function getGalery()
	{
		return $this->db->get('galery')->result_array();
	}


	public function getGaleryById($id)
	{
		return $this->db->get('galery')->row_array();
	}








}