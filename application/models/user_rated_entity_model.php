<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Abstract_Model.php';

class user_rated_entity_model extends CI_Model {
	private $ids = array('entity_id', 'surro_id', 'user_id');

	function __construct() {
		parent::__construct('user_rated_entities', $this->ids, $this->ids);
	}

	function save($entity_id, $surro_id, $user_id) {
		return $this->set(
			'entity_id', $entity_id,
			'surro_id', $surro_id,
			'user_id', $user_id)->insert();
	}

	function has_saved($entity_id, $surro_id, $user_id) {
		return $this->where('entity_id', $entity_id,
				'surro_id', $surro_id, 'user_id', $user_id)->count() > 0;
	}
	
}