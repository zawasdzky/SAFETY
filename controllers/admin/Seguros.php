<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguros extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/seguros_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_seguros/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 2000;
        $config['max_width']       = 2000;
        $config['max_height']      = 2000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['seguros'] = $this->seguros_admin_model->get_seguros();
		$this->load->view('admin/seguros', $data);
	}
	public function insertar_seguro()
	{
	if (!empty($_FILES['icono_seguro']['name'])) {$this->upload->do_upload('icono_seguro'); $icono_seguro_info = $this->upload->data();$icono_seguro = $icono_seguro_info['file_name']; }else{ $icono_seguro = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_seguro']['name'])) { $this->upload->do_upload('ficha_seguro'); $ficha_info= $this->upload->data(); $ficha_seguro = $ficha_info['file_name']; }else{ $ficha_seguro = NULL;}
		$data = array(
					'titulo_seguro' => $this->input->post('titulo_seguro'),
					'subtitulo_seguro' => $this->input->post('subtitulo_seguro'),
					'tipo_seguro' => $this->input->post('tipo_seguro'),
					'descripcion_seguro' => $this->input->post('descripcion_seguro'),
					'contenido_seguro' => $this->input->post('contenido_seguro'),
					'enlace_seguro' => $this->input->post('enlace_seguro'),
					'estado_seguro' => $this->input->post('estado_seguro'),
					'keywords_seguro' => $this->input->post('keywords_seguro'),
					'fecha_publicacion_seguro' => $this->input->post('fecha_publicacion_seguro'),
					'url_amigable_seguro' => $this->input->post('url_amigable_seguro'),
					'video_seguro' => $this->input->post('video_seguro'),
					'destacado_seguro' => $this->input->post('destacado_seguro'),
					'icono_seguro' => $icono_seguro,
					'ficha_seguro' => $ficha_seguro,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );

		$this->seguros_admin_model->insert_seguro($data);
		redirect('/admin/seguros');
	}

	public function update_seguro($id_seguro)
	{
		if (!empty($_FILES['icono_seguro']['name'])) {	$this->upload->do_upload('icono_seguro'); $icono_seguro_info = $this->upload->data(); $icono_seguro = $icono_seguro_info['file_name']; }else{ $icono_seguro = $this->input->post('icono_seguro');}
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
        if (!empty($_FILES['ficha_seguro']['name'])) { $this->upload->do_upload('ficha_seguro'); $ficha_info= $this->upload->data(); $ficha_seguro = $ficha_info['file_name']; }else{ $ficha_seguro =  $this->input->post('ficha_seguro');}
                           
		$data = array(
					'titulo_seguro' => $this->input->post('titulo_seguro'),
					'subtitulo_seguro' => $this->input->post('subtitulo_seguro'),
					'tipo_seguro' => $this->input->post('tipo_seguro'),
					'descripcion_seguro' => $this->input->post('descripcion_seguro'),
					'contenido_seguro' => $this->input->post('contenido_seguro'),
					'enlace_seguro' => $this->input->post('enlace_seguro'),
					'estado_seguro' => $this->input->post('estado_seguro'),
					'keywords_seguro' => $this->input->post('keywords_seguro'),
					'fecha_publicacion_seguro' => $this->input->post('fecha_publicacion_seguro'),
					'url_amigable_seguro' => $this->input->post('url_amigable_seguro'),
					'video_seguro' => $this->input->post('video_seguro'),
					'destacado_seguro' => $this->input->post('destacado_seguro'),
					'icono_seguro' => $icono_seguro,
					'ficha_seguro' => $ficha_seguro,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->seguros_admin_model->update_seguro($id_seguro,$data);
		redirect('/admin/seguros/seguro_edit/'.$id_seguro);
	}

	public function seguro_edit($id_seguro)
	{
		$data['detalle_seguro'] = $this->seguros_admin_model->get_detalle_seguro($id_seguro);
		$this->load->view('admin/seguro_edit', $data);
	}
	public function borrar_seguro($id_seguro)
	{
		$this->seguros_admin_model->delete_seguro($id_seguro);
		redirect('/admin/seguros');
	}
	public function borrar_ficha($id_seguro)
	{
		$this->seguros_admin_model->delete_ficha($id_seguro);
		redirect('/admin/seguros/seguro_edit/'.$id_seguro);
	}
	public function borrar_foto($id_seguro,$foto,$foto_archivo)
	{
		$this->seguros_admin_model->delete_foto($id_seguro,$foto);
		redirect('/admin/seguros/seguro_edit/'.$id_seguro);
	}
	
}

