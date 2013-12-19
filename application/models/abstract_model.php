<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

abstract class Abstract_Model extends CI_Model {
	private $table;
	private $field_id;

	function __construct($table, $field_id = 'id') {
		parent::__construct();
		$this->table = $table;
		$this->field_id = $field_id;
	}

	function get_by_id($id) {
		return $this->where($this->field_id, $id)->get();
	}

	function get() {
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}
		return null;
	}

	function get_single() {
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result;
		}
		return null;
	}

	function insert($data = null) {
		if($data) return $this->db->insert($this->table, $data);
		return $this->db->insert($this->table);
	}

	function update($data = null) {
		if($data) return $this->db->update($this->table, $data);
		return $this->db->update($this->table);
	}

	function select($fields = null) {
		if($fields != null)
			$this->select($fields);
		return $this;
	}

	function set() {
		$count = func_num_args();
		if($count > 0) {
			$data = func_get_args();
			for($i = 0; $i < $count; $i += 2)
				$this->db->set($data[$i], $data[$i + 1]);
		}

		return $this;
	}

	function where() {
		$count = func_num_args();
		if($count > 0) {
			$conditions = func_get_args();
			for($i = 0; $i < $count; $i += 2)
				$this->db->where($conditions[$i], $conditions[$i+1]);
		}
		return $this;
	}

	function join(Abstract_Model $model) {
		$this->db->join($model->table, $this->table.$this->field_id.' = '.$model->table.$this->field_id);
		return $this;
	}

}