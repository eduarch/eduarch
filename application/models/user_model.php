<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require_once 'abstract_model.php';

class User_Model extends Abstract_Model {
	function __construct() {
		parent::__construct('users', 'id', 'user_id');
	}

	function get_by_email($email) {
		return $this->where('email', $email)->get_single();
	}

	function get_by_credentials($email, $password) {
		return $this->where('email', $email, 'password', $password)->get_single();
	}

	function get_full_info($id) {
		return $this->user_model->
			select('
				users.id, email, last_name, first_name, gender, image, created_on, updated_on,
				countries.name as country, user_types.name as user_type, status.name as status')->
			join('country_model', 'user_type_model', 'status_model')->get_by_id($id);
	}

	function sign_up($user) {
		$user['created_on'] = date('Y-m-d H:i:s');
		$user['updated_on'] = $user['created_on'];
		$user['user_type_id'] = GENERAL_USER;
		$user['status_id'] = ACTIVE_STATUS;
		return $this->insert($user);
	}

	function update_image($id, $image) {
		return $this->set('image', $image)->where_id($id)->update();
	}

	function update_password($id, $password) {
		return $this->set('password', $password)->where_id($id)->update();
	}

	function update_info($id, $data) {
		return $this->where_id($id)->update($data);
	}

}
