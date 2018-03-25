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
		$data['color'] ="yellow";
		$this->load->view('includes/scripts');
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();
  		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget();  
		$data['seguros'] = $this->Safety_work_model->get_seguros(); 
		$this->load->view('seguros',$data);
	}

	public function detalle_seguro($url_amigable_seguro)
	{
		$data['color'] ="yellow";
		$this->load->view('includes/scripts');
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$this->Safety_work_model->sumar_visita_seguros($url_amigable_seguro);		
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$data['detalle_seguro'] = $this->Safety_work_model->get_detalle_seguro($url_amigable_seguro); 
		$data['seguros'] = $this->Safety_work_model->get_seguros(); 
		$this->load->view('detalle_seguro',$data);
	}

}		


