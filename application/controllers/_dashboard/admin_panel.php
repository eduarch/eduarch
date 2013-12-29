<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class admin_panel {

	function __construct(&$ci) {
		$ci->template = 'default';
		$ci->header = get_header();
	}

	function index(&$ci) {
		$ci->layout->directory = 'dashboard/admin_panel/';
		$ci->layout->title = 'Dashboard | Admin Panel';
		$ci->layout->show();
	}

	function countries(&$ci) {
		$ci->layout->directory = 'dashboard/admin_panel/countries/';
		$ci->layout->title = 'Dashboard | Admin Panel | Countires';
		$ci->layout->show();
	}

	function users(&$ci) {
		$ci->load->model('user_type_model');
		$ci->load->model('status_model');
		$ci->load->model('country_model');

		$ci->layout->directory = 'dashboard/admin_panel/users/';
		$ci->layout->title = 'Dashboard | Admin Panel | Users';

		$data['users'] = $ci->user_model->
			select("
				users.id, users.email, users.last_name, users.first_name, users.gender,
				countries.name as country, user_types.name as user_type, status.name as status")->
			join($ci->user_type_model, $ci->country_model, $ci->status_model)->get();

		$ci->layout->show($data);
	}

}