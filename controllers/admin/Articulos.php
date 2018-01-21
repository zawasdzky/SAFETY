<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/articulos_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_articulos/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['articulos'] = $this->articulos_admin_model->get_articulos();
		$this->load->view('admin/articulos', $data);
	}
	public function insertar_articulo()
	{
	if (!empty($_FILES['icono_articulo']['name'])) {$this->upload->do_upload('icono_articulo'); $icono_articulo_info = $this->upload->data();$icono_articulo = $icono_articulo_info['file_name']; }else{ $icono_articulo = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_articulo']['name'])) { $this->upload->do_upload('ficha_articulo'); $ficha_info= $this->upload->data(); $ficha_articulo = $ficha_info['file_name']; }else{ $ficha_articulo = NULL;}
		$data = array(
					'nombre_articulo' => $this->input->post('nombre_articulo'),
					'titulo_articulo' => $this->input->post('titulo_articulo'),
					'seccion_articulo' => $this->input->post('seccion_articulo'),
					'descripcion_articulo' => $this->input->post('descripcion_articulo'),
					'contenido_articulo' => $this->input->post('contenido_articulo'),
					'enlace_articulo' => $this->input->post('enlace_articulo'),
					'estado_articulo' => $this->input->post('estado_articulo'),
					'keywords_articulo' => $this->input->post('keywords_articulo'),
					'fecha_publicacion_articulo' => $this->input->post('fecha_publicacion_articulo'),
					'url_amigable_articulo' => $this->input->post('url_amigable_articulo'),
					'video_articulo' => $this->input->post('video_articulo'),
					'destacado_articulo' => $this->input->post('destacado_articulo'),
					'icono_articulo' => $icono_articulo,
					'ficha_articulo' => $ficha_articulo,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );

		$this->articulos_admin_model->insert_articulo($data);
		redirect('/admin/articulos');
	}

	public function update_articulo($id_articulo)
	{
		if (!empty($_FILES['icono_articulo']['name'])) {	$this->upload->do_upload('icono_articulo'); $icono_articulo_info = $this->upload->data(); $icono_articulo = $icono_articulo_info['file_name']; }else{ $icono_articulo = $this->input->post('icono_articulo');}
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
        if (!empty($_FILES['ficha_articulo']['name'])) { $this->upload->do_upload('ficha_articulo'); $ficha_info= $this->upload->data(); $ficha_articulo = $ficha_info['file_name']; }else{ $ficha_articulo =  $this->input->post('ficha_articulo');}
                           
		$data = array(
					'nombre_articulo' => $this->input->post('nombre_articulo'),
					'titulo_articulo' => $this->input->post('titulo_articulo'),
					'seccion_articulo' => $this->input->post('seccion_articulo'),
					'descripcion_articulo' => $this->input->post('descripcion_articulo'),
					'contenido_articulo' => $this->input->post('contenido_articulo'),
					'enlace_articulo' => $this->input->post('enlace_articulo'),
					'estado_articulo' => $this->input->post('estado_articulo'),
					'keywords_articulo' => $this->input->post('keywords_articulo'),
					'fecha_publicacion_articulo' => $this->input->post('fecha_publicacion_articulo'),
					'url_amigable_articulo' => $this->input->post('url_amigable_articulo'),
					'video_articulo' => $this->input->post('video_articulo'),
					'destacado_articulo' => $this->input->post('destacado_articulo'),
					'icono_articulo' => $icono_articulo,
					'ficha_articulo' => $ficha_articulo,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6
					 );
		$this->articulos_admin_model->update_articulo($id_articulo,$data);
		redirect('/admin/articulos/articulo_edit/'.$id_articulo);
	}

	public function articulo_edit($id_articulo)
	{
		$data['detalle_articulo'] = $this->articulos_admin_model->get_detalle_articulo($id_articulo);
		$this->load->view('admin/articulo_edit', $data);
	}
	public function borrar_articulo($id_articulo)
	{
		$this->articulos_admin_model->delete_articulo($id_articulo);
		redirect('/admin/articulos');
	}
	public function borrar_ficha($id_articulo)
	{
		$this->articulos_admin_model->delete_ficha($id_articulo);
		redirect('/admin/articulos/articulo_edit/'.$id_articulo);
	}
	public function borrar_foto($id_articulo,$foto,$foto_archivo)
	{
		$this->articulos_admin_model->delete_foto($id_articulo,$foto);
		redirect('/admin/articulos/articulo_edit/'.$id_articulo);
	}
	
}

