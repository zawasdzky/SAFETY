<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Safety_solutions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Safety_solutions_model');
		$data['color'] ="carrot";
		$data['menu_marcas'] = $this->Safety_solutions_model->get_marcas_index();
		$data['menu_categorias'] = $this->Safety_solutions_model->get_categorias_productos();
		$data['menu_profesionales'] = $this->Safety_solutions_model->get_categorias_profesionales();
		$this->load->view('includes/head',$data);
		$this->load->view('includes/header_safety_solutions');
	}

	public function index()
	{
		$data['novedades_slider'] = $this->Safety_solutions_model->get_slider_novedades_solutions();
		$data['novedades_pauta'] = $this->Safety_solutions_model->get_novedades_pauta_solutions();
		$data['publicidad_col_izq'] = $this->Safety_solutions_model->get_publicidad_col_izq_solutions();
		$data['publicidad_col_der'] = $this->Safety_solutions_model->get_publicidad_col_der_solutions();
		$data['marcas'] = $this->Safety_solutions_model->get_marcas_index();
		$data['productos_destacados'] = $this->Safety_solutions_model->get_productos_destacados();
		$data['productos_destacados'] = $this->Safety_solutions_model->get_productos_destacados();
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('safety_solutions',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
	}
	public function marcas ($id_marca= FALSE )// se usa para prevenir que el argumento esté vacio
	{
		if ($id_marca === FALSE) { $id_marca=1;}
		$data['marcas'] = $this->Safety_solutions_model->get_marcas($id_marca); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('marcas',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
	}
	public function productos()
	{
		$data['publicidad_col_izq'] = $this->Safety_solutions_model->get_publicidad_col_izq_solutions();
		$data['publicidad_col_der'] = $this->Safety_solutions_model->get_publicidad_col_der_solutions();
		$data['productos'] = $this->Safety_solutions_model->get_productos(); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('productos',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

	public function profesionales_categoria($id_categoria)// muestra los pofesionales en caegoria
	{
		$data['publicidad_col_izq'] = $this->Safety_solutions_model->get_publicidad_col_izq_solutions();
		$data['profesionales'] = $this->Safety_solutions_model->get_profesionales_categoria($id_categoria); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('profesionales_categoria',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

	public function productos_marca($id_marca)
	{
		$data['productos'] = $this->Safety_solutions_model->get_productos_marca($id_marca); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('productos_marca',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

		public function productos_categoria($id_categoria)
	{
		$data['productos'] = $this->Safety_solutions_model->get_productos_categoria($id_categoria); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions(); 
		$this->load->view('productos_categoria',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}
	
	public function detalle_profesional($id_profesional)
	{
		$data['publicidad_col_izq'] = $this->Safety_solutions_model->get_publicidad_col_izq_solutions();
		$data['detalle_profesional'] = $this->Safety_solutions_model->get_detalle_profesional($id_profesional); 
		$this->load->view('detalle_profesional',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

	public function detalle_producto($url_amigable)
	{
		$data['detalle_producto'] = $this->Safety_solutions_model->get_detalle_producto($url_amigable); 
		$this->load->view('detalle_producto',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

	public function resultado_busqueda()
	{
		$keyword =  $this->input->post('keyword');
		$data['resultado_productos'] = $this->Safety_solutions_model->get_resultados_productos($keyword);
		$data['resultado_profesionales'] = $this->Safety_solutions_model->get_resultados_profesionales($keyword); 
		$data['eventos_solutions'] = $this->Safety_solutions_model->get_eventos_solutions();
		$data['publicidad_col_der'] = $this->Safety_solutions_model->get_publicidad_col_der_solutions();
		$this->load->view('resultado_busqueda',$data);
		$this->load->view('includes/scripts');
		$this->load->view('includes/pop_up_pauta');
		$this->load->view('includes/footer');
	}

}
