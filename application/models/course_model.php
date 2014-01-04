<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class course_model extends Abstract_Model {
	function __construct() {
		parent::__construct('courses', 'id', 'course_id');
	}

}