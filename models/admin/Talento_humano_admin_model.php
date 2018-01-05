<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Talento_humano_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
		function get_talento_humano()
	{
		return $this->db->query("SELECT * FROM `sw_talento_humano_safety`");
	}
	function get_detalle_talento($id_talento)
	{
		return  $this->db->query("
			SELECT * FROM `sw_talento_humano_safety` WHERE id_talento = '$id_talento' LIMIT 1");
	}

	function insert_talento($data)
	{
		$this->db->insert('talento_humano_safety', $data);
	}

	function update_talento($id_talento,$data)
	{
		$this->db->where('id_talento', $id_talento);
		$this->db->update('talento_humano_safety', $data);
	}

	function delete_foto($id_talento, $foto)
	{
		$this->db->query("UPDATE `sw_talento_humano_safety` SET $foto = NULL WHERE `sw_talento_humano_safety`.`id_talento` = '$id_talento';");
	}
	function delete_talento($id_talento)
	{
		$this->db->delete('talento_humano_safety', array('id_talento' => $id_talento));
	}
	function delete_ficha($id_talento)
	{
		$this->db->query("UPDATE `sw_talento_humano_safety` SET `ficha_talento` = NULL WHERE `sw_talento_humano_safety`.`id_talento` = '$id_talento';");
	}

}
