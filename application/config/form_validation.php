<?php

	/*
	array(
		'field' => '',
		'label' => '',
		'rules' => ''
	)
	*/

$config = array();

$config['sign_up'] = array(
	array(
		'field' => 'user[user_fname]',
		'label' => 'First Name',
		'rules' => 'trim|required|xss_clean|max_length[50]'
	),
	array(
		'field' => 'user[user_lname]',
		'label' => 'Last Name',
		'rules' => 'trim|required|xss_clean|max_length[50]'
	),
	array(
		'field' => 'user[user_email]',
		'label' => 'Email Address',
		'rules' => 'trim|required|xss_clean|max_length[50]|valid_email|callback__validate_email'
	),
	array(
		'field' => 'user[user_pass]',
		'label' => 'Password',
		'rules' => 'max_length[32]|md5'
	),
	array(
		'field' => 'user[user_pass_confirm]',
		'label' => 'Confirm Password',
		'rules' => 'max_length[32]|md5|callback__validate_password'
	)
);

$config['login'] = array(
	array(
		'field' => 'user[user_email]',
		'label' => 'Email Address',
		'rules' => 'trim|required|xss_clean|valid_email'
	),
	array(
		'field' => 'user[user_pass]',
		'label' => 'Password',
		'rules' => 'required|md5|callback__validate_login'
	)
);

$config['edit_name'] = array(
	array(
		'field' => 'user[user_fname]',
		'label' => 'First Name',
		'rules' => 'trim|required|xss_clean|max_length[50]'
	),
	array(
		'field' => 'user[user_lname]',
		'label' => 'Last Name',
		'rules' => 'trim|required|xss_clean|max_length[50]'
	)
);

$config['edit_password'] = array(
	array(
		'field' => 'user[user_pass_current]',
		'label' => 'Current Password',
		'rules' => 'required|max_length[32]|md5|callback__validate_current_password'
	),
	array(
		'field' => 'user[user_pass_new]',
		'label' => 'New Password',
		'rules' => 'required|max_length[32]|md5'
	),
	array(
		'field' => 'user[user_pass_retype]',
		'label' => 'Re-type New Password',
		'rules' => 'required|max_length[32]|md5|callback__validate_password_equal'
	)
);