<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_autocomplete extends CI_Model {

	public function get_data($table, $where, $field)
	{
		$this->db->like($field, $where, 'BOTH');
		// $this->db->order_by('hardwareID', 'ASC');
		$this->db->limit(10);
		return $this->db->get($table)->result();
	}

}

/* End of file m_autocomplete.php */
/* Location: ./application/models/m_autocomplete.php */