<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultado_busqueda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
	}

	public function index()
	{
		$data['color'] ="yellow"; 
		$keyword = $this->input->post('keyword');
		$data['palabra'] = $keyword; 
		$this->load->view('includes/scripts');
		$data['publicidad'] = $this->Safety_work_model->get_publicidad(); 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 			
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['resultados_talento'] = $this->Safety_work_model->get_resultados_talento($keyword);
		$data['resultados_eventos'] = $this->Safety_work_model->get_resultados_eventos($keyword); 
		$data['resultados_salud'] = $this->Safety_work_model->get_resultados_salud($keyword); 
		$data['resultados_seguros'] = $this->Safety_work_model->get_resultados_seguros($keyword); 
		$data['resultados_SST'] = $this->Safety_work_model->get_resultados_SST($keyword); 
		$data['resultados_legislacion'] = $this->Safety_work_model->get_resultados_legislacion($keyword); 
		$data['resultados_infografias'] = $this->Safety_work_model->get_resultados_infografias($keyword); 
		$data['resultados_noticias'] = $this->Safety_work_model->get_resultados_noticias($keyword); 
		$data['resultados_sociales'] = $this->Safety_work_model->get_resultados_sociales($keyword); 
		$data['resultados_productos'] = $this->Safety_work_model->get_resultados_productos($keyword); 
		$data['resultados_profesionales'] = $this->Safety_work_model->get_resultados_profesionales($keyword); 
		$data['legislaciones'] = $this->Safety_work_model->get_legislaciones_limit(); 
		$data['eventos_widget'] = $this->Safety_work_model->get_eventos_widget(); 
		$this->load->view('resultado_busqueda',$data);
	}

}		


