<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seguros_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_seguros()
	{
		return $this->db->query("SELECT * FROM `sw_seguros_safety`");
	}

	function get_detalle_seguro($id_seguro)
	{
		return  $this->db->query("
			SELECT * FROM `sw_seguros_safety` WHERE id_seguro = '$id_seguro' LIMIT 1");
	}
	function insert_seguro($data)
	{
		$this->db->insert('seguros_safety', $data);
	}

	function update_seguro($id_seguro,$data)
	{
		$this->db->where('id_seguro', $id_seguro);
		$this->db->update('seguros_safety', $data);
	}

	function delete_foto($id_seguro, $foto)
	{
		$this->db->query("UPDATE `sw_seguros_safety` SET $foto = NULL WHERE `sw_seguros_safety`.`id_seguro` = '$id_seguro';");
	}
	function delete_seguro($id_seguro)
	{
		$this->db->delete('seguros_safety', array('id_seguro' => $id_seguro));
	}
	function delete_ficha($id_seguro)
	{
		$this->db->query("UPDATE `sw_seguros_safety` SET `ficha_seguro` = NULL WHERE `sw_seguros_safety`.`id_seguro` = '$id_seguro';");
	}

}
