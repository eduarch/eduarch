<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function refresh_in($url = '', $is_logged = true) {
	$ci = & get_instance();
	if($ci->session->userdata('logged') == $is_logged)
		refresh($url);
}

function refresh($url = '') {
	redirect(base_url($url), 'refresh');
}

function whence($condition, $display1, $display2 = false) {
	echo $condition? $display1: $display2;
}

function get_header() {
	$ci = & get_instance();
	$header = 'default';

	if($ci->session->userdata('logged'))
		return 'signed';

	return null;
}