<?php defined('BASEPATH') OR exit('No direct script access allowed');

class marcas_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_marcas()
	{
		return $this->db->get('marcas_solutions'); //trae la info de la tabla marcas_solutions
	}
	function get_categorias()
	{
		return $this->db->query("
		SELECT * 
		FROM  `sw_categorias_solutions` 
		ORDER BY  `sw_categorias_solutions`.`nombre_categoria` ASC" );
	}
	function insert_marca($data)
	{
		$this->db->insert('marcas_solutions', $data);
	}
	function get_detalle_marca($id_marca)
	{
		$consulta =  $this->db->query("SELECT * FROM sw_marcas_solutions
										JOIN sw_categorias_solutions
										ON sw_marcas_solutions.id_categoria = sw_categorias_solutions.id_categoria
										WHERE sw_marcas_solutions.id_marca = '$id_marca' LIMIT 1");
		return $consulta;
	}
	function update_marca($id_marca,$data)
	{
		$this->db->where('id_marca', $id_marca);
		$this->db->update('marcas_solutions', $data);
	}
	function delete_foto($id_marca)
	{
		$this->db->query("UPDATE `sw_marcas_solutions` SET `foto_marca` = NULL WHERE `sw_marcas_solutions`.`id_marca` = '$id_marca';");
	}
	function delete_logo($id_marca)
	{
		$this->db->query("UPDATE `sw_marcas_solutions` SET `logo_marca` = NULL WHERE `sw_marcas_solutions`.`id_marca` = '$id_marca';");
	}
	function delete_marca($id_marca)
	{
		$this->db->delete('marcas_solutions', array('id_marca' => $id_marca));
	}

}
