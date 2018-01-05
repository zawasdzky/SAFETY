<?php defined('BASEPATH') OR exit('No direct script access allowed');

class profesionales_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_profesionales()
	{
		return $this->db->query("
				SELECT * FROM `sw_profesionales_solutions`
				LEFT JOIN `sw_categorias_solutions`
				ON `sw_profesionales_solutions`.`id_categoria` = `sw_categorias_solutions`.`id_categoria`
			");

	}
	function get_categorias_profesionales()
	{
		return  $this->db->query("SELECT * 
			FROM  `sw_categorias_solutions` 
			WHERE  `tipo_categoria` =  'profesionales'
			ORDER BY  `sw_categorias_solutions`.`nombre_categoria` ASC 
			LIMIT 0 , 100"
			);
	}

	function insert_profesional($data)
	{
		$this->db->insert('profesionales_solutions', $data);
	}

	function get_detalle_profesional($id_profesional)
	{
		return $this->db->query("
			SELECT * FROM `sw_profesionales_solutions`
			LEFT JOIN `sw_categorias_solutions`
			ON `sw_profesionales_solutions`.`id_categoria` = `sw_categorias_solutions`.`id_categoria`
			WHERE `sw_profesionales_solutions`.`id_profesional` = '$id_profesional'
			");
	}

	function update_profesional($id_profesional,$data)
	{
		$this->db->where('id_profesional', $id_profesional);
		$this->db->update('profesionales_solutions', $data);
	}
	function delete_foto($id_profesional)
	{
		$this->db->query("UPDATE `sw_profesionales_solutions` SET `foto_profesional` = NULL WHERE `sw_profesionales_solutions`.`id_profesional` = '$id_profesional';");
	}
	function delete_cv($id_profesional)
	{
		$this->db->query("UPDATE `sw_profesionales_solutions` SET `cv_profesional` = NULL WHERE `sw_profesionales_solutions`.`id_profesional` = '$id_profesional';");
	}
	function delete_profesional($id_profesional)
	{
		$this->db->delete('profesionales_solutions', array('id_profesional' => $id_profesional));
	}

}
