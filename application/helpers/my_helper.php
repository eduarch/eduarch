<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function get_non_null() {
	foreach(func_get_args() as $value) {
		if($value)
			return $value;
	}
	return '';
}
