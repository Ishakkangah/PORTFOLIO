<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_landing', 'landing');
	}


	// BAGIAN INDEX LANDING
	public function index()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		if($this->form_validation->run() == false ){
		$this->load->view('landing/index');
		}	else {
			$this->landing->insertlanding();
			$this->session->set_flashdata('flash', '<marquee direction="up">
				<h2 class="font-weight-bolder text text-success"> Thank you, your message we process  </h2>
			</marquee>');
			redirect('landing');
		}
	}


	// BAGIAN PORTFOLIO
	public function portfolio()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		if($this->form_validation->run() == false ){
		$data['title'] = 'portfolio';
		$data['poto'] = $this->landing->getPoto();

		$this->load->view('landing/portfolio', $data);
		}	else {
			$this->landing->insertlanding();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
			  thank you, your message we process 
			</div>');
			redirect('landing/portfolio');
		}
	}

	public function Suntingportfolio()
	{
		$data['title'] = 'Sunting portfolio';
		$data['poto'] = $this->landing->getPoto();

		$this->form_validation->set_rules('title', 'Title', 'trim|required');

		if ($this->form_validation->run() == false ){

		$data['user'] =$this->landing->getUser();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('landing/Suntingportfolio', $data);
		$this->load->view('templates/footer');
		
		} else {
			$data = [
				'title' => htmlspecialchars($this->input->post('title', true)),
				'date_created' => time()
			];

			$img = $_FILES['image']['name'];

			$config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);


              if ( ! $this->upload->do_upload('image'))
                {
                        echo $this->upload->display_errors();
                }
                else
                {
                        $new_image =  $this->upload->data('file_name');

                        $this->db->set('img', $new_image);
						$this->db->insert('poto', $data);
						$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Photo has been success uploaded</div>');
						redirect('landing/Suntingportfolio');
				
                }
            }

	}




	// BAGIAN ABOUT
	public function about()
	{
		$data['title'] = 'About';
		$data['potoo'] = $this->landing->getPotoo();
		$data['biodata'] = $this->landing->getBiodata();
		$data['contact'] = $this->landing->getContact();
		$data['hobby'] = $this->landing->getHobby();
		$data['education'] = $this->landing->getEducation();
		$data['experience'] = $this->landing->getExperience();


		$this->load->view('landing/about', $data);
	}



	// BAGIAN DELETE PHOTO
	public function deletePoto($id)
	{
		$this->db->delete('poto', ['id' => $id]);
		$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Photo has been deleted</div>');
		redirect('landing/Suntingportfolio');

	}



	// BAGAIN SUNTING ABOUT
	public function Suntingabout()
	{
		$data['title'] = 'Sunting about';
		$data['user'] = $this->landing->getUser();
		$data['potoo'] = $this->landing->getPotoo();
		$data['biodata'] = $this->landing->getBiodata();
		$data['contact'] = $this->landing->getContact();
		$data['hobby'] = $this->landing->getHobby();
		$data['education'] = $this->landing->getEducation();
		$data['experience'] = $this->landing->getExperience();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('landing/Suntingabout', $data);
		$this->load->view('templates/footer');

	}


	// BAGIAN SUNTING POTO ABOUT
	public function editBiodata()
	{
		$data = [

		'city' => $this->input->post('city'),
		'date' => $this->input->post('hbd'),
		'work' => $this->input->post('work'),
		'religion' => $this->input->post('religion'),
		'gender' => $this->input->post('gender'),
		'weight' => $this->input->post('weight'),
		'height' => $this->input->post('height'),
		'address' => $this->input->post('address')
	    ];


	    $img = $_FILES['image']['name'];

	    $config['upload_path']          = './assets/img/profile/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( $this->upload->do_upload('image'))
        {

        	$new_image = $this->upload->data('file_name');
        	$this->db->set('img', $new_image);
        
        	$bio = $this->db->get('biodata')->row_array();
        	$old_image = $bio['img'];
        	if($old_image != $new_image) {
      		}

        } else {
        	echo $this->upload->display_errors();
        }

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('biodata', $data);

		$this->session->set_flashdata('flash', '<div class="alert alert-success"> Change successs </div>');
		redirect('landing/Suntingabout');
	}


	// BAGIAN EDIT CONTACT
	public function EditContact()
	{
		$data = [

			'whatshapp' => $this->input->post('whatshapp', true),
			'email' => $this->input->post('email', true),
			'facebook' => $this->input->post('facebook', true),
			'instagram' => $this->input->post('instagram', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('contact', $data);

		$this->session->set_flashdata('flash', '<div class="alert alert-success"> Change successs </div>');
		redirect('landing/Suntingabout');	
	}


	// BAGIAN EDIT HOBBY
	public function EditHobby()
	{
		$this->db->insert('hobby', ['hobby' => $this->input->post('hobby', true)]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> insert has been successed </div>');
		redirect('landing/Suntingabout');	
	}

	// HAPUS HOBBY
	public function deleteHobby($id)
	{
		$this->db->delete('hobby', ['id' => $id]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> delete successed </div>');
		redirect('landing/Suntingabout');	
	}

	public function editEducation()
	{
		$this->db->insert('education', ['education' => $this->input->post('education')]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> insert successed </div>');
		redirect('landing/Suntingabout');
	}


	// DELETE EDUCATION
	public function deleteEducation($id)
	{
		$this->db->delete('education', ['id' => $id]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> delete successed </div>');
		redirect('landing/Suntingabout');
	}


	// WORK EXPERIENCE
	public function editExperience()
	{
		$this->db->insert('Work_experience', ['experience' => $this->input->post('experience', true)]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> insert successed </div>');
		redirect('landing/Suntingabout');
	
	}


	// DELETE EXPERIENCE
	public function deleteExperience($id)
	{
		$this->db->delete('Work_experience', ['id' => $id]);
		$this->session->set_flashdata('flash', '<div class="alert alert-success"> delete successed </div>');
		redirect('landing/Suntingabout');
	}


	// BAGIAN GALERY
	public function galery()
	{
		$data['title'] = 'galery';
		$data['galery'] = $this->landing->getGalery();
		$this->load->view('landing/galery', $data);
	}

	public function potoGalery($id)
	{
		$data['title'] = 'galery';
		$data['galery'] = $this->landing->getGaleryById($id);
		$this->load->view('landing/potoGalery', $data);
	}


	// bagian photo
	public function poto($id)
	{
		$data['title'] = 'galery poto';
		$data['poto'] = $this->landing->getPotoById($id);
		$this->load->view('landing/poto', $data);

	}


	// bagian sunting galery
	public function suntingGalery()
	{
		$data['title'] = 'sunting galery';
		$data['user'] = $this->landing->getUser();
		$data['galery'] = $this->landing->getGalery();

		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('subject', 'Subject', 'trim');

		if($this->form_validation->run() == false ) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('landing/suntingGalery', $data);
		$this->load->view('templates/footer');
		} else {
			$data = [

				'title' => $this->input->post('title', true),
				'subject' => $this->input->post('subject', true),
				'date_created' => time()
			];

			$img = $_FILES['image']['name'];
			$config['upload_path']          = './assets/img/profile/';
    	    $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 2048;

	        $this->load->library('upload', $config);

	        if($this->upload->do_upload('image'))
	        {








	        	$new_image = $this->upload->data('file_name');
	        	$this->db->set('img', $new_image);

	        } else {
	        	echo $this->upload->display_errors();
	        }



			$this->db->insert('galery', $data);
			$this->session->set_flashdata('flash','<div class="alert alert-success"> input success </div>');
			redirect('landing/suntingGalery');
		}


	
	}
		// DELETE POTO GALERY
	public function deleteGalery($id)
	{
		$this->db->delete('galery', ['id' => $id]);
		$this->session->set_flashdata('flash','<div class="alert alert-success"> delete success </div>');
			redirect('landing/suntingGalery');
	}

}
