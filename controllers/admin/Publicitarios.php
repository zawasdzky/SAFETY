<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class publicitarios extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/publicitarios_admin_model');	
		$this->load->helper('url');
		//libreria y paranetros para cargar  fotos
        $config['upload_path']          = './fotos_productos/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']        = 2000;
        $config['max_width']       = 2000;
        $config['max_height']      = 2000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);	
	}
	public function index()
	{
		$data['publicitarios'] = $this->publicitarios_admin_model->get_publicitarios();
		$this->load->view('admin/publicitarios',$data);
	}
	public function insertar_publicitario()
	{
        if (!empty($_FILES['foto_publicitario']['name'])) {
			$foto_publicitario = $_FILES['foto_publicitario']['name'];
	        $this->upload->do_upload('foto_publicitario');
			}else{
				$foto_publicitario = NULL;
			}
		$data = array(
					'nombre_publicitario' => $this->input->post('nombre_publicitario'),
					'titulo_publicitario' => $this->input->post('titulo_publicitario'),
					'tipo_publicitario' => $this->input->post('tipo_publicitario'),
					'sitio_publicitario' => $this->input->post('sitio_publicitario'),
					'enlace_publicitario' => $this->input->post('enlace_publicitario'),
					'orden_publicitario' => $this->input->post('orden_publicitario'),
					'foto_publicitario' =>  $foto_publicitario		
					  );
		$this->publicitarios_admin_model->insert_publicitario($data);
		redirect('/admin/publicitarios');
	}
	public function update_publicitario()
	{
		$id_publicitario =  $this->input->post('id_publicitario');
        if (!empty($_FILES['foto_publicitario']['name'])) {
			$foto_publicitario = $_FILES['foto_publicitario']['name'];
	        $this->upload->do_upload('foto_publicitario');
			}else{
				$foto_publicitario =  $this->input->post('foto_publicitario');
			}
		$data = array(
					'nombre_publicitario' => $this->input->post('nombre_publicitario'),
					'titulo_publicitario' => $this->input->post('titulo_publicitario'),
					'tipo_publicitario' => $this->input->post('tipo_publicitario'),
					'sitio_publicitario' => $this->input->post('sitio_publicitario'),
					'enlace_publicitario' => $this->input->post('enlace_publicitario'),
					'orden_publicitario' => $this->input->post('orden_publicitario'),
					'foto_publicitario' =>  $foto_publicitario				
					  );
		$this->publicitarios_admin_model->update_publicitario($id_publicitario,$data);
		redirect('/admin/publicitarios/publicitario_edit/'.$id_publicitario);
	}
	public function publicitario_edit($id_publicitario)
	{
		$data['detalle_publicitario'] = $this->publicitarios_admin_model->detalle_publicitario($id_publicitario);
		$this->load->view('admin/publicitario_edit', $data);
	}
	public function borrar_foto($id_publicitario,$foto_publicitario) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->publicitarios_admin_model->delete_foto($id_publicitario); // actualizar base de datos solamente el campo de la foto
		unlink('./fotos_productos/'.$foto_publicitario);          // borrar fisicamente la foto
		redirect('/admin/publicitarios/publicitario_edit/'.$id_publicitario);  // redireccionar
	}
	public function borrar_cv_publicitario($id_publicitario,$cv_publicitario) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->publicitarios_admin_model->delete_cv($id_publicitario); // actualizar base de datos solamente el campo de la foto
		unlink('./fotos_productos/'.$cv_publicitario);          // borrar fisicamente la foto
		redirect('/admin/publicitarios/publicitario_edit/'.$id_publicitario);  // redireccionar
	}	
	public function borrar_publicitario($id_publicitario)
	{
		$this->publicitarios_admin_model->delete_publicitario($id_publicitario);
		redirect('/admin/publicitarios');
	}
}
