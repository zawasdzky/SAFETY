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
        $config['upload_path']          = './fotos_productos/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;
        $this->load->library('upload', $config);	
	}
	public function index()
	{
		$data['eventos_solutions'] = $this->eventos_admin_model->get_eventos_solutions();
		$this->load->view('admin/eventos',$data);
	}

	public function insertar_evento()
	{
        if (!empty($_FILES['foto_evento']['name'])) {
			$foto_evento = $_FILES['foto_evento']['name'];
	        $this->upload->do_upload('foto_evento');
			}else{
				$foto_evento = NULL;
			}
		$data = array(
					'nombre_evento' => $this->input->post('nombre_evento'),
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
					'foto_evento' =>  $foto_evento
					  );
		$this->eventos_admin_model->insert_evento($data);
		redirect('/admin/eventos');
	}

	public function update_evento()
	{
		$id_evento =  $this->input->post('id_evento');
        if (!empty($_FILES['foto_evento']['name'])) {
			$foto_evento = $_FILES['foto_evento']['name'];
	        $this->upload->do_upload('foto_evento');
			}else{
				$foto_evento =  $this->input->post('foto_evento');
			}
		$data = array(
					'nombre_evento' => $this->input->post('nombre_evento'),
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
					'foto_evento' =>  $foto_evento				
					  );

			$this->eventos_admin_model->update_evento($id_evento,$data);
			redirect('/admin/eventos/evento_edit/'.$id_evento);
	}

	public function evento_edit($id_evento)
	{
		$data['detalle_evento'] = $this->eventos_admin_model->detalle_evento($id_evento);
		$this->load->view('admin/evento_edit', $data);
	}
	public function borrar_foto($id_evento,$foto_evento) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->eventos_admin_model->delete_foto($id_evento); // actualizar base de datos solamente el campo de la foto
		//unlink('./fotos_productos/'.$foto_evento);          // borrar fisicamente la foto
		redirect('/admin/eventos/evento_edit/'.$id_evento);  // redireccionar
	}
	public function borrar_evento($id_evento)
	{
		$this->eventos_admin_model->delete_evento($id_evento);
		redirect('/admin/eventos');
	}
	
}


