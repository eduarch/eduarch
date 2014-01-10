<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class entity_model extends Abstract_Model {

	function __construct() {
		parent::__construct('entities', 'id', 'entity_id');
	}

	function get_entity_list($limit, $offset) {
		return $this->order_by('id', 'asc')->limit($limit, $offset)->get();
	}

	function exists($entity_name) {
		$entity = $this->entity_model->where('name', $entity_name)->get_single();
		return empty($entity) == false;
	}

}