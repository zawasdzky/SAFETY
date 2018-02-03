<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');
	}

	public function index()
	{
		$data['color'] ="carrot";		
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();  
		$data['publicidad'] = $this->Safety_work_model->get_publicidad();
		$data['noticias'] = $this->Safety_work_model->get_noticias(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit();
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$this->load->view('noticias',$data);
		$this->load->view('includes/scripts');
	}

	public function detalle_noticia($url_amigable_noticia)
	{
		$data['color'] ="carrot";  // enviando al header el texto que cambia el color desde un css 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();  
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['detalle_noticia'] = $this->Safety_work_model->get_detalle_noticia($url_amigable_noticia); 
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit();
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$this->load->view('detalle_noticia',$data);
		$this->load->view('includes/scripts');
	}

}		


