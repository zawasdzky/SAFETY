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
		$data['color'] ="carrot"; 		
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget(); 
		$this->load->view('includes/head',$data);
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['noticias'] = $this->Safety_work_model->get_noticias_home();
        $data['vida_estilo'] = $this->Safety_work_model->get_vida_estilo_home();
		$data['talento_humano'] = $this->Safety_work_model->get_talento_humano_home(); 
		$data['salud_bienestar'] = $this->Safety_work_model->get_salud_bienestar_home(); 
		$data['SST'] = $this->Safety_work_model->get_SST_home(); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_home(); 
		$data['sociales'] = $this->Safety_work_model->get_sociales_home(); 
		$data['seguros'] = $this->Safety_work_model->get_seguros_home(); 
		$data['infografias'] = $this->Safety_work_model->get_infografias_home(); 
		$this->load->view('includes/header');
		$this->load->view('index',$data);
	}

}


