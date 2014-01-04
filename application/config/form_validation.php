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
	rule('user[password]', 'Password', 'required|min_length[5]|max_length[32]|md5'),
	rule('confirm_password', 'Confirm Password', 'required|max_length[32]|md5|callback__check_password')
);

$config['login'] = array(
	rule('user[email]', 'Email Address', 'trim|required|xss_clean|valid_email'),
	rule('user[password]', 'Password', 'required|md5|callback__check_login')
);

$config['change_password'] = array(
	rule('current_password', 'Current Password', 'required|min_length[5]|max_length[32]|md5|callback__check_current_password'),
	rule('user[password]', 'New Password', 'required|min_length[5]|max_length[32]|md5'),
	rule('retyped_password', 'Retyped Password', 'required|min_length[5]|max_length[32]|md5|callback_check_password')
);

$config['change_info'] = array(
	rule('user[first_name]', 'First Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[last_name]', 'Last Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[gender]', 'Gender', 'required'),
	rule('user[country_id]', 'Country', 'required')
);

$config['forgot_password'] = array(
	rule('user[email]', 'Email Address', 'trim|required|xss_clean|valid_email|callback__check_email_forgot_password')
);

$config['add_entity'] = array(
	rule('entity[name]', 'Entity Name', 'trim|required|xss_clean|strtolower|callback__check_entity')
);

$config['edit_entity'] = array(
	rule('entity[id]', 'Entity ID', 'required'),
	rule('entity[name]', 'Entity Name', 'trim|required|xss_clean|strtolower|callback__check_edit_entity')
);

$config['create_class'] = array(
	rule('class[name]', 'Class Name', 'trim|required|xss_clean|max_length[50]'),
	rule('class[desc]', 'Class Description', 'trim|required|xss_clean'),
	rule('class[course_id]', 'Course', 'required')
);