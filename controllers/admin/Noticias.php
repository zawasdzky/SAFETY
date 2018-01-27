<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Noticias extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/noticias_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_noticias/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}
	public function index()
	{
		$data['noticias'] = $this->noticias_admin_model->get_noticias();
		$this->load->view('admin/noticias', $data);
	}
	public function insertar_noticia()
	{
	if (!empty($_FILES['icono_noticia']['name'])) {$this->upload->do_upload('icono_noticia'); $icono_noticia_info = $this->upload->data();$icono_noticia = $icono_noticia_info['file_name']; }else{ $icono_noticia = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    if (!empty($_FILES['ficha_noticia']['name'])) { $this->upload->do_upload('ficha_noticia'); $ficha_info= $this->upload->data(); $ficha_noticia = $ficha_info['file_name']; }else{ $ficha_noticia = NULL;}
		$data = array(
					'orden_noticia' => $this->input->post('orden_noticia'),
					'nombre_noticia' => $this->input->post('nombre_noticia'),
					'titulo_noticia' => $this->input->post('titulo_noticia'),
					'tipo_noticia' => $this->input->post('tipo_noticia'),
					'descripcion_noticia' => $this->input->post('descripcion_noticia'),
					'contenido_noticia' => $this->input->post('contenido_noticia'),
					'enlace_noticia' => $this->input->post('enlace_noticia'),
					'estado_noticia' => $this->input->post('estado_noticia'),
					'keywords_noticia' => $this->input->post('keywords_noticia'),
					'fecha_publicacion_noticia' => $this->input->post('fecha_publicacion_noticia'),
					'url_amigable_noticia' => $this->input->post('url_amigable_noticia'),
					'video_noticia' => $this->input->post('video_noticia'),
					'destacado_noticia' => $this->input->post('destacado_noticia'),
					'icono_noticia' => $icono_noticia,
					'ficha_noticia' => $ficha_noticia,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->noticias_admin_model->insert_noticia($data);
		redirect('/admin/noticias');
	}
	public function update_noticia($id_noticia)
	{
		if (!empty($_FILES['icono_noticia']['name'])) {	$this->upload->do_upload('icono_noticia'); $icono_noticia_info = $this->upload->data(); $icono_noticia = $icono_noticia_info['file_name']; }else{ $icono_noticia = $this->input->post('icono_noticia');}
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
        if (!empty($_FILES['ficha_noticia']['name'])) { $this->upload->do_upload('ficha_noticia'); $ficha_info= $this->upload->data(); $ficha_noticia = $ficha_info['file_name']; }else{ $ficha_noticia =  $this->input->post('ficha_noticia');}
		$data = array(
					'orden_noticia' => $this->input->post('orden_noticia'),
					'nombre_noticia' => $this->input->post('nombre_noticia'),
					'titulo_noticia' => $this->input->post('titulo_noticia'),
					'tipo_noticia' => $this->input->post('tipo_noticia'),
					'descripcion_noticia' => $this->input->post('descripcion_noticia'),
					'contenido_noticia' => $this->input->post('contenido_noticia'),
					'enlace_noticia' => $this->input->post('enlace_noticia'),
					'estado_noticia' => $this->input->post('estado_noticia'),
					'keywords_noticia' => $this->input->post('keywords_noticia'),
					'fecha_publicacion_noticia' => $this->input->post('fecha_publicacion_noticia'),
					'url_amigable_noticia' => $this->input->post('url_amigable_noticia'),
					'video_noticia' => $this->input->post('video_noticia'),
					'destacado_noticia' => $this->input->post('destacado_noticia'),
					'icono_noticia' => $icono_noticia,
					'ficha_noticia' => $ficha_noticia,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->noticias_admin_model->update_noticia($id_noticia,$data);
		redirect('/admin/noticias/');
	}
	public function noticia_edit($id_noticia)
	{
		$data['detalle_noticia'] = $this->noticias_admin_model->get_detalle_noticia($id_noticia);
		$this->load->view('admin/noticia_edit', $data);
	}
	public function borrar_noticia($id_noticia)
	{
		$this->noticias_admin_model->delete_noticia($id_noticia);
		redirect('/admin/noticias');
	}
	public function borrar_ficha($id_noticia)
	{
		$this->noticias_admin_model->delete_ficha($id_noticia);
		redirect('/admin/noticias/noticia_edit/'.$id_noticia);
	}
	public function borrar_foto($id_noticia,$foto,$foto_archivo)
	{
		$this->noticias_admin_model->delete_foto($id_noticia,$foto);
		redirect('/admin/noticias/noticia_edit/'.$id_noticia);
	}
}
