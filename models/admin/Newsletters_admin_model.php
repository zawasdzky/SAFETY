<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletters_admin_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_newsletters()
	{
		return $this->db->query("SELECT * FROM `sw_newsletter_safety`");
	}

	function delete_newsletter($id_newsletter)
	{
		$this->db->delete('newsletter_safety', array('id_newsletter' => $id_newsletter));
	}

}
