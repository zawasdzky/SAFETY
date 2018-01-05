<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesionales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/profesionales_admin_model');	
		$this->load->helper('url');
		//libreria y paranetros para cargar  fotos
        $config['upload_path']     = './cv_profesionales/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 2000;
        $config['max_width']       = 2000;
        $config['max_height']      = 2000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);	
	}

	public function index()
	{
		$data['profesionales'] = $this->profesionales_admin_model->get_profesionales();
		$data['categorias_profesionales'] = $this->profesionales_admin_model->get_categorias_profesionales();
		$this->load->view('admin/profesionales',$data);
	}

	public function insertar_profesional()
	{

		if (!empty($_FILES['foto_profesional']['name'])) {$this->upload->do_upload('foto_profesional'); $foto_profesional_info = $this->upload->data();
			$foto_profesional = $foto_profesional_info['file_name']; }else{ $foto_profesional = NULL;}

		if (!empty($_FILES['cv_profesional']['name'])) {$this->upload->do_upload('cv_profesional'); $cv_profesional_info = $this->upload->data();
			$cv_profesional = $cv_profesional_info['file_name']; }else{ $cv_profesional = NULL;}


		$data = array(
					'id_categoria' => $this->input->post('categoria_profesional'),
					'nombre_profesional' => $this->input->post('nombre_profesional'),
					'titulo_profesional' => $this->input->post('titulo_profesional'),
					'foto_profesional' =>  $foto_profesional,
					'cv_profesional' =>  $cv_profesional,
					'ciudad_profesional' =>  $this->input->post('ciudad_profesional'),
					'descripcion_profesional' => $this->input->post('descripcion_profesional'),
					'keywords_profesional' => $this->input->post('keywords_profesional'),
					'telefono_profesional' =>  $this->input->post('telefono_profesional'),
					'correo_profesional' => $this->input->post('correo_profesional')
					  );

		$this->profesionales_admin_model->insert_profesional($data);
		redirect('/admin/profesionales');
	}

	public function update_profesional($id_profesional)
	{
		//$id_profesional =  $this->input->post('id_profesional');// recibiendo el Id via post

		if (!empty($_FILES['foto_profesional']['name'])) { $this->upload->do_upload('foto_profesional'); $foto_profesional_info = $this->upload->data(); 
		$foto_profesional = $foto_profesional_info['file_name']; }
        else{ $foto_profesional = $this->input->post('foto_profesional');}


		if (!empty($_FILES['cv_profesional']['name'])) { $this->upload->do_upload('cv_profesional'); $cv_profesional_info = $this->upload->data(); 
		$cv_profesional = $cv_profesional_info['file_name']; }
        else{ $cv_profesional = $this->input->post('cv_profesional');}

		$data = array(
					'id_categoria' => $this->input->post('categoria_profesional'),
					'nombre_profesional' => $this->input->post('nombre_profesional'),
					'titulo_profesional' => $this->input->post('titulo_profesional'),
					'foto_profesional' =>  $foto_profesional,
					'cv_profesional' =>  $cv_profesional,
					'ciudad_profesional' =>  $this->input->post('ciudad_profesional'),
					'descripcion_profesional' => $this->input->post('descripcion_profesional'),
					'keywords_profesional' => $this->input->post('keywords_profesional'),
					'telefono_profesional' =>  $this->input->post('telefono_profesional'),
					'correo_profesional' => $this->input->post('correo_profesional')
					  );

		$this->profesionales_admin_model->update_profesional($id_profesional,$data);
		redirect('/admin/profesionales/profesional_edit/'.$id_profesional);
	}


	public function profesional_edit($id_profesional)
	{
		$data['detalle_profesional'] = $this->profesionales_admin_model->get_detalle_profesional($id_profesional);
		$data['categorias_profesionales'] = $this->profesionales_admin_model->get_categorias_profesionales();
		$this->load->view('admin/profesional_edit', $data);
	}
	public function borrar_foto($id_profesional,$foto_profesional) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->profesionales_admin_model->delete_foto($id_profesional); // actualizar base de datos solamente el campo de la foto
		unlink('./cv_profesionales/'.$foto_profesional);          // borrar fisicamente la foto
		redirect('/admin/profesionales/profesional_edit/'.$id_profesional);  // redireccionar
	}
	public function borrar_cv_profesional($id_profesional,$cv_profesional) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->profesionales_admin_model->delete_cv($id_profesional); // actualizar base de datos solamente el campo de la foto
		//unlink('./cv_profesionales/'.$cv_profesional);          // borrar fisicamente la foto
		redirect('/admin/profesionales/profesional_edit/'.$id_profesional);  // redireccionar
	}	
	public function borrar_profesional($id_profesional)
	{
		$this->profesionales_admin_model->delete_profesional($id_profesional);
		redirect('/admin/profesionales');
	}
	
}


