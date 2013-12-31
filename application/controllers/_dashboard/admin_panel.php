<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class admin_panel {

	private $CI;

	function __construct() {
		$this->CI = & get_instance();
	}

	function index() {
		$this->CI->layout->directory = 'dashboard/admin_panel/';
		$this->CI->layout->title = 'Dashboard | Admin Panel';
		$this->CI->layout->show();
	}

	function countries() {
		$this->CI->layout->directory = 'dashboard/admin_panel/countries/';
		$this->CI->layout->title = 'Dashboard | Admin Panel | Countires';
		$this->CI->layout->show();
	}

	function users() {
		$this->CI->layout->directory = 'dashboard/admin_panel/users/';
		$this->CI->layout->title = 'Dashboard | Admin Panel | Users';

		$data['users'] = $this->CI->user_model->
			select('
				users.id, email, last_name, first_name, gender,
				countries.name as country, user_types.name as user_type, status.name as status')->
			join('country_model', 'user_type_model', 'status_model')->get();

		$this->CI->layout->show($data);
	}

	function view_user($user_id) {
		$this->CI->layout->directory = 'dashboard/admin_panel/users_view/';
		$this->CI->layout->title = 'Dashboard | Admin Panel | View User';
		$user = $this->CI->user_model->
			select('
				users.id, email, last_name, first_name, gender, image, created_on, updated_on,
				countries.name as country, user_types.name as user_type, status.name as status')->
			join('country_model', 'user_type_model', 'status_model')->get_by_id($user_id);

		if($user == null) {
			$this->CI->layout->warning('User does not exist anymore.');
			refresh('admin/users');
		}

		$this->CI->layout->show($user);
	}

	function update_user($user_id) {
		$this->CI->layout->directory = 'dashboard/admin_panel/users_update/';
		$this->CI->layout->title = 'Dashboard | Admin Panel | Update User';

		

		$this->CI->layout->show();
	}

}