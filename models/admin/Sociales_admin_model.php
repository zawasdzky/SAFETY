<?php defined('BASEPATH') OR exit('No direct script access allowed');

class sociales_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_sociales()
	{
		return $this->db->query("SELECT * FROM `sw_sociales_safety`");
	}
	function get_detalle_social($id_social)
	{
		return  $this->db->query("SELECT * FROM `sw_sociales_safety` WHERE id_social = '$id_social' LIMIT 1 ");
	}

	function insert_social($data)
	{
		$this->db->insert('sociales_safety', $data);
	}

	function update_social($id_social,$data)
	{
		$this->db->where('id_social', $id_social);
		$this->db->update('sociales_safety', $data);
	}

	function delete_foto($id_social, $foto)
	{
		$this->db->query("UPDATE `sw_sociales_safety` SET $foto = NULL WHERE `sw_sociales_safety`.`id_social` = '$id_social';");
	}
	function delete_social($id_social)
	{
		$this->db->delete('sociales_safety', array('id_social' => $id_social));
	}
	function delete_ficha($id_social)
	{
		$this->db->query("UPDATE `sw_sociales_safety` SET `ficha_social` = NULL WHERE `sw_sociales_safety`.`id_social` = '$id_social';");
	}

}
