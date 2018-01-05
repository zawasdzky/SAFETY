<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SST_admin_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_SST()
	{
		return $this->db->query("SELECT * FROM `sw_SST_safety`");
	}
	function get_detalle_SST($id_SST)
	{
		return  $this->db->query("SELECT * FROM `sw_SST_safety` WHERE id_SST = '$id_SST' LIMIT 1");
	}
	function insert_SST($data)
	{
		$this->db->insert('SST_safety', $data);
	}
	function update_SST($id_SST,$data)
	{
		$this->db->where('id_SST', $id_SST);
		$this->db->update('SST_safety', $data);
	}
	function delete_foto($id_SST, $foto)
	{
		$this->db->query("UPDATE `sw_SST_safety` SET $foto = NULL WHERE `sw_SST_safety`.`id_SST` = '$id_SST';");
	}
	function delete_ficha($id_SST)
	{
		$this->db->query("UPDATE `sw_SST_safety` SET `ficha_SST` = NULL WHERE `sw_SST_safety`.`id_SST` = '$id_SST';");
	}
	function delete_SST($id_SST)
	{
		$this->db->delete('SST_safety', array('id_SST' => $id_SST));
	}
}
