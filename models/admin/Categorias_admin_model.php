<?php defined('BASEPATH') OR exit('No direct script access allowed');

class categorias_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_categorias()
	{
		return $this->db->query("
			SELECT * 
			FROM  `sw_categorias_solutions` 
			WHERE  `id_categoria` !=  '0'
			ORDER BY  `sw_categorias_solutions`.`id_categoria` ASC 
			LIMIT 0 , 300
			" );
	}
	function get_categorias_superiores()
	{
		return $this->db->query('SELECT * FROM sw_categorias_solutions where `id_padre` = 0' AND `id_categoria` != '0');
	}
	function detalle_categoria($id_categoria)
	{
		return $this->db->query("SELECT * FROM sw_categorias_solutions where `id_categoria` = '$id_categoria'");
	}
	function insert_categoria($data)
	{
		$this->db->insert('categorias_solutions', $data);
	}
	function update_categoria($id_categoria,$data)
	{
		$this->db->where('id_categoria', $id_categoria);
		$this->db->update('categorias_solutions', $data);
	}
	function delete_categoria($id_categoria)
	{
		$this->db->delete('categorias_solutions', array('id_categoria' => $id_categoria));
	}
}
