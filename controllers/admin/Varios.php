<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Varios extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/includes/head_admin');
		$this->load->view('admin/includes/header_admin');
		$this->load->view('admin/includes/sidebar');
		$this->load->model('admin/Varios_admin_model');
		$this->load->helper('url');
	//libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_Varios/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite'] 	   = TRUE;
        $this->load->library('upload', $config);
	}
	public function index()
	{
		$data['videos'] = $this->Varios_admin_model->get_varios_videos();
		$data['frases'] = $this->Varios_admin_model->get_varios_frases();
		$this->load->view('admin/varios', $data);
	}
	public function insertar_varios()
	{
		$data = array(
					'titulo_varios' => $this->input->post('titulo_varios'),
					'orden_varios' => $this->input->post('orden_varios'),
					'texto_varios' => $this->input->post('texto_varios'),
					'descripcion_varios' => $this->input->post('descripcion_varios'),
					'tipo_varios' => $this->input->post('tipo_varios'),
					'enlace_varios' => $this->input->post('enlace_varios'),
					'keywords_varios' => $this->input->post('keywords_varios'),
					'seccion_varios' => $this->input->post('seccion_varios')
					 );
		$this->Varios_admin_model->insert_varios($data);
		redirect('/admin/varios');
	}
	public function update_varios($id_varios)
	{
		$data = array(
					'titulo_varios' => $this->input->post('titulo_varios'),
					'orden_varios' => $this->input->post('orden_varios'),
					'texto_varios' => $this->input->post('texto_varios'),
					'descripcion_varios' => $this->input->post('descripcion_varios'),
					'keywords_varios' => $this->input->post('keywords_varios'),
					'seccion_varios' => $this->input->post('seccion_varios')
					 );
		$this->Varios_admin_model->update_varios($id_varios,$data);
		redirect('/admin/varios/varios_edit/'.$id_varios);
	}
	public function varios_edit($id_varios)
	{
		$data['detalle_varios'] = $this->Varios_admin_model->get_detalle_varios($id_varios);
		$this->load->view('admin/varios_edit', $data);
	}
	public function borrar_varios($id_varios)
	{
		$this->Varios_admin_model->delete_varios($id_varios);
		redirect('/admin/varios');
	}
	public function borrar_ficha($id_varios)
	{
		$this->Varios_admin_model->delete_ficha($id_varios);
		redirect('/admin/Varios/varios_edit/'.$id_varios);
	}
	public function borrar_foto($id_varios,$foto,$foto_archivo)
	{
		$this->Varios_admin_model->delete_foto($id_varios,$foto);
		redirect('/admin/Varios/varios_edit/'.$id_varios);
	}
}
