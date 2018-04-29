<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class eventos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/eventos_admin_model');	
		$this->load->helper('url');
		//libreria y paranetros para cargar  fotos
        $config['upload_path']          = './fotos_eventos/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000;
        $config['max_width']            = 1000;
        $config['max_height']           = 1000;
        $config['overwrite'] 	        = TRUE;
        $this->load->library('upload', $config);	
	}
	public function index()
	{
		$data['eventos_solutions'] = $this->eventos_admin_model->get_eventos_solutions();
		$this->load->view('admin/eventos',$data);
	}
	public function insertar_evento()
	{
		if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
	    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
	    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
	    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
	    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
	    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
		$data = array(
					'nombre_evento' => $this->input->post('nombre_evento'),
					'descripcion_corta_evento' => $this->input->post('descripcion_corta_evento'),
					'descripcion_evento' => $this->input->post('descripcion_evento'),
					'tipo_evento' => $this->input->post('tipo_evento'),
					'direccion_evento' => $this->input->post('direccion_evento'),
					'ciudad_evento' => $this->input->post('ciudad_evento'),
					'enlace_evento' => $this->input->post('enlace_evento'),
					'orden_evento' => $this->input->post('orden_evento'),
					'fecha_inicio_evento' => $this->input->post('fecha_inicio_evento'),
					'fecha_fin_evento' => $this->input->post('fecha_fin_evento'),
					'hora_inicio_evento' => $this->input->post('hora_inicio_evento'),
					'hora_fin_evento' => $this->input->post('hora_fin_evento'),
					'foto0' =>  $foto0,
					'foto1' =>  $foto1,
					'foto2' =>  $foto2,
					'foto3' =>  $foto3,
					'foto4' =>  $foto4,
					'foto5' =>  $foto5
					  );
		$this->eventos_admin_model->insert_evento($data);
		redirect('/admin/eventos');
	}
	public function update_evento()
	{
		$id_evento =  $this->input->post('id_evento');
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
		$data = array(
					'nombre_evento' => $this->input->post('nombre_evento'),
					'descripcion_corta_evento' => $this->input->post('descripcion_corta_evento'),
					'descripcion_evento' => $this->input->post('descripcion_evento'),
					'tipo_evento' => $this->input->post('tipo_evento'),
					'direccion_evento' => $this->input->post('direccion_evento'),
					'ciudad_evento' => $this->input->post('ciudad_evento'),
					'enlace_evento' => $this->input->post('enlace_evento'),
					'orden_evento' => $this->input->post('orden_evento'),
					'fecha_inicio_evento' => $this->input->post('fecha_inicio_evento'),
					'fecha_fin_evento' => $this->input->post('fecha_fin_evento'),
					'hora_inicio_evento' => $this->input->post('hora_inicio_evento'),
					'hora_fin_evento' => $this->input->post('hora_fin_evento'),
					'foto0' =>  $foto0,
					'foto1' =>  $foto1,
					'foto2' =>  $foto2,
					'foto3' =>  $foto3,
					'foto4' =>  $foto4,
					'foto5' =>  $foto5
					  );
			$this->eventos_admin_model->update_evento($id_evento,$data);
			redirect('/admin/eventos/evento_edit/'.$id_evento);
	}
	public function evento_edit($id_evento)
	{
		$data['detalle_evento'] = $this->eventos_admin_model->detalle_evento($id_evento);
		$this->load->view('admin/evento_edit', $data);
	}
	public function borrar_foto($id_evento,$foto)
	{
		$this->eventos_admin_model->delete_foto($id_evento,$foto);
		redirect('/admin/eventos/evento_edit/'.$id_evento);  // redireccionar
	}
	public function borrar_evento($id_evento)
	{
		$this->eventos_admin_model->delete_evento($id_evento);
		redirect('/admin/eventos');
	}
}
