<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/categorias_admin_model');	
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_productos/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);		
	}

	public function index()
	{
		$data['categorias'] = $this->categorias_admin_model->get_categorias();
		$this->load->view('admin/categorias',$data);
	}

	public function insertar_categoria()
	{
		
		$data = array(
				    'id_padre' => $this->input->post('id_padre'),
					'nombre_categoria' => $this->input->post('nombre_categoria'),
					'tipo_categoria' =>   $this->input->post('tipo_categoria')
					  );
		$this->categorias_admin_model->insert_categoria($data);
		redirect('/admin/Categorias');
	}
		public function update_categoria($id_categoria)
	{

		$data = array(
				    'id_padre' => $this->input->post('id_padre'),
					'nombre_categoria' => $this->input->post('nombre_categoria'),
					'tipo_categoria' =>   $this->input->post('tipo_categoria')
					  );
		$this->categorias_admin_model->update_categoria($id_categoria,$data);
		redirect('/admin/Categorias/detalle_categoria/'.$id_categoria);
	}


	public function detalle_categoria($id_categoria)
	{
		$data['detalle_categoria'] = $this->categorias_admin_model->detalle_categoria($id_categoria);
		$data['categorias'] = $this->categorias_admin_model->get_categorias();
		$this->load->view('admin/categoria_edit', $data);
	}


	public function borrar_categoria($id_categoria)
	{
		$this->categorias_admin_model->delete_categoria($id_categoria);
		redirect('/admin/categorias');
	}
	
}


