<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['color'] ="carrot";
		$this->load->view('includes/head',$data); 	
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$data['noticias'] = $this->Safety_work_model->get_noticias_home();
        $data['vida_estilo'] = $this->Safety_work_model->get_vida_estilo_home();
		$data['talento_humano'] = $this->Safety_work_model->get_talento_humano_home(); 
		$data['salud_bienestar'] = $this->Safety_work_model->get_salud_bienestar_home(); 
		$data['SST'] = $this->Safety_work_model->get_SST_home(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_home(); 
		$data['sociales'] = $this->Safety_work_model->get_sociales_home(); 
		$data['seguros'] = $this->Safety_work_model->get_seguros_home(); 
		$data['infografias'] = $this->Safety_work_model->get_infografias_home(); 
		$data['infografias'] = $this->Safety_work_model->get_infografias_home(); 
		$data['encuesta'] = $this->Safety_work_model->get_encuesta(); 		
		$this->load->view('includes/header');
		$this->load->view('index',$data);
	}
	public function respuesta_encuesta()
	{
		$id_respuesta = $this->input->post('id_respuesta');
		$this->Safety_work_model->sumar_puntaje_pregunta($id_respuesta);
		redirect($_SERVER['HTTP_REFERER']);
	}

}


