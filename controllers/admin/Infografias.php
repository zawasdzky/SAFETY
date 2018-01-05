<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografias extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/infografias_admin_model');
		$this->load->helper('url');

        $config['upload_path']     = './fotos_infografias/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 2000;
        $config['max_width']       = 2000;
        $config['max_height']      = 2000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['infografias'] = $this->infografias_admin_model->get_infografias();
		$this->load->view('admin/infografias', $data);
	}
	public function insertar_infografia()
	{
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}

		$data = array(
					'titulo_infografia' => $this->input->post('titulo_infografia'),
					'descripcion_infografia' => $this->input->post('descripcion_infografia'),
					'enlace_infografia' => $this->input->post('enlace_infografia'),
					'estado_infografia' => $this->input->post('estado_infografia'),
					'keywords_infografia' => $this->input->post('keywords_infografia'),
					'fecha_publicacion_infografia' => $this->input->post('fecha_publicacion_infografia'),
					'url_amigable_infografia' => $this->input->post('url_amigable_infografia'),
					'video_infografia' => $this->input->post('video_infografia'),
					'destacado_infografia' => $this->input->post('destacado_infografia'),
					'foto0' => $foto0,
					'foto1' => $foto1
					 );

		$this->infografias_admin_model->insert_infografia($data);
		redirect('/admin/infografias');
	}

	public function update_infografia($id_infografia)
	{

		if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; } else{ $foto0 = $this->input->post('foto0');}
        if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; } else{ $foto1 = $this->input->post('foto1');}
                           
		$data = array(
					'titulo_infografia' => $this->input->post('titulo_infografia'),
					'descripcion_infografia' => $this->input->post('descripcion_infografia'),
					'enlace_infografia' => $this->input->post('enlace_infografia'),
					'estado_infografia' => $this->input->post('estado_infografia'),
					'keywords_infografia' => $this->input->post('keywords_infografia'),
					'fecha_publicacion_infografia' => $this->input->post('fecha_publicacion_infografia'),
					'url_amigable_infografia' => $this->input->post('url_amigable_infografia'),
					'video_infografia' => $this->input->post('video_infografia'),
					'destacado_infografia' => $this->input->post('destacado_infografia'),
					'foto0' => $foto0,
					'foto1' => $foto1
					 );

		$this->infografias_admin_model->update_infografia($id_infografia,$data);
		redirect('/admin/infografias/infografia_edit/'.$id_infografia);
	}

	public function infografia_edit($id_infografia)
	{
		$data['detalle_infografia'] = $this->infografias_admin_model->get_detalle_infografia($id_infografia);
		$this->load->view('admin/infografia_edit', $data);
	}
	public function borrar_infografia($id_infografia)
	{
		$this->infografias_admin_model->delete_infografia($id_infografia);
		redirect('/admin/infografias');
	}
	public function borrar_ficha($id_infografia)
	{
		$this->infografias_admin_model->delete_ficha($id_infografia);
		redirect('/admin/infografias/infografia_edit/'.$id_infografia);
	}
	public function borrar_foto($id_infografia,$foto,$foto_archivo)
	{
		$this->infografias_admin_model->delete_foto($id_infografia,$foto);
		redirect('/admin/infografias/infografia_edit/'.$id_infografia);
	}
	
}

