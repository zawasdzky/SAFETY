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
                    'orden_varios' => $this->input->post('orden_varios'),
                    'titulo_varios' => $this->input->post('titulo_varios'),
                    'enlace_varios' => $this->input->post('enlace_varios'),
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

}
