<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguros extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');
	}

	public function index()
	{
		$data['color'] ="yellow";  // enviando al header el texto que cambia el color desde un css 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['seguros'] = $this->Safety_work_model->get_seguros(); 
		$this->load->view('seguros',$data);
		$this->load->view('includes/scripts');
	}

	public function detalle_seguro($url_amigable_seguro)
	{
		$data['color'] ="yellow";  // enviando al header el texto que cambia el color desde un css 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['detalle_seguro'] = $this->Safety_work_model->get_detalle_seguro($url_amigable_seguro); 
		$data['seguros'] = $this->Safety_work_model->get_seguros(); 
		$this->load->view('detalle_seguro',$data);
		$this->load->view('includes/scripts');
	}

}		


