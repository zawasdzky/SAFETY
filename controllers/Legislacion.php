<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legislacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
	}

	public function index()
	{
		$this->load->view('includes/scripts');		
		$data['color'] ="yellow";  // enviando al header el texto que cambia el color desde un css
		$data['frases'] = $this->Safety_work_model->get_frases_widget();  
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones(); 
		$this->load->view('legislaciones',$data);
	}



	public function legislaciones($tipo_legislacion = NULL, $categoria_legislacion = NULL)
	{
		if ($categoria_legislacion == NULL) {
			$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_tipo($tipo_legislacion); 
		}
		if ($tipo_legislacion == NULL && $categoria_legislacion == NULL) {
			$data['legislaciones'] = $this->Safety_work_model->get_legislaciones(); 
			$data['titulo'] = "LEGISLACIONES";
		}
		if ($tipo_legislacion != NULL && $categoria_legislacion != NULL) {
			$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_filtro($tipo_legislacion,$categoria_legislacion); 

		}
		$this->load->view('includes/scripts');
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['color'] ="yellow";  
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header'); 
		$this->load->view('legislaciones',$data);
	}


}		


