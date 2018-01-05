<?php defined('BASEPATH') OR exit('No direct script access allowed');

class publicitarios_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_publicitarios()
	{
		return $this->db->get('publicitarios_solutions'); //trae la info de la tabla publicitarios_solutions
	}
	function detalle_publicitario($id_publicitario)
	{
		return $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `sw_publicitarios_solutions`.`id_publicitario` = '$id_publicitario'");
	}	
	function insert_publicitario($data)
	{
		$this->db->insert('publicitarios_solutions', $data);
	}
	function update_publicitario($id_publicitario,$data)
	{
		$this->db->where('id_publicitario', $id_publicitario);
		$this->db->update('publicitarios_solutions', $data);
	}
	function delete_foto($id_publicitario)
	{
		$this->db->query("UPDATE `sw_publicitarios_solutions` SET `foto_publicitario` = NULL WHERE `sw_publicitarios_solutions`.`id_publicitario` = '$id_publicitario';");
	}
	function delete_publicitario($id_publicitario)
	{
		$this->db->delete('publicitarios_solutions', array('id_publicitario' => $id_publicitario));
	}

}
