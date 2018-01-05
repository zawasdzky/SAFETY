<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sociales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');
	}

	public function index()
	{
		$data['color'] ="purple";  // enviando al header el texto que cambia el color desde un css 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['sociales'] = $this->Safety_work_model->get_sociales(); 
		$this->load->view('sociales',$data);
		$this->load->view('includes/scripts');
	}

	public function detalle_social($url_amigable_social)
	{
		$data['color'] ="purple";  // enviando al header el texto que cambia el color desde un css 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['detalle_social'] = $this->Safety_work_model->get_detalle_social($url_amigable_social); 
		$data['sociales'] = $this->Safety_work_model->get_sociales(); 
		$this->load->view('detalle_social',$data);
		$this->load->view('includes/scripts');
	}

}		


