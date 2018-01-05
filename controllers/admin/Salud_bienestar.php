<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salud_bienestar extends CI_Controller {

    public function __construct()
  {
    parent::__construct();
    $this->load->view('admin/includes/head_admin');
    $this->load->view('admin/includes/header_admin');
    $this->load->view('admin/includes/sidebar');
    $this->load->model('admin/salud_bienestar_admin_model');
    $this->load->helper('url');
  //libreria y paranetros para cargar  fotos o archivos
        $config['upload_path']     = './fotos_salud_bienestar/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']        = 1000;
        $config['max_width']       = 1000;
        $config['max_height']      = 1000;
        $config['overwrite']     = TRUE;
        $this->load->library('upload', $config);
  }

  public function index()
  {
    $data['salud_bienestar'] = $this->salud_bienestar_admin_model->get_salud_bienestar();
    $this->load->view('admin/salud_bienestar', $data);
  }
  public function insertar_salud()
  {
  if (!empty($_FILES['icono_salud']['name'])) {$this->upload->do_upload('icono_salud'); $icono_salud_info = $this->upload->data();$icono_salud = $icono_salud_info['file_name']; }else{ $icono_salud = NULL;}
  if (!empty($_FILES['foto0']['name'])) { $this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }else{ $foto0 = NULL;}
    if (!empty($_FILES['foto1']['name'])) { $this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }else{ $foto1 = NULL;}
    if (!empty($_FILES['foto2']['name'])) { $this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }else{ $foto2 = NULL;}
    if (!empty($_FILES['foto3']['name'])) { $this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }else{ $foto3 = NULL;}
    if (!empty($_FILES['foto4']['name'])) { $this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }else{ $foto4 = NULL;}
    if (!empty($_FILES['foto5']['name'])) { $this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }else{ $foto5 = NULL;}
    if (!empty($_FILES['foto6']['name'])) { $this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }else{ $foto6 = NULL;}
    
    if (!empty($_FILES['ficha_salud']['name'])) { $this->upload->do_upload('ficha_salud'); $ficha_info= $this->upload->data(); $ficha_salud = $ficha_info['file_name']; }else{ $ficha_salud = NULL;}
    $data = array(
          'titulo_salud' => $this->input->post('titulo_salud'),
          'subtitulo_salud' => $this->input->post('subtitulo_salud'),          
          'descripcion_salud' => $this->input->post('descripcion_salud'),
          'contenido_salud' => $this->input->post('contenido_salud'),
          'enlace_salud' => $this->input->post('enlace_salud'),
          'estado_salud' => $this->input->post('estado_salud'),
          'keywords_salud' => $this->input->post('keywords_salud'),
          'fecha_publicacion_salud' => $this->input->post('fecha_publicacion_salud'),
          'url_amigable_salud' => $this->input->post('url_amigable_salud'),
          'video_salud' => $this->input->post('video_salud'),
          'destacado_salud' => $this->input->post('destacado_salud'),
          'icono_salud' => $icono_salud,
          'ficha_salud' => $ficha_salud,
          'foto0' => $foto0,
          'foto1' => $foto1,
          'foto2' => $foto2,
          'foto3' => $foto3,
          'foto4' => $foto4,
          'foto5' => $foto5,
          'foto6' => $foto6
           );

    $this->salud_bienestar_admin_model->insert_salud($data);
    redirect('/admin/salud_bienestar');
  }

  public function update_salud($id_salud)
  {
    if (!empty($_FILES['icono_salud']['name'])) { $this->upload->do_upload('icono_salud'); $icono_salud_info = $this->upload->data(); $icono_salud = $icono_salud_info['file_name']; }else{ $icono_salud = $this->input->post('icono_salud');}
    if (!empty($_FILES['foto0']['name'])) { $this->upload->do_upload('foto0'); $foto0_info = $this->upload->data(); $foto0 = $foto0_info['file_name']; }
        else{ $foto0 = $this->input->post('foto0');}
        if (!empty($_FILES['foto1']['name'])) { $this->upload->do_upload('foto1'); $foto1_info = $this->upload->data(); $foto1 = $foto1_info['file_name']; }
        else{ $foto1 = $this->input->post('foto1');}
        if (!empty($_FILES['foto2']['name'])) { $this->upload->do_upload('foto2'); $foto2_info = $this->upload->data(); $foto2 = $foto2_info['file_name']; }
        else{ $foto2 = $this->input->post('foto2');}
        if (!empty($_FILES['foto3']['name'])) { $this->upload->do_upload('foto3'); $foto3_info = $this->upload->data(); $foto3 = $foto3_info['file_name']; }
        else{ $foto3 = $this->input->post('foto3');}
        if (!empty($_FILES['foto4']['name'])) { $this->upload->do_upload('foto4'); $foto4_info = $this->upload->data(); $foto4 = $foto4_info['file_name']; }
        else{ $foto4 = $this->input->post('foto4');}
        if (!empty($_FILES['foto5']['name'])) { $this->upload->do_upload('foto5'); $foto5_info = $this->upload->data(); $foto5 = $foto5_info['file_name']; }
        else{ $foto5 = $this->input->post('foto5');}
        if (!empty($_FILES['foto6']['name'])) { $this->upload->do_upload('foto6'); $foto6_info = $this->upload->data(); $foto6 = $foto6_info['file_name']; }
        else{ $foto6 = $this->input->post('foto6');}
        if (!empty($_FILES['ficha_salud']['name'])) { $this->upload->do_upload('ficha_salud'); $ficha_info= $this->upload->data(); $ficha_salud = $ficha_info['file_name']; }else{ $ficha_salud =  $this->input->post('ficha_salud');}
                           
    $data = array(
          'titulo_salud' => $this->input->post('titulo_salud'),
          'subtitulo_salud' => $this->input->post('subtitulo_salud'),          
          'descripcion_salud' => $this->input->post('descripcion_salud'),
          'contenido_salud' => $this->input->post('contenido_salud'),
          'enlace_salud' => $this->input->post('enlace_salud'),
          'estado_salud' => $this->input->post('estado_salud'),
          'keywords_salud' => $this->input->post('keywords_salud'),
          'fecha_publicacion_salud' => $this->input->post('fecha_publicacion_salud'),
          'url_amigable_salud' => $this->input->post('url_amigable_salud'),
          'video_salud' => $this->input->post('video_salud'),
          'destacado_salud' => $this->input->post('destacado_salud'),
          'icono_salud' => $icono_salud,
          'ficha_salud' => $ficha_salud,
          'foto0' => $foto0,
          'foto1' => $foto1,
          'foto2' => $foto2,
          'foto3' => $foto3,
          'foto4' => $foto4,
          'foto5' => $foto5,
          'foto6' => $foto6
           );
    $this->salud_bienestar_admin_model->update_salud($id_salud,$data);
    redirect('/admin/salud_bienestar/salud_edit/'.$id_salud);
  }

  public function salud_edit($id_salud)
  {
    $data['detalle_salud'] = $this->salud_bienestar_admin_model->get_detalle_salud($id_salud);
    $this->load->view('admin/salud_edit', $data);
  }
  public function borrar_salud($id_salud)
  {
    $this->salud_bienestar_admin_model->delete_salud($id_salud);
    redirect('/admin/salud_bienestar');
  }
  public function borrar_ficha($id_salud)
  {
    $this->salud_bienestar_admin_model->delete_ficha($id_salud);
    redirect('/admin/salud_bienestar/salud_edit/'.$id_salud);
  }
  public function borrar_foto($id_salud,$foto,$foto_archivo)
  {
    $this->salud_bienestar_admin_model->delete_foto($id_salud,$foto);
    redirect('/admin/salud_bienestar/salud_edit/'.$id_salud);
  }
  
}

