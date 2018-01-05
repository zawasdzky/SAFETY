<?php defined('BASEPATH') OR exit('No direct script access allowed');

class infografias_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_infografias()
	{
		return $this->db->query("SELECT * FROM `sw_infografias_safety`");
	}
	function get_detalle_infografia($id_infografia)
	{
		return  $this->db->query("SELECT * FROM `sw_infografias_safety` WHERE id_infografia = '$id_infografia' LIMIT 1 ");
	}

	function insert_infografia($data)
	{
		$this->db->insert('infografias_safety', $data);
	}

	function update_infografia($id_infografia,$data)
	{
		$this->db->where('id_infografia', $id_infografia);
		$this->db->update('infografias_safety', $data);
	}

	function delete_foto($id_infografia, $foto)
	{
		$this->db->query("UPDATE `sw_infografias_safety` SET $foto = NULL WHERE `sw_infografias_safety`.`id_infografia` = '$id_infografia';");
	}
	function delete_infografia($id_infografia)
	{
		$this->db->delete('infografias_safety', array('id_infografia' => $id_infografia));
	}

	function borrar_categoria_infografia($id_categoria_infografia)
	{
		$this->db->delete('categorias_infografias', array('id_categoria_infografia' => $id_categoria_infografia));
	}

}
