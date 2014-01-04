<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class related_courses extends Abstract_Model {

	private $ids = array('class_id', 'course_id');

	function __construct() {
		parent::__construct('related_courses', $this->ids, $this->ids);
	}

	function get_related_courses($class_id) {
		return $this->select('courses.name')->join('course_model')->
			where('class_id', $class_id)->get();
	}
}