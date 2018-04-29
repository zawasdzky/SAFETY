<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Encuestas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/encuestas_admin_model');
		$this->load->helper('url');

	}
	public function index()
	{
		$data['encuestas'] = $this->encuestas_admin_model->get_encuestas();
		$this->load->view('admin/encuestas', $data);
	}
	public function insertar_encuesta()
	{
		$data = array(
					'titulo_encuesta' => $this->input->post('titulo_encuesta'),
					'estado_encuesta' => $this->input->post('estado_encuesta')
					 );
		$this->encuestas_admin_model->insert_encuesta($data);
		redirect('/admin/encuestas');
	}

	public function agregar_respuesta($id_encuesta)
	{
		$data = array(
					'respuesta' => $this->input->post('respuesta'),
					'orden_respuesta' => $this->input->post('orden_respuesta'),
					'id_encuesta' => $id_encuesta
					 );
		$this->encuestas_admin_model->agregar_respuesta($data);
		redirect('/admin/encuestas/encuesta_edit/'.$id_encuesta);
	}

	public function update_encuesta($id_encuesta)
	{
		$data = array(
					'titulo_encuesta' => $this->input->post('titulo_encuesta'),
					'estado_encuesta' => $this->input->post('estado_encuesta')
					 );
		$this->encuestas_admin_model->update_encuesta($id_encuesta,$data);
		redirect('/admin/encuestas/encuesta_edit/'.$id_encuesta);
	}
	public function encuesta_edit($id_encuesta)
	{
		$data['detalle_encuesta'] = $this->encuestas_admin_model->get_detalle_encuesta($id_encuesta);
		$data['respuestas_encuesta'] = $this->encuestas_admin_model->get_respuestas_encuesta($id_encuesta);
		$this->load->view('admin/encuesta_edit', $data);
	}

	public function respuesta_edit($id_respuesta)
	{
		$data['detalle_respuesta'] = $this->encuestas_admin_model->get_detalle_respuesta($id_respuesta);
		$this->load->view('admin/respuesta_edit', $data);
	}

	public function update_respuesta($id_respuesta,$id_encuesta)
	{
		$data = array(
					'orden_respuesta' => $this->input->post('orden_respuesta'),
					'respuesta' => $this->input->post('respuesta'),
					'puntaje' => $this->input->post('puntaje')
					 );
		$this->encuestas_admin_model->update_respuesta($id_respuesta,$data);
		redirect('/admin/encuestas/encuesta_edit/'.$id_encuesta);
	}

	public function borrar_encuesta($id_encuesta)
	{
		$this->encuestas_admin_model->delete_encuesta($id_encuesta);
		redirect('/admin/encuestas');
	}

	public function borrar_respuesta_encuesta($id_respuesta)
	{
		$this->encuestas_admin_model->borrar_respuesta_encuesta($id_respuesta);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
