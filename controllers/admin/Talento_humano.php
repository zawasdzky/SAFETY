<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Talento_humano extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/talento_humano_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_talento_humano/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}
	public function index()
	{
		$data['talento_humano'] = $this->talento_humano_admin_model->get_talento_humano();
		$this->load->view('admin/talento_humano', $data);
	}
	public function insertar_talento()
	{
	if (!empty($_FILES['icono_talento']['name'])) {$this->upload->do_upload('icono_talento'); $icono_talento_info = $this->upload->data();$icono_talento = $icono_talento_info['file_name']; }else{ $icono_talento = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    if (!empty($_FILES['ficha_talento']['name'])) { $this->upload->do_upload('ficha_talento'); $ficha_info= $this->upload->data(); $ficha_talento = $ficha_info['file_name']; }else{ $ficha_talento = NULL;}
		$data = array(
					'orden_talento' => $this->input->post('orden_talento'),
					'nombre_talento' => $this->input->post('nombre_talento'),
					'titulo_talento' => $this->input->post('titulo_talento'),
					'tipo_talento' => $this->input->post('tipo_talento'),
					'descripcion_talento' => $this->input->post('descripcion_talento'),
					'contenido_talento' => $this->input->post('contenido_talento'),
					'enlace_talento' => $this->input->post('enlace_talento'),
					'estado_talento' => $this->input->post('estado_talento'),
					'keywords_talento' => $this->input->post('keywords_talento'),
					'fecha_publicacion_talento' => $this->input->post('fecha_publicacion_talento'),
					'url_amigable_talento' => $this->input->post('url_amigable_talento'),
					'video_talento' => $this->input->post('video_talento'),
					'destacado_talento' => $this->input->post('destacado_talento'),
					'icono_talento' => $icono_talento,
					'ficha_talento' => $ficha_talento,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->talento_humano_admin_model->insert_talento($data);
		redirect('/admin/talento_humano');
	}
	public function update_talento($id_talento)
	{
		if (!empty($_FILES['icono_talento']['name'])) {	$this->upload->do_upload('icono_talento'); $icono_talento_info = $this->upload->data(); $icono_talento = $icono_talento_info['file_name']; }else{ $icono_talento = $this->input->post('icono_talento');}
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
        if (!empty($_FILES['ficha_talento']['name'])) { $this->upload->do_upload('ficha_talento'); $ficha_info= $this->upload->data(); $ficha_talento = $ficha_info['file_name']; }else{ $ficha_talento =  $this->input->post('ficha_talento');}
		$data = array(
					'orden_talento' => $this->input->post('orden_talento'),
					'nombre_talento' => $this->input->post('nombre_talento'),
					'titulo_talento' => $this->input->post('titulo_talento'),
					'tipo_talento' => $this->input->post('tipo_talento'),
					'descripcion_talento' => $this->input->post('descripcion_talento'),
					'contenido_talento' => $this->input->post('contenido_talento'),
					'enlace_talento' => $this->input->post('enlace_talento'),
					'estado_talento' => $this->input->post('estado_talento'),
					'keywords_talento' => $this->input->post('keywords_talento'),
					'fecha_publicacion_talento' => $this->input->post('fecha_publicacion_talento'),
					'url_amigable_talento' => $this->input->post('url_amigable_talento'),
					'video_talento' => $this->input->post('video_talento'),
					'destacado_talento' => $this->input->post('destacado_talento'),
					'icono_talento' => $icono_talento,
					'ficha_talento' => $ficha_talento,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->talento_humano_admin_model->update_talento($id_talento,$data);
		redirect('/admin/talento_humano/talento_edit/'.$id_talento);
	}
	public function talento_edit($id_talento)
	{
		$data['detalle_talento'] = $this->talento_humano_admin_model->get_detalle_talento($id_talento);
		$this->load->view('admin/talento_edit', $data);
	}
	public function borrar_talento($id_talento)
	{
		$this->talento_humano_admin_model->delete_talento($id_talento);
		redirect('/admin/talento_humano');
	}
	public function borrar_ficha($id_talento)
	{
		$this->talento_humano_admin_model->delete_ficha($id_talento);
		redirect('/admin/talento_humano/talento_edit/'.$id_talento);
	}
	public function borrar_foto($id_talento,$foto,$foto_archivo)
	{
		$this->talento_humano_admin_model->delete_foto($id_talento,$foto);
		redirect('/admin/talento_humano/talento_edit/'.$id_talento);
	}
}
