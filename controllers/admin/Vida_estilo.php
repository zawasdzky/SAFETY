<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vida_estilo extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/Vida_estilo_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_vida_estilo/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}
	public function index()
	{
		$data['articulos_vida_estilo'] = $this->Vida_estilo_admin_model->get_articulos_vida_estilo();
		$this->load->view('admin/vida_estilo', $data);
	}
	public function insertar_vida_estilo()
	{
	if (!empty($_FILES['icono_vida_estilo']['name'])) {$this->upload->do_upload('icono_vida_estilo'); $icono_vida_estilo_info = $this->upload->data();$icono_vida_estilo = $icono_vida_estilo_info['file_name']; }else{ $icono_vida_estilo = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    if (!empty($_FILES['ficha_vida_estilo']['name'])) { $this->upload->do_upload('ficha_vida_estilo'); $ficha_info= $this->upload->data(); $ficha_vida_estilo = $ficha_info['file_name']; }else{ $ficha_vida_estilo = NULL;}
		$data = array(
					'orden_vida_estilo' => $this->input->post('orden_vida_estilo'),
					'titulo_vida_estilo' => $this->input->post('titulo_vida_estilo'),
					'subtitulo_vida_estilo' => $this->input->post('subtitulo_vida_estilo'),
					'tipo_vida_estilo' => $this->input->post('tipo_vida_estilo'),
					'descripcion_vida_estilo' => $this->input->post('descripcion_vida_estilo'),
					'contenido_vida_estilo' => $this->input->post('contenido_vida_estilo'),
					'enlace_vida_estilo' => $this->input->post('enlace_vida_estilo'),
					'estado_vida_estilo' => $this->input->post('estado_vida_estilo'),
					'keywords_vida_estilo' => $this->input->post('keywords_vida_estilo'),
					'fecha_publica_vida_estilo' => $this->input->post('fecha_publica_vida_estilo'),
					'url_amigable_vida_estilo' => $this->input->post('url_amigable_vida_estilo'),
					'video_vida_estilo' => $this->input->post('video_vida_estilo'),
					'destacado_vida_estilo' => $this->input->post('destacado_vida_estilo'),
					'icono_vida_estilo' => $icono_vida_estilo,
					'ficha_vida_estilo' => $ficha_vida_estilo,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->Vida_estilo_admin_model->insert_vida_estilo($data);
		redirect('/admin/Vida_estilo');
	}
	public function update_vida_estilo($id_vida_estilo)
	{
		if (!empty($_FILES['icono_vida_estilo']['name'])) {	$this->upload->do_upload('icono_vida_estilo'); $icono_vida_estilo_info = $this->upload->data(); $icono_vida_estilo = $icono_vida_estilo_info['file_name']; }else{ $icono_vida_estilo = $this->input->post('icono_vida_estilo');}
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
        if (!empty($_FILES['ficha_vida_estilo']['name'])) { $this->upload->do_upload('ficha_vida_estilo'); $ficha_info= $this->upload->data(); $ficha_vida_estilo = $ficha_info['file_name']; }else{ $ficha_vida_estilo =  $this->input->post('ficha_vida_estilo');}
		$data = array(
					'orden_vida_estilo' => $this->input->post('orden_vida_estilo'),
					'titulo_vida_estilo' => $this->input->post('titulo_vida_estilo'),
					'subtitulo_vida_estilo' => $this->input->post('subtitulo_vida_estilo'),
					'tipo_vida_estilo' => $this->input->post('tipo_vida_estilo'),
					'descripcion_vida_estilo' => $this->input->post('descripcion_vida_estilo'),
					'contenido_vida_estilo' => $this->input->post('contenido_vida_estilo'),
					'enlace_vida_estilo' => $this->input->post('enlace_vida_estilo'),
					'estado_vida_estilo' => $this->input->post('estado_vida_estilo'),
					'keywords_vida_estilo' => $this->input->post('keywords_vida_estilo'),
					'fecha_publica_vida_estilo' => $this->input->post('fecha_publica_vida_estilo'),
					'url_amigable_vida_estilo' => $this->input->post('url_amigable_vida_estilo'),
					'video_vida_estilo' => $this->input->post('video_vida_estilo'),
					'destacado_vida_estilo' => $this->input->post('destacado_vida_estilo'),
					'icono_vida_estilo' => $icono_vida_estilo,
					'ficha_vida_estilo' => $ficha_vida_estilo,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->Vida_estilo_admin_model->update_vida_estilo($id_vida_estilo,$data);
		redirect('/admin/Vida_estilo/');
	}
	public function vida_estilo_edit($id_vida_estilo)
	{
		$data['detalle_vida_estilo'] = $this->Vida_estilo_admin_model->get_detalle_vida_estilo($id_vida_estilo);
		$this->load->view('admin/vida_estilo_edit', $data);
	}
	public function borrar_vida_estilo($id_vida_estilo)
	{
		$this->Vida_estilo_admin_model->delete_vida_estilo($id_vida_estilo);
		redirect('/admin/vida_estilo');
	}
	public function borrar_ficha($id_vida_estilo)
	{
		$this->Vida_estilo_admin_model->delete_ficha($id_vida_estilo);
		redirect('/admin/vida_estilo/vida_estilo_edit/'.$id_vida_estilo);
	}
	public function borrar_foto($id_vida_estilo,$foto,$foto_archivo)
	{
		$this->Vida_estilo_admin_model->delete_foto($id_vida_estilo,$foto);
		redirect('/admin/vida_estilo/vida_estilo_edit/'.$id_vida_estilo);
	}
}
