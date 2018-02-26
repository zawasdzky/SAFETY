<?php defined('BASEPATH') OR exit('No direct script access allowed');

class encuestas_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
		function get_encuestas()
	{
		return $this->db->query("
								SELECT * FROM `sw_encuestas_safety`
								");
	}
	function get_detalle_encuesta($id_encuesta)
	{
		return  $this->db->query("
			SELECT * FROM `sw_encuestas_safety` 
            WHERE id_encuesta = '$id_encuesta' LIMIT 1
            ");
	}


	function insert_encuesta($data)
	{
		$this->db->insert('encuestas_safety', $data);
	}


	function update_encuesta($id_encuesta,$data)
	{
		$this->db->where('id_encuesta', $id_encuesta);
		$this->db->update('encuestas_safety', $data);
	}

	function delete_encuesta($id_encuesta)
	{
		$this->db->delete('encuestas_safety', array('id_encuesta' => $id_encuesta));
	}

	function get_respuestas_encuesta($id_encuesta)
	{
		return  $this->db->query("
			SELECT * FROM `sw_respuestas_encuesta` 
            WHERE id_encuesta = '$id_encuesta'
            ");
	}	

	function get_detalle_respuesta($id_respuesta)
	{
		return  $this->db->query("
			SELECT * FROM `sw_respuestas_encuesta` 
            WHERE id_respuesta = '$id_respuesta' LIMIT 1
            ");
    }

	function update_respuesta($id_respuesta,$data)
	{
		$this->db->where('id_respuesta', $id_respuesta);
		$this->db->update('respuestas_encuesta', $data);
	}

	function agregar_respuesta($data)
	{
		$this->db->insert('respuestas_encuesta', $data);
	}

	function borrar_respuesta_encuesta($id_respuesta)
	{
		$this->db->delete('respuestas_encuesta', array('id_respuesta' => $id_respuesta));
	}

}
