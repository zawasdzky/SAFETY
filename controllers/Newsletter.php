<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Newsletter_admin_model');
	}

	public function index()
	{
		$data['newsletters'] = $this->articulos_admin_model->get_newsletters();
		$this->load->view('admin/newsletter', $data);
	}

	public function borrar_newsletter($id_newsletter)
	{
		$this->Newsletter_admin_model->delete_newsletter($id_newsletter);
		redirect('/admin/newsletter');
	}	

}		