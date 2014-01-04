<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class class_users extends Abstract_Model {

	private $id = array('user_id', 'class_id');

	function __construct() {
		parent::__construct('class_users', $this->id, $this->id);
	}

	function get_user_count($class_id) {
		return $this->where('class_id', $class_id)->count();
	}
	
}