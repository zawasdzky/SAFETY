<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salud_bienestar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');


	}

	public function index()
	{
		$data['color'] ="blue2";  // enviando al header el texto que cambia el color desde un css 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['salud_bienestar'] = $this->Safety_work_model->get_salud_bienestar(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit();
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$this->load->view('salud_bienestar',$data);
		$this->load->view('includes/scripts');
	}

	public function detalle_salud_bienestar($url_amigable_salud)
	{

		$data['color'] ="blue2"; 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['detalle_articulo_salud_bienestar'] = $this->Safety_work_model->get_detalle_salud_bienestar($url_amigable_salud); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 	
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$this->load->view('detalle_articulo_salud_bienestar',$data);
		$this->load->view('includes/scripts');
	}

}		


