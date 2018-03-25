<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
	}

	public function index()
	{
		$data['hello'] ="hello_friend";
	}

	public function insert_newsletter()
	{
		$data = array(
					'email' => $this->input->post('email')
					 );
		$this->Safety_work_model->insert_newsletter($data);
		redirect(base_url());
	}

	public function borrar_newsletter($id_newsletter)
	{
		$this->Safety_work_model->delete_newsletter($id_newsletter);
		redirect('/admin/newsletter');
	}	

}		


