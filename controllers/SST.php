<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SST extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');
	}

	public function index()
	{
		$data['color'] ="carrot";  // enviando al header el texto que cambia el color desde un css 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();  
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['articulos_SST'] = $this->Safety_work_model->get_articulos_SST(); 
		$this->load->view('articulos_SST',$data);
		$this->load->view('includes/scripts');
	}

	public function detalle_SST($url_amigable_SST)
	{
		$data['color'] ="carrot";  // enviando al header el texto que cambia el color desde un css 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 		
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['detalle_SST'] = $this->Safety_work_model->get_detalle_SST($url_amigable_SST); 
		$data['articulos_SST'] = $this->Safety_work_model->get_articulos_SST(); 
		$this->load->view('detalle_SST',$data);
		$this->load->view('includes/scripts');
	}

}		


