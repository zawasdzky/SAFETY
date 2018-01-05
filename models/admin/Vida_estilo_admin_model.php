<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vida_estilo_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_articulos_vida_estilo()
	{
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety`");
	}
	function get_detalle_vida_estilo($id_vida_estilo)
	{
		return  $this->db->query("
			SELECT * FROM `sw_vida_estilo_safety` 
            WHERE id_vida_estilo = '$id_vida_estilo' LIMIT 1
            ");
	}
	function insert_vida_estilo($data)
	{
		$this->db->insert('sw_vida_estilo_safety', $data);
	}
	function update_vida_estilo($id_vida_estilo,$data)
	{
		$this->db->where('id_vida_estilo', $id_vida_estilo);
		$this->db->update('sw_vida_estilo_safety', $data);
	}
	function delete_foto($id_vida_estilo, $foto)
	{
		$this->db->query("UPDATE `sw_vida_estilo_safety` SET $foto = NULL WHERE `sw_vida_estilo_safety`.`id_vida_estilo` = '$id_vida_estilo';");
	}
	function delete_vida_estilo($id_vida_estilo)
	{
		$this->db->delete('sw_vida_estilo_safety', array('id_vida_estilo' => $id_vida_estilo));
	}
	function delete_ficha($id_vida_estilo)
	{
		$this->db->query("UPDATE `sw_vida_estilo_safety` SET `ficha_vida_estilo` = NULL WHERE `sw_vida_estilo_safety`.`id_vida_estilo` = '$id_vida_estilo';");
	}

}
