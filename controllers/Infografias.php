<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_work_model');
	}

	public function index()
	{
		$data['color'] ="green"; 
		$data['frases'] = $this->Safety_work_model->get_frases_widget(); 
		$data['videos'] = $this->Safety_work_model->get_videos_widget();
		$data['publicidad'] = $this->Safety_work_model->get_publicidad();  
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['infografias'] = $this->Safety_work_model->get_infografias(); 
		$this->load->view('includes/scripts');
		$this->load->view('infografias',$data);
	}

	public function infografia($url_amigable_infografia)
	{
		$data['color'] ="green";
		$data['publicidad'] = $this->Safety_work_model->get_publicidad();
		$this->Safety_work_model->sumar_visita_infografias($url_amigable_infografia);
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header');
		$data['detalle_infografia'] = $this->Safety_work_model->get_detalle_infografia($url_amigable_infografia); 
		$this->load->view('detalle_infografia',$data);
		$this->load->view('includes/scripts');
	}

}		


