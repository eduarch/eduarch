<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function view_exists($file_path) {
	return file_exists('application/views/'.$file_path.'.php');
}

function unset_S($key = false) {
	$CI = & get_instance();
	if($key === false)
		$CI->session->sess_destroy();
	else
		$CI->session->unset_userdata($key);
}

function S($key, $value = false) {
	$CI = & get_instance();

	if(is_array($key)) {
		$CI->session->set_userdata($key);
		return;
	}

	if($value === false)
		return $CI->session->userdata($key);

	$CI->session->set_userdata($key, $value);
}

function P($key) {
	$CI = & get_instance();
	return $CI->input->post($key);
}

function set_active($key) {
	if(S($key) === false) {
		$active = array();
		S('active_links', $active);
	}
}

function active($key, $string) {
	$active_links = S('active_links');
	if($active_links && isset($active_links[$key])) {
		echo $string;
		unset($active_links[$key]);
		if(empty($active_links))
			unset_S('active_links');
	}
}

function post_active($key, $string) {
	$active_links = S('active_links');
	if($active_links && isset($active_links[$key]))
		echo $string;
}

function refresh($url = '') {
	redirect(base_url($url), 'refresh');
}

function fragment($directory, $data = null) {
	$CI = & get_instance();
	return $CI->page->add_fragment($directory, $data, true);
}

function view($file, $data = null) {
	$CI = & get_instance();
	return $CI->page->add_view($file, $data, true);
}