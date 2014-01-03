<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

abstract class Abstract_Model extends CI_Model {
	private $table;
	private $field_id;
	private $ref_id;

	function __construct($table, $field_id, $ref_id) {
		parent::__construct();
		$this->table = $table;
		$this->field_id = $field_id;
		$this->ref_id = $ref_id;
	}

	function get_by_id($id) {
		return $this->where_id($id)->get_single();
	}

	function get_by_ids() {
		call_user_func_array(array($this, 'where_ids'), func_get_args());
		return $this->get_single();
	}

	function get() {
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}
		return array();
	}

	function get_single() {
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result;
		}
		return array();
	}

	function get_last_insert() {
		$id = $this->db->insert_id();
		$this->where($this->field_id, $id);
		return $this->get_single();
	}

	function insert($data = null) {
		if($data) return $this->db->insert($this->table, $data);
		return $this->db->insert($this->table);
	}

	function update($data = null) {
		if($data) return $this->db->update($this->table, $data);
		return $this->db->update($this->table);
	}

	function delete($data = null) {
		if($data) return $this->db->delete($this->table, $data);
		return $this->db->delete($this->table);
	}

	function select($fields = null) {
		if($fields != null)
			$this->db->select($fields);
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

	function where_id($id) {
		return $this->where($this->table.'.'.$this->field_id, $id);
	}

	function where_ids() {
		$count = func_num_args();
		if($count > 0) {
			$ids = func_get_args();
			for($i = 0; $i < $count; $i++)
				$this->where($this->table.'.'.$this->field_id[$i], $ids[$i]);
		}
		return $this;
	}

	function join() {
		foreach(func_get_args() as $model_name) {
			if(!property_exists($this, $model_name))
				$this->load->model($model_name);
			$model = $this->{$model_name};
			$this->db->join($model->table, $model->table.'.'.$model->field_id.' = '.$this->table.'.'.$model->ref_id);
		}
		return $this;
	}

	function limit($limit, $offset) {
		$this->db->limit($limit, $offset);
		return $this;
	}

	function order_by() {
		$count = func_num_args();
		if($count > 0) {
			$args = func_get_args();
			for($i = 0; $i < $count; $i += 2)
				$this->db->order_by($args[$i], $args[$i+1]);
		}
		return $this;
	}

}