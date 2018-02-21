<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Newsletters extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/Newsletters_admin_model');
	}

	public function index()
	{
		$data['newsletters'] = $this->Newsletters_admin_model->get_newsletters();
		$this->load->view('admin/newsletters', $data);
	}

	public function borrar_newsletter($id_newsletter)
	{
		$this->Newsletters_admin_model->delete_newsletter($id_newsletter);
		redirect('/admin/newsletters');
	}	

}		