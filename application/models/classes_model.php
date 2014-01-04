<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class classes_model extends Abstract_Model {
	function __construct() {
		parent::__construct('classes', 'id', 'class_id');
	}

}