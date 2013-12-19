<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require_once 'abstract_model.php';

class User_Model extends Abstract_Model {
	function __construct() {
		parent::__construct('users');
	}

	function get_by_email($email) {
		return $this->where('email', $email)->get_single();
	}

	function get_by_credentials($email, $password) {
		return $this->where('email', $email, 'password', $password)->get_single();
	}

	function sign_up($user) {
		$user['created_at'] = date('Y-m-d H:i:s');
		$user['updated_at'] = $user['created_at'];
		$user['user_type_id'] = GENERAL_USER;
		$user['status_id'] = ACTIVE_STATUS;
		$this->insert($user);
	}

}