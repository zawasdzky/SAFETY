<?php defined('BASEPATH') OR exit('No direct script access allowed');

class productos_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
		function get_productos()
	{
		/*return $this->db->get('sw_productos_solutions'); //trae la info de la tabla marcas_solutions SELECT * FROM `sw_productos_solutions` JOIN `sw_marcas_solutions` ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca JOIN `sw_categorias_solutions` ON sw_productos_solutions.id_categoria = sw_categorias_solutions.id_categoria
		*/
		return $this->db->query("
								SELECT * FROM `sw_productos_solutions` 
								JOIN `sw_marcas_solutions` 
								ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca 
								");
	}
	function get_detalle_producto($id_producto)
	{
		//SELECT * FROM `sw_productos_solutions` JOIN `sw_marcas_solutions` ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca JOIN `sw_categorias_solutions` WHERE id_producto = '$id_producto' LIMIT 1

		return  $this->db->query("
			SELECT * FROM `sw_productos_solutions` 
			JOIN `sw_marcas_solutions` 
			ON sw_productos_solutions.id_marca = sw_marcas_solutions.id_marca 
            WHERE id_producto = '$id_producto' LIMIT 1
            ");
	}

	function get_categorias()
	{
		return $this->db->query("
		SELECT * 
		FROM  `sw_categorias_solutions` 
		ORDER BY  `sw_categorias_solutions`.`nombre_categoria` ASC" );
	}

	function get_categorias_producto($id_producto)
	{
		return $this->db->query("
			SELECT * FROM  `sw_categorias_productos` 
			JOIN `sw_categorias_solutions` 
			ON sw_categorias_productos.id_categoria = sw_categorias_solutions.id_categoria
            WHERE id_producto = '$id_producto'
			;");
	}
	function get_marcas()
	{
		return $this->db->get('marcas_solutions'); 
	}
	function insert_producto($data)
	{
		$this->db->insert('productos_solutions', $data);
	}
	function insert_categoria_producto($data2)
	{
		$this->db->insert('categorias_productos', $data2);
	}
	function update_producto($id_producto,$data)
	{
		$this->db->where('id_producto', $id_producto);
		$this->db->update('productos_solutions', $data);
	}
	function delete_ficha($id_producto)
	{
		$this->db->query("UPDATE `sw_productos_solutions` SET `ficha_producto` = NULL WHERE `sw_productos_solutions`.`id_producto` = '$id_producto';");
	}
	function delete_foto($id_producto, $foto)
	{
		$this->db->query("UPDATE `sw_productos_solutions` SET $foto = NULL WHERE `sw_productos_solutions`.`id_producto` = '$id_producto';");
	}
	function delete_producto($id_producto)
	{
		$this->db->delete('productos_solutions', array('id_producto' => $id_producto));
	}

		function agregar_categoria_producto($data)
	{
		$this->db->insert('categorias_productos', $data);
	}


	// function agregar_categoria_producto($id_categoria,$id_producto)
	// {
	// 	$this->db->query("INSERT INTO  `sw_categorias_productos` ( `id_producto` ,`id_categoria`)VALUES ( '$id_categoria',  '$id_producto');");
	// }

	function borrar_categoria_producto($id_categoria_producto)
	{
		$this->db->delete('categorias_productos', array('id_categoria_producto' => $id_categoria_producto));
	}


}
