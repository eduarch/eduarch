<?php 

class User_model extends Base_model {
	
	function __construct() {
		parent::__construct();
		$this->set_table('users');
	}

	function email_exists($email) {
		$this->db->where('user_email', $email);
		return $this->select_single() != null;
	}

	function sign_up($user) {
		$user['user_reg_date'] = date('Y-m-d H:i:s');
		$user['user_type_no'] = GENERAL_USER;
		$user['status_no'] = ACTIVE_STATUS;
		return $this->db->insert('users', $user) > 0;
	}

	function login($user) {
		$this->db->where($user);
		return $this->select_single();
	}

	function get_user($user_no) {
		$this->db->where('user_no', $user_no);
		return $this->select_single();
	}

	function get_last_user() {
		return $this->get_user($this->db->insert_id());
	}

	function decide_home($user_type_no) {
		switch($user_type_no) {
			case GENERAL_USER: return 'home';
			case ADMIN_USER: return 'home_admin';
		}
	}

}