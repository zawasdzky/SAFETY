<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legislaciones extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/legislaciones_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './legislaciones/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['legislaciones'] = $this->legislaciones_admin_model->get_legislaciones();
		$this->load->view('admin/legislaciones', $data);
	}
	public function insertar_legislacion()
	{
	if (!empty($_FILES['icono_legislacion']['name'])) {$this->upload->do_upload('icono_legislacion'); $icono_legislacion_info = $this->upload->data();$icono_legislacion = $icono_legislacion_info['file_name']; }else{ $icono_legislacion = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['ficha_legislacion']['name'])) { $this->upload->do_upload('ficha_legislacion'); $ficha_info= $this->upload->data(); $ficha_legislacion = $ficha_info['file_name']; }else{ $ficha_legislacion = NULL;}
		$data = array(
					'titulo_legislacion' => $this->input->post('titulo_legislacion'),
					'tipo_legislacion' => $this->input->post('tipo_legislacion'),
					'categoria_legislacion' => $this->input->post('categoria_legislacion'),
					'descripcion_legislacion' => $this->input->post('descripcion_legislacion'),
					'fecha_legislacion' => $this->input->post('fecha_legislacion'),
					'estado_legislacion' => $this->input->post('estado_legislacion'),
					'keywords_legislacion' => $this->input->post('keywords_legislacion'),
					'url_amigable_legislacion' => $this->input->post('url_amigable_legislacion'),
					'icono_legislacion' => $icono_legislacion,
					'ficha_legislacion' => $ficha_legislacion,
					'foto0' => $foto0
					 );
		$this->legislaciones_admin_model->insert_legislacion($data);
		redirect('/admin/legislaciones');
	}

	public function update_legislacion($id_legislacion)
	{
		if (!empty($_FILES['icono_legislacion']['name'])) {	$this->upload->do_upload('icono_legislacion'); $icono_legislacion_info = $this->upload->data(); $icono_legislacion = $icono_legislacion_info['file_name']; }else{ $icono_legislacion = $this->input->post('icono_legislacion');}
		if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }
        else{ $foto0 = $this->input->post('foto0');}
        if (!empty($_FILES['ficha_legislacion']['name'])) { $this->upload->do_upload('ficha_legislacion'); $ficha_info= $this->upload->data(); $ficha_legislacion = $ficha_info['file_name']; }else{ $ficha_legislacion =  $this->input->post('ficha_legislacion');}                       
		$data = array(
					'titulo_legislacion' => $this->input->post('titulo_legislacion'),
					'tipo_legislacion' => $this->input->post('tipo_legislacion'),
					'categoria_legislacion' => $this->input->post('categoria_legislacion'),
					'descripcion_legislacion' => $this->input->post('descripcion_legislacion'),
					'fecha_legislacion' => $this->input->post('fecha_legislacion'),
					'estado_legislacion' => $this->input->post('estado_legislacion'),
					'keywords_legislacion' => $this->input->post('keywords_legislacion'),
					'url_amigable_legislacion' => $this->input->post('url_amigable_legislacion'),
					'icono_legislacion' => $icono_legislacion,
					'ficha_legislacion' => $ficha_legislacion,
					'foto0' => $foto0
					 );
		$this->legislaciones_admin_model->update_legislacion($id_legislacion,$data);
		redirect('/admin/legislaciones/legislacion_edit/'.$id_legislacion);
	}

	public function legislacion_edit($id_legislacion)
	{
		$data['detalle_legislacion'] = $this->legislaciones_admin_model->get_detalle_legislacion($id_legislacion);
		$this->load->view('admin/legislacion_edit', $data);
	}
	public function borrar_legislacion($id_legislacion)
	{
		$this->legislaciones_admin_model->delete_legislacion($id_legislacion);
		redirect('/admin/legislaciones');
	}
	public function borrar_ficha($id_legislacion)
	{
		$this->legislaciones_admin_model->delete_ficha($id_legislacion);
		redirect('/admin/legislaciones/legislacion_edit/'.$id_legislacion);
	}
	public function borrar_foto($id_legislacion,$foto,$foto_archivo)
	{
		$this->legislaciones_admin_model->delete_foto($id_legislacion,$foto);
		redirect('/admin/legislaciones/legislacion_edit/'.$id_legislacion);
	}
	
}

