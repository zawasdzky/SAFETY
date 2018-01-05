<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model('admin_model');
		$this->load->view('admin/includes/head_admin');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}
	
}


