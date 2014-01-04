<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class classes_model extends Abstract_Model {
	function __construct() {
		parent::__construct('classes', 'id', 'class_id');
	}

	function get_list($course_id = 0, $offset = 0) {
		return $this->when($course_id != 0, 'where', 'course_id', $course_id)->
			select('classes.id, classes.name, classes.desc, classes.image, classes.points,
				users.last_name as user_lname, users.first_name as user_fname, courses.name as course')->
				join('user_model', 'course_model')->
			order_by('classes.points', 'desc')->limit(20, $offset)->get();
	}

	function get_class($class_id) {
		return $this->select('classes.id, classes.name, classes.desc, classes.image, classes.points,
				users.first_name as user_fname, users.last_name as user_lname, courses.name as course')->
			join('user_model', 'course_model')->
			get_by_id($class_id);
	}

}