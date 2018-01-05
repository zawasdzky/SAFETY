<?php defined('BASEPATH') OR exit('No direct script access allowed');

class noticias_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_noticias()
	{
		return $this->db->query("SELECT * FROM `sw_noticias_safety`");
	}
	function get_detalle_noticia($id_noticia)
	{
		return  $this->db->query("SELECT * FROM `sw_noticias_safety` WHERE id_noticia = '$id_noticia' LIMIT 1 ");
	}
	function insert_noticia($data)
	{
		$this->db->insert('noticias_safety', $data);
	}
	function update_noticia($id_noticia,$data)
	{
		$this->db->where('id_noticia', $id_noticia);
		$this->db->update('noticias_safety', $data);
	}
	function delete_foto($id_noticia, $foto)
	{
		$this->db->query("UPDATE `sw_noticias_safety` SET $foto = NULL WHERE `sw_noticias_safety`.`id_noticia` = '$id_noticia';");
	}
	function delete_noticia($id_noticia)
	{
		$this->db->delete('noticias_safety', array('id_noticia' => $id_noticia));
	}
	function delete_ficha($id_noticia)
	{
		$this->db->query("UPDATE `sw_noticias_safety` SET `ficha_noticia` = NULL WHERE `sw_noticias_safety`.`id_noticia` = '$id_noticia';");
	}

}
