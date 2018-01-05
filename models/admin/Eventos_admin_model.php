<?php defined('BASEPATH') OR exit('No direct script access allowed');

class eventos_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_eventos_solutions()
	{
		return $this->db->get('eventos_solutions');
	} 
	function detalle_evento($id_evento)
	{
		return $this->db->query("SELECT * FROM `sw_eventos_solutions` WHERE `sw_eventos_solutions`.`id_evento` = '$id_evento'");
	}	
	function insert_evento($data)
	{
		$this->db->insert('eventos_solutions', $data);
	}
	function update_evento($id_evento,$data)
	{
		$this->db->where('id_evento', $id_evento);
		$this->db->update('eventos_solutions', $data);
	}
	function delete_foto($id_evento)
	{
		$this->db->query("UPDATE `sw_eventos_solutions` SET `foto_evento` = NULL WHERE `sw_eventos_solutions`.`id_evento` = '$id_evento';");
	}
	function delete_evento($id_evento)
	{
		$this->db->delete('eventos_solutions', array('id_evento' => $id_evento));
	}

}
