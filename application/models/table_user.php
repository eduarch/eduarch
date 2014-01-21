<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_table_model.php';
    	
class table_user extends abstract_table_model {
	
	function __construct() {
		parent::__construct('users', 'id');
	}

	function email_exists($email) {
		return $this->where('email', $email)->count() > 0;
	}

	function save($user) {
		$user['created_on'] = date('Y-m-d H:i:s');
		$user['updated_on'] = $user['created_on'];
		$user['user_type_id'] = GENERAL_USER;
		$user['status_id'] = ACTIVE_STATUS;
		$this->insert($user);
	}
}