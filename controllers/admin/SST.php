<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SST extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/SST_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_SST/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 2000;
        $config['max_width']       = 2000;
        $config['max_height']      = 2000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['SST'] = $this->SST_admin_model->get_SST();
		$this->load->view('admin/SST', $data);
	}
	public function insertar_SST()
	{
	if (!empty($_FILES['icono_SST']['name'])) {$this->upload->do_upload('icono_SST'); $icono_SST_info = $this->upload->data();$icono_SST = $icono_SST_info['file_name']; }else{ $icono_SST = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_SST']['name'])) { $this->upload->do_upload('ficha_SST'); $ficha_info= $this->upload->data(); $ficha_SST = $ficha_info['file_name']; }else{ $ficha_SST = NULL;}
		$data = array(
					'titulo_SST' => $this->input->post('titulo_SST'),
					'subtitulo_SST' => $this->input->post('subtitulo_SST'),
					'tipo_SST' => $this->input->post('tipo_SST'),
					'descripcion_SST' => $this->input->post('descripcion_SST'),
					'contenido_SST' => $this->input->post('contenido_SST'),
					'enlace_SST' => $this->input->post('enlace_SST'),
					'estado_SST' => $this->input->post('estado_SST'),
					'keywords_SST' => $this->input->post('keywords_SST'),
					'fecha_publicacion_SST' => $this->input->post('fecha_publicacion_SST'),
					'url_amigable_SST' => $this->input->post('url_amigable_SST'),
					'video_SST' => $this->input->post('video_SST'),
					'destacado_SST' => $this->input->post('destacado_SST'),
					'icono_SST' => $icono_SST,
					'ficha_SST' => $ficha_SST,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );

		$this->SST_admin_model->insert_SST($data);
		redirect('/admin/SST');
	}

	public function update_SST($id_SST)
	{
		if (!empty($_FILES['icono_SST']['name'])) {	$this->upload->do_upload('icono_SST'); $icono_SST_info = $this->upload->data(); $icono_SST = $icono_SST_info['file_name']; }else{ $icono_SST = $this->input->post('icono_SST');}
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
        if (!empty($_FILES['ficha_SST']['name'])) { $this->upload->do_upload('ficha_SST'); $ficha_info= $this->upload->data(); $ficha_SST = $ficha_info['file_name']; }else{ $ficha_SST =  $this->input->post('ficha_SST');}
                           
		$data = array(
					'titulo_SST' => $this->input->post('titulo_SST'),
					'subtitulo_SST' => $this->input->post('subtitulo_SST'),
					'tipo_SST' => $this->input->post('tipo_SST'),
					'descripcion_SST' => $this->input->post('descripcion_SST'),
					'contenido_SST' => $this->input->post('contenido_SST'),
					'enlace_SST' => $this->input->post('enlace_SST'),
					'estado_SST' => $this->input->post('estado_SST'),
					'keywords_SST' => $this->input->post('keywords_SST'),
					'fecha_publicacion_SST' => $this->input->post('fecha_publicacion_SST'),
					'url_amigable_SST' => $this->input->post('url_amigable_SST'),
					'video_SST' => $this->input->post('video_SST'),
					'destacado_SST' => $this->input->post('destacado_SST'),
					'icono_SST' => $icono_SST,
					'ficha_SST' => $ficha_SST,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->SST_admin_model->update_SST($id_SST,$data);
		redirect('/admin/SST/SST_edit/'.$id_SST);
	}

	public function SST_edit($id_SST)
	{
		$data['detalle_SST'] = $this->SST_admin_model->get_detalle_SST($id_SST);
		$this->load->view('admin/SST_edit', $data);
	}
	public function borrar_SST($id_SST)
	{
		$this->SST_admin_model->delete_SST($id_SST);
		redirect('/admin/SST');
	}
	public function borrar_ficha($id_SST)
	{
		$this->SST_admin_model->delete_ficha($id_SST);
		redirect('/admin/SST/SST_edit/'.$id_SST);
	}
	public function borrar_foto($id_SST,$foto,$foto_archivo)
	{
		$this->SST_admin_model->delete_foto($id_SST,$foto);
		redirect('/admin/SST/SST_edit/'.$id_SST);
	}
	
}

