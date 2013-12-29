<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class user_type_model extends Abstract_Model {
	
	function __construct() {
		parent::__construct('user_types', 'id', 'user_type_id');
	}
	
}