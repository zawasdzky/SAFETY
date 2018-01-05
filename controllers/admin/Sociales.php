<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sociales extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/sociales_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_sociales/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['sociales'] = $this->sociales_admin_model->get_sociales();
		$this->load->view('admin/sociales', $data);
	}
	public function insertar_social()
	{
	if (!empty($_FILES['icono_social']['name'])) {$this->upload->do_upload('icono_social'); $icono_social_info = $this->upload->data();$icono_social = $icono_social_info['file_name']; }else{ $icono_social = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_social']['name'])) { $this->upload->do_upload('ficha_social'); $ficha_info= $this->upload->data(); $ficha_social = $ficha_info['file_name']; }else{ $ficha_social = NULL;}
		$data = array(
					'nombre_social' => $this->input->post('nombre_social'),
					'titulo_social' => $this->input->post('titulo_social'),
					'tipo_social' => $this->input->post('tipo_social'),
					'descripcion_social' => $this->input->post('descripcion_social'),
					'contenido_social' => $this->input->post('contenido_social'),
					'enlace_social' => $this->input->post('enlace_social'),
					'estado_social' => $this->input->post('estado_social'),
					'keywords_social' => $this->input->post('keywords_social'),
					'fecha_publicacion_social' => $this->input->post('fecha_publicacion_social'),
					'url_amigable_social' => $this->input->post('url_amigable_social'),
					'video_social' => $this->input->post('video_social'),
					'destacado_social' => $this->input->post('destacado_social'),
					'icono_social' => $icono_social,
					'ficha_social' => $ficha_social,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );

		$this->sociales_admin_model->insert_social($data);
		redirect('/admin/sociales');
	}

	public function update_social($id_social)
	{
		if (!empty($_FILES['icono_social']['name'])) {	$this->upload->do_upload('icono_social'); $icono_social_info = $this->upload->data(); $icono_social = $icono_social_info['file_name']; }else{ $icono_social = $this->input->post('icono_social');}
		if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }
        else{ $foto0 = $this->input->post('foto0');}
        if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }
        else{ $foto1 = $this->input->post('foto1');}
        if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }
        else{ $foto2 = $this->input->post('foto2');}
        if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }
        else{ $foto3 = $this->input->post('foto3');}
        if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }
        else{ $foto4 = $this->input->post('foto4');}
        if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }
        else{ $foto5 = $this->input->post('foto5');}
        if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }
        else{ $foto6 = $this->input->post('foto6');}
        if (!empty($_FILES['ficha_social']['name'])) { $this->upload->do_upload('ficha_social'); $ficha_info= $this->upload->data(); $ficha_social = $ficha_info['file_name']; }else{ $ficha_social =  $this->input->post('ficha_social');}
                           
		$data = array(
					'nombre_social' => $this->input->post('nombre_social'),
					'titulo_social' => $this->input->post('titulo_social'),
					'tipo_social' => $this->input->post('tipo_social'),
					'descripcion_social' => $this->input->post('descripcion_social'),
					'contenido_social' => $this->input->post('contenido_social'),
					'enlace_social' => $this->input->post('enlace_social'),
					'estado_social' => $this->input->post('estado_social'),
					'keywords_social' => $this->input->post('keywords_social'),
					'fecha_publicacion_social' => $this->input->post('fecha_publicacion_social'),
					'url_amigable_social' => $this->input->post('url_amigable_social'),
					'video_social' => $this->input->post('video_social'),
					'destacado_social' => $this->input->post('destacado_social'),
					'icono_social' => $icono_social,
					'ficha_social' => $ficha_social,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->sociales_admin_model->update_social($id_social,$data);
		redirect('/admin/sociales/social_edit/'.$id_social);
	}

	public function social_edit($id_social)
	{
		$data['detalle_social'] = $this->sociales_admin_model->get_detalle_social($id_social);
		$this->load->view('admin/social_edit', $data);
	}
	public function borrar_social($id_social)
	{
		$this->sociales_admin_model->delete_social($id_social);
		redirect('/admin/sociales');
	}
	public function borrar_ficha($id_social)
	{
		$this->sociales_admin_model->delete_ficha($id_social);
		redirect('/admin/sociales/social_edit/'.$id_social);
	}
	public function borrar_foto($id_social,$foto,$foto_archivo)
	{
		$this->sociales_admin_model->delete_foto($id_social,$foto);
		redirect('/admin/sociales/social_edit/'.$id_social);
	}
	
}

