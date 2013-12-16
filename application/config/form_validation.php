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