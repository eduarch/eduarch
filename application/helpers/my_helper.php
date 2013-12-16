<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function text_limiter($string, $limit) {
	$length = strlen($string);
	if($length > $limit)
		return substr($string, 0, $limit).'....';
	return $string;
}