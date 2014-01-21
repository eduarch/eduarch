<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	function __construct($rules = array()) {parent::__construct($rules);}
	function has_error($field = false) {
		if($field == false)
			return empty($this->_error_array) == false;
		return isset($this->_error_array[$field]);
	}
	function error_array($field = false) {
		if($field) {
			return array($field => $this->_error_array[$field]);
		}
		return $this->_error_array;
	}

}