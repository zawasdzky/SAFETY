<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/marcas_admin_model');	
		$this->load->helper(array('form','file','url'));
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_productos/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']        = 1000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);

	}

	public function index()
	{
		$data['marcas'] = $this->marcas_admin_model->get_marcas();
		$data['categorias'] = $this->marcas_admin_model->get_categorias();
		$this->load->view('admin/marcas',$data);
	}

	public function insertar_marca()
	{

        if (!empty($_FILES['foto_marca']['name'])) {
			$foto_marca = $_FILES['foto_marca']['name'];
	        $this->upload->do_upload('foto_marca');
			}else{$foto_marca = NULL;}

        if (!empty($_FILES['logo_marca']['name'])) {
			$logo_marca = $_FILES['logo_marca']['name'];
	        $this->upload->do_upload('logo_marca');
			}else{$logo_marca = NULL;}

		$data = array(
					'id_categoria' => $this->input->post('id_categoria'),
					'nombre_marca' => $this->input->post('nombre_marca'),
					'titulo_marca' => $this->input->post('titulo_marca'),
					'foto_marca' =>  $foto_marca,
					'logo_marca' =>  $logo_marca,
					'descripcion_marca' => $this->input->post('descripcion_marca'),
					'keywords_marca' => $this->input->post('keywords_marca'),
					'enlace_marca' => $this->input->post('enlace_marca'),
					'telefonos_marca' => $this->input->post('telefonos_marca'),
					'direccion_marca' => $this->input->post('direccion_marca'),
					'ciudad_marca' => $this->input->post('ciudad_marca'),

					'telefonos2_marca' => $this->input->post('telefonos2_marca'),
					'direccion2_marca' => $this->input->post('direccion2_marca'),
					'ciudad2_marca' => $this->input->post('ciudad2_marca'),

					'telefonos3_marca' => $this->input->post('telefonos3_marca'),
					'direccion3_marca' => $this->input->post('direccion3_marca'),
					'ciudad3_marca' => $this->input->post('ciudad3_marca'),

					'contacto_marca' => $this->input->post('contacto_marca'),
					'cargo_contacto_marca' => $this->input->post('cargo_contacto_marca'),
					'email_marca' => $this->input->post('email_marca')
					  );
		
		$this->marcas_admin_model->insert_marca($data);
		redirect('/admin/Marcas');
	}

	public function update_marca()
	{
		$id_marca =  $this->input->post('id_marca');// recibiendo el Id via post

        if (!empty($_FILES['foto_marca']['name'])) {		
	        $this->upload->do_upload('foto_marca');
	        $file_info = $this->upload->data();   
			$foto_marca = $file_info['file_name'];
		}else{$foto_marca =  $this->input->post('foto_marca');}

        if (!empty($_FILES['logo_marca']['name'])) {		
	        $this->upload->do_upload('logo_marca');
	        $file_info = $this->upload->data();   
			$logo_marca = $file_info['file_name'];
		}else{$logo_marca =  $this->input->post('logo_marca');}

		$data = array(
					'id_categoria' => $this->input->post('id_categoria'),
					'nombre_marca' => $this->input->post('nombre_marca'),
					'titulo_marca' => $this->input->post('titulo_marca'),
					'foto_marca' =>  $foto_marca,
					'logo_marca' =>  $logo_marca,
					'descripcion_marca' => $this->input->post('descripcion_marca'),
					'keywords_marca' => $this->input->post('keywords_marca'),
					'enlace_marca' => $this->input->post('enlace_marca'),
					'telefonos_marca' => $this->input->post('telefonos_marca'),
					'direccion_marca' => $this->input->post('direccion_marca'),
					'ciudad_marca' => $this->input->post('ciudad_marca'),

					'telefonos2_marca' => $this->input->post('telefonos2_marca'),
					'direccion2_marca' => $this->input->post('direccion2_marca'),
					'ciudad2_marca' => $this->input->post('ciudad2_marca'),

					'telefonos3_marca' => $this->input->post('telefonos3_marca'),
					'direccion3_marca' => $this->input->post('direccion3_marca'),
					'ciudad3_marca' => $this->input->post('ciudad3_marca'),

					'contacto_marca' => $this->input->post('contacto_marca'),
					'cargo_contacto_marca' => $this->input->post('cargo_contacto_marca'),
					'email_marca' => $this->input->post('email_marca')
					  );

		$this->marcas_admin_model->update_marca($id_marca,$data);
		redirect('/admin/Marcas/marca_edit/'.$id_marca);
	}

	public function marca_edit($id_marca)
	{
		$data['detalle_marca'] = $this->marcas_admin_model->get_detalle_marca($id_marca);
		$data['categorias'] = $this->marcas_admin_model->get_categorias();
		$this->load->view('admin/marca_edit', $data);
	}
	public function borrar_foto($id_marca,$foto_marca) // se envia el parametro del id  y la foto para borrarla fisicamente
	{
		$this->marcas_admin_model->delete_foto($id_marca); // actualizar base de datos solamente el campo de la foto
		//unlink('./fotos_productos/'.$foto_marca);          // borrar fisicamente la foto
		redirect('/admin/Marcas/marca_edit/'.$id_marca);  // redireccionar
	}
	public function borrar_logo($id_marca,$logo_marca) // se envia el parametro del id  y la logo para borrarla fisicamente
	{
		$this->marcas_admin_model->delete_logo($id_marca); // actualizar base de datos solamente el campo de la logo
		//unlink('./logos_productos/'.$logo_marca);          // borrar fisicamente la logo
		redirect('/admin/Marcas/marca_edit/'.$id_marca);  // redireccionar
	}
	public function borrar_marca($id_marca)
	{
		$this->marcas_admin_model->delete_marca($id_marca);
		redirect('/admin/marcas');
	}
	
}


