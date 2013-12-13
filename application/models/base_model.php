<?php

class Base_model extends CI_Model {
	
	private $table;

	function __construct() {
		parent::__construct();
	}

	function set_table($table) {
		$this->table = $table;
	}

	function select_single() {
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result;
		}
		return null;
	}

	function select_multiple() {
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}
		return null;
	}

}