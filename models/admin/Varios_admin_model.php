<?php defined('BASEPATH') OR exit('No direct script access allowed');

class varios_admin_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_varios_frases()
	{
		return $this->db->query("SELECT * FROM `sw_varios_safety` WHERE `tipo_varios` = 'frase';");
	}
	function get_varios_videos()
	{
		return $this->db->query("SELECT * FROM `sw_varios_safety` WHERE `tipo_varios` = 'video';");
	}	
	function get_detalle_varios($id_varios)
	{
		return  $this->db->query("SELECT * FROM `sw_varios_safety` WHERE id_varios = '$id_varios' LIMIT 1;");
	}
	function insert_varios($data)
	{
		$this->db->insert('varios_safety', $data);
	}
	function update_varios($id_varios,$data)
	{
		$this->db->where('id_varios', $id_varios);
		$this->db->update('varios_safety', $data);
	}
	function delete_foto($id_varios, $foto)
	{
		$this->db->query("UPDATE `sw_varios_safety` SET $foto = NULL WHERE `sw_varios_safety`.`id_varios` = '$id_varios';");
	}
	function delete_ficha($id_varios)
	{
		$this->db->query("UPDATE `sw_varios_safety` SET `ficha_varios` = NULL WHERE `sw_varios_safety`.`id_varios` = '$id_varios';");
	}
	function delete_varios($id_varios)
	{
		$this->db->delete('varios_safety', array('id_varios' => $id_varios));
	}
}
