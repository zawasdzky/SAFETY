<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/productos_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_productos/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}

	public function index()
	{
		$data['categorias'] = $this->productos_admin_model->get_categorias();
		$data['productos'] = $this->productos_admin_model->get_productos();
		$data['marcas'] = $this->productos_admin_model->get_marcas();
		$this->load->view('admin/productos', $data);
	}
	public function insertar_producto()
	{
	if (!empty($_FILES['icono_producto']['name'])) {$this->upload->do_upload('icono_producto'); $icono_producto_info = $this->upload->data();$icono_producto = $icono_producto_info['file_name']; }else{ $icono_producto = NULL;}
	if (!empty($_FILES['foto0']['name'])) {	$this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) {	$this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) {	$this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) {	$this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) {	$this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) {	$this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) {	$this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_producto']['name'])) { $this->upload->do_upload('ficha_producto'); $ficha_info= $this->upload->data(); $ficha_producto = $ficha_info['file_name']; }else{ $ficha_producto = NULL;}
		$data = array(
					'id_marca' => $this->input->post('id_marca'),
					'nombre_producto' => $this->input->post('nombre_producto'),
					'titulo_producto' => $this->input->post('titulo_producto'),
					'contenido_producto' => $this->input->post('contenido_producto'),
					'enlace_producto' => $this->input->post('enlace_producto'),
					'estado_producto' => $this->input->post('estado_producto'),
					'keywords_producto' => $this->input->post('keywords_producto'),
					'fecha_publicacion_producto' => $this->input->post('fecha_publicacion_producto'),
					'url_amigable' => $this->input->post('url_amigable'),
					'destacado_producto' => $this->input->post('destacado_producto'),
					'icono_producto' => $icono_producto,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6,
					'ficha_producto' => $ficha_producto,
					'video_producto' => $this->input->post('video_producto')
					  );

		$this->productos_admin_model->insert_producto($data);
		
		//Insertando en otra tabla la categoria del producto
		$identificador = $this->db->insert_id();//obteniendo el ultimo id insertado
		$data2 = array(
					'id_categoria' => $this->input->post('id_categoria'),
					'id_producto' => $identificador
					  );

		$this->productos_admin_model->insert_categoria_producto($data2);
		redirect('/admin/Productos');
	}

	public function update_producto($id_producto)
	{
		if (!empty($_FILES['icono_producto']['name'])) {	$this->upload->do_upload('icono_producto'); $icono_producto_info = $this->upload->data(); $icono_producto = $icono_producto_info['file_name']; }else{ $icono_producto = $this->input->post('icono_producto');}
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
        if (!empty($_FILES['ficha_producto']['name'])) { $this->upload->do_upload('ficha_producto'); $ficha_info= $this->upload->data(); $ficha_producto = $ficha_info['file_name']; }else{ $ficha_producto =  $this->input->post('ficha_producto');}
                           
		$data = array(
					'id_marca' => $this->input->post('id_marca'),
					'nombre_producto' => $this->input->post('nombre_producto'),
					'titulo_producto' => $this->input->post('titulo_producto'),
					'contenido_producto' => $this->input->post('contenido_producto'),
					'enlace_producto' => $this->input->post('enlace_producto'),
					'estado_producto' => $this->input->post('estado_producto'),
					'keywords_producto' => $this->input->post('keywords_producto'),
					'fecha_publicacion_producto' => $this->input->post('fecha_publicacion_producto'),
					'url_amigable' => $this->input->post('url_amigable'),
					'destacado_producto' => $this->input->post('destacado_producto'),
					'icono_producto' => $icono_producto,
					'foto0' => $foto0,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3,
					'foto4' => $foto4,
					'foto5' => $foto5,
					'foto6' => $foto6,
					'ficha_producto' => $ficha_producto,
					'video_producto' => $this->input->post('video_producto')
					  );
		$this->productos_admin_model->update_producto($id_producto,$data);
		redirect('/admin/Productos/producto_edit/'.$id_producto);
	}

	public function producto_edit($id_producto)
	{
		$data['detalle_producto'] = $this->productos_admin_model->get_detalle_producto($id_producto);
		$data['categorias_producto'] = $this->productos_admin_model->get_categorias_producto($id_producto);
		$data['categorias'] = $this->productos_admin_model->get_categorias();
		$data['marcas'] = $this->productos_admin_model->get_marcas();
		$this->load->view('admin/producto_edit', $data);
	}
	public function borrar_producto($id_producto)
	{
		$this->productos_admin_model->delete_producto($id_producto);
		redirect('/admin/Productos');
	}
	public function borrar_ficha($id_producto)
	{
		$this->productos_admin_model->delete_ficha($id_producto);
		redirect('/admin/Productos/producto_edit/'.$id_producto);
	}
	public function borrar_foto($id_producto,$foto,$foto_archivo)
	{
		$this->productos_admin_model->delete_foto($id_producto,$foto);
		//unlink('./fotos_productos/'.$foto_archivo);    
		redirect('/admin/Productos/producto_edit/'.$id_producto);
	}

	public function agregar_categoria_producto()
	{
	$data = array(
		'id_categoria' => $this->input->post('id_categoria'),
		'id_producto' => $this->input->post('id_producto')
		  );

		$this->productos_admin_model->agregar_categoria_producto($data);
		redirect('/admin/Productos/producto_edit/'.$id_producto);
	}
	// public function agregar_categoria_producto($id_categoria,$id_producto)
	// {
	// 	$this->productos_admin_model->agregar_categoria_producto($id_categoria,$id_producto);
	// 	redirect('/admin/Productos');
	// }

	public function borrar_categoria_producto($id_categoria_producto,$id_producto)
	{
		$this->productos_admin_model->borrar_categoria_producto($id_categoria_producto);
		redirect('/admin/Productos/producto_edit/'.$id_producto);
	}

	
}

