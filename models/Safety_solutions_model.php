<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Safety_solutions_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_slider_novedades_solutions()
	{
		return  $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `tipo_publicitario` = 'Slider Novedades' AND `sitio_publicitario`= 'Safety_solutions' ORDER BY  `sw_publicitarios_solutions`.`orden_publicitario` ASC "); 
	}
	function get_novedades_pauta_solutions()
	{
		return  $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `tipo_publicitario` = 'Pauta Novedades'  AND `sitio_publicitario`= 'Safety_solutions'  ORDER BY  `sw_publicitarios_solutions`.`orden_publicitario` ASC LIMIT 0,2"); 
	}

	function get_publicidad_col_der_solutions()
	{
		return  $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `tipo_publicitario` = 'Columna Derecha'  AND `sitio_publicitario`= 'Safety_solutions' ORDER BY  `sw_publicitarios_solutions`.`orden_publicitario` ASC "); 
	}

	function get_publicidad_col_izq_solutions()
	{
		return  $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `tipo_publicitario` = 'Columna Izquierda'  AND `sitio_publicitario`= 'Safety_solutions'  ORDER BY  `sw_publicitarios_solutions`.`orden_publicitario` ASC "); 
	}

	function get_productos_destacados()
	{
		return  $this->db->query("SELECT * FROM `sw_productos_solutions` WHERE `destacado_producto` = 'si' AND  `estado_producto`= 'activo'"); 
	}
	function get_productos_servicios()
	{
		return $this->db->get('productos_servicios'); 
	}
	function get_productos()
	{
		return $this->db->get('productos_solutions'); 
	}
	function get_productos_limit()
	{
		return  $this->db->query("SELECT * FROM `sw_productos_solutions`  ORDER BY  `sw_productos_solutions`.`id_producto` DESC  LIMIT 0 , 5"); 
	}
	function get_eventos_solutions()
	{
		return  $this->db->query("SELECT * FROM `sw_eventos_solutions`  ORDER BY  `sw_eventos_solutions`.`orden_evento` ASC "); 
	}
	function get_marcas_index()
	{
		return  $this->db->query("SELECT * FROM `sw_marcas_solutions`  ORDER BY  `sw_marcas_solutions`.`nombre_marca` ASC "); 
	}
	function get_profesionales()
	{
		return $this->db->get('profesionales_solutions'); 
	}
	function get_profesionales_categoria($id_categoria)// lista los profesionales por categoria
	{
		return  $this->db->query("
		SELECT * FROM  `sw_profesionales_solutions` 
		LEFT JOIN  `sw_categorias_solutions` ON  `sw_profesionales_solutions`.`id_categoria` =  `sw_categorias_solutions`.`id_categoria` 
		WHERE  `sw_profesionales_solutions`.`id_categoria` = '$id_categoria' 
		 "); 
	}

	function get_categorias_profesionales()//trae las categorias de profesionales para el menu
	{
		return  $this->db->query("SELECT * FROM `sw_categorias_solutions` WHERE  `tipo_categoria` = 'profesionales'   ORDER BY  `nombre_categoria`");
	}

	function get_detalle_profesional($id_profesional)
	//trae los productos y su marca asociada
	{
		return  $this->db->query("SELECT * FROM `sw_profesionales_solutions` WHERE sw_profesionales_solutions.id_profesional = '$id_profesional' ");

	}
	
	function get_marcas($id_marca)
	{
		//return $this->db->get('marcas_solutions'); 
		return  $this->db->query("SELECT * FROM `sw_marcas_solutions` WHERE `id_marca` ='$id_marca'"); 
	}

	function get_detalle_producto($url_amigable)
	//trae los productos y su marca asociada
	{
		return  $this->db->query("
		SELECT * FROM `sw_productos_solutions` 
		JOIN `sw_marcas_solutions` 
		ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca
		WHERE sw_productos_solutions.url_amigable = '$url_amigable'
		");
	}

	function get_productos_marca($id_marca)
	{
		return  $this->db->query("
		SELECT * FROM  `sw_marcas_solutions` 
		LEFT JOIN  `sw_productos_solutions` ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca
		WHERE sw_marcas_solutions.id_marca ='$id_marca'
		");
	}

	function get_productos_categoria($id_categoria)
	{
		return  $this->db->query("
			SELECT * 
			FROM  `sw_productos_solutions` 
			LEFT JOIN  `sw_categorias_productos` ON  `sw_categorias_productos`.`id_producto` =  `sw_productos_solutions`.`id_producto` 
			WHERE  `sw_categorias_productos`.`id_categoria` = '$id_categoria'
		");
	}

	function get_categorias_productos()
	{
		return  $this->db->query("SELECT * FROM `sw_categorias_solutions` WHERE `id_categoria` !='0' AND `tipo_categoria` = 'productos' ORDER BY  `nombre_categoria`");
	}

//BUSCADOR
	function get_resultados_productos($keyword)
	{
		return  $this->db->query("SELECT * FROM  `sw_productos_solutions` WHERE keywords_producto LIKE '%' '$keyword' '%'  OR  nombre_producto LIKE '%' '$keyword' '%'  LIMIT 0 , 30 ");
		// SELECT * FROM `sw_productos_solutions`, `sw_profesionales_solutions` WHERE `sw_productos_solutions`.`keywords_producto` LIKE '%TAPONES%'
	}
	function get_resultados_profesionales($keyword)
	{
		return  $this->db->query("SELECT * FROM  `sw_profesionales_solutions` WHERE keywords_profesional LIKE '%' '$keyword' '%' OR  nombre_profesional LIKE '%' '$keyword' '%'  LIMIT 0 , 30 ");
	}

}