<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vida_estilo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
		$this->load->model('Safety_solutions_model');

	}

	public function index()
	{
		$data['color'] ="blue2";		
		$this->load->view('includes/scripts');
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['articulos_vida_estilo'] = $this->Safety_work_model->get_articulos_vida_estilo(); 
		$data['destacados_vida_estilo'] = $this->Safety_work_model->get_destacados_vida_estilo();
		$this->load->view('vida_estilo',$data);
	}

	public function articulos_vida_estilo($tipo = NULL)
	{
		$data['color'] ="blue2"; 
		if ($tipo != NULL) {
			$data['articulos_vida_estilo'] = $this->Safety_work_model->get_articulos_vida_estilo_tipo($tipo); 
		}

		if ($tipo == NULL) {
			$data['articulos_vida_estilo'] = $this->Safety_work_model->get_articulos_vida_estilo();
		}
		$this->load->view('includes/scripts');
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad();
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit();  
		$this->load->view('articulos_vida_estilo',$data);
	}

	public function detalle_articulo_vida_estilo($url_amigable_vida_estilo)
	{
		$data['color'] ="blue2"; 		
		$this->load->view('includes/scripts');		
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 		
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['detalle_articulo_vida_estilo'] = $this->Safety_work_model->get_detalle_articulo_vida_estilo($url_amigable_vida_estilo); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['productos_solutions_limit'] = $this->Safety_solutions_model->get_productos_limit(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$this->load->view('detalle_articulo_vida_estilo',$data);
	}

}		


