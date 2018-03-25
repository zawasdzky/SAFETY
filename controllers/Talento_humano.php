<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talento_humano extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');
	}

	public function index()
	{
		$this->load->view('includes/scripts');
		$data['color'] ="yellow";
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header'); 
		$data['talento_humano'] = $this->Safety_work_model->get_talento_humano(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$this->load->view('talento_humano',$data);
	}

	public function detalle_articulo_talento($url_amigable_talento)
	{
		$this->load->view('includes/scripts');
		$data['color'] ="yellow";
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();  
		$this->Safety_work_model->sumar_visita_talento($url_amigable_talento);
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['detalle_articulo_talento'] = $this->Safety_work_model->get_detalle_articulo_talento($url_amigable_talento); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit();
		$this->load->view('detalle_articulo_talento',$data);
	}
}		


