<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model('admin_model');
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');		
	}

	public function index()
	{
		$this->load->view('admin/home_admin');
	}

}


