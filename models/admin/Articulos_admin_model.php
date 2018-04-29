<?php defined('BASEPATH') OR exit('No direct script access allowed');

class articulos_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
		function get_articulos()
	{
		return $this->db->query("
								SELECT * FROM `sw_articulos_safety`
								");
	}
	function get_detalle_articulo($id_articulo)
	{
		return  $this->db->query("
			SELECT * FROM `sw_articulos_safety` 
            WHERE id_articulo = '$id_articulo' LIMIT 1
            ");
	}

	function get_categorias()
	{
		return $this->db->query("
		SELECT * 
		FROM  `sw_categorias_solutions` 
		ORDER BY  `sw_categorias_solutions`.`nombre_categoria` ASC" );
	}

	function get_categorias_articulo($id_articulo)
	{
		return $this->db->query("
			SELECT * FROM  `sw_categorias_articulos` 
			JOIN `sw_categorias_solutions` 
			ON sw_categorias_articulos.id_categoria = sw_categorias_solutions.id_categoria
            WHERE id_articulo = '$id_articulo'
			;");
	}

	function insert_articulo($data)
	{
		$this->db->insert('articulos_safety', $data);
	}
	function insert_categoria_articulo($data2)
	{
		$this->db->insert('categorias_articulos', $data2);
	}
	function update_articulo($id_articulo,$data)
	{
		$this->db->where('id_articulo', $id_articulo);
		$this->db->update('articulos_safety', $data);
	}

	function delete_foto($id_articulo, $foto)
	{
		$this->db->query("UPDATE `sw_articulos_safety` SET $foto = NULL WHERE `sw_articulos_safety`.`id_articulo` = '$id_articulo';");
	}
	function delete_articulo($id_articulo)
	{
		$this->db->delete('articulos_safety', array('id_articulo' => $id_articulo));
	}

		function agregar_categoria_articulo($data)
	{
		$this->db->insert('categorias_articulos', $data);
	}

	function borrar_categoria_articulo($id_categoria_articulo)
	{
		$this->db->delete('categorias_articulos', array('id_categoria_articulo' => $id_categoria_articulo));
	}


}
