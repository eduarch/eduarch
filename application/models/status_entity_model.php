<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class status_entity_model extends Abstract_Model {
	private $ids = array('status_id', 'entity_id');

	function __construct() {
		parent::__construct('status_entity', $this->ids, $this->ids);
	}

	function get_status_entity() {
		$data = $this->get();
		$result = array();

		if($data != null) {
			foreach($data as $se) {
				if(!isset($result[$se['status_id']]))
					$result[$se['status_id']] = array();
				$result[$se['status_id']][] = $se['entity_id'];
			}
		}
		return $result;
	}
}