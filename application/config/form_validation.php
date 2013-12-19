<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function rule($field, $label,$rule) {
	return array(
		'field' => $field,
		'label' => $label,
		'rules' => $rule
	);
}

$config = array();

$config['sign_up'] = array(
	rule('user[first_name]', 'First Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[last_name]', 'Last Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[gender]', 'Gender', 'required'),
	rule('user[country_id]', 'Country', 'required'),
	rule('user[email]', 'Email Address', 'trim|required|xss_clean|valid_email|callback__check_email'),
	rule('user[password]', 'Password', 'required|max_length[32]|md5'),
	rule('user[confirm_password]', 'Confirm Password', 'required|max_length[32]|md5|callback__check_password')
);

$config['login'] = array(
	rule('user[email]', 'Email Address', 'trim|required|xss_clean|valid_email'),
	rule('user[password]', 'Password', 'required|max_length[32]|md5|callback__check_login')
);