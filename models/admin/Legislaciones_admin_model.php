<?php defined('BASEPATH') OR exit('No direct script access allowed');

class legislaciones_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_legislaciones()
	{
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety`");
	}
	function get_detalle_legislacion($id_legislacion)
	{
		return  $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE id_legislacion = '$id_legislacion' LIMIT 1 ");
	}
	function insert_legislacion($data)
	{
		$this->db->insert('legislaciones_safety', $data);
	}
	function insert_categoria_legislacion($data2)
	{
		$this->db->insert('categorias_legislaciones', $data2);
	}
	function update_legislacion($id_legislacion,$data)
	{
		$this->db->where('id_legislacion', $id_legislacion);
		$this->db->update('legislaciones_safety', $data);
	}
	function delete_foto($id_legislacion, $foto)
	{
		$this->db->query("UPDATE `sw_legislaciones_safety` SET $foto = NULL WHERE `sw_legislaciones_safety`.`id_legislacion` = '$id_legislacion';");
	}
	function delete_legislacion($id_legislacion)
	{
		$this->db->delete('legislaciones_safety', array('id_legislacion' => $id_legislacion));
	}
	function agregar_categoria_legislacion($data)
	{
		$this->db->insert('categorias_legislaciones', $data);
	}
	function borrar_categoria_legislacion($id_categoria_legislacion)
	{
		$this->db->delete('categorias_legislaciones', array('id_categoria_legislacion' => $id_categoria_legislacion));
	}
}
