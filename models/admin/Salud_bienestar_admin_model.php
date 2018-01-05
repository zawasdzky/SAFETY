<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Salud_bienestar_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
		function get_salud_bienestar()
	{
		return $this->db->query("SELECT * FROM `sw_salud_bienestar_safety`");
	}
	function get_detalle_salud($id_salud)
	{
		return  $this->db->query("
			SELECT * FROM `sw_salud_bienestar_safety` WHERE id_salud = '$id_salud' LIMIT 1");
	}
	function insert_salud($data)
	{
		$this->db->insert('salud_bienestar_safety', $data);
	}
	function update_salud($id_salud,$data)
	{
		$this->db->where('id_salud', $id_salud);
		$this->db->update('salud_bienestar_safety', $data);
	}
	function delete_foto($id_salud, $foto)
	{
		$this->db->query("UPDATE `sw_salud_bienestar_safety` SET $foto = NULL WHERE `sw_salud_bienestar_safety`.`id_salud` = '$id_salud';");
	}
	function delete_salud($id_salud)
	{
		$this->db->delete('salud_bienestar_safety', array('id_salud' => $id_salud));
	}
	function delete_ficha($id_salud)
	{
		$this->db->query("UPDATE `salud_bienestar_safety` SET `ficha_salud` = NULL WHERE `salud_bienestar_safety`.`id_salud` = '$id_salud';");
	}

}
