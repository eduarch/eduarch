<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template('default');
	}

	function index() {
		$this->view_classes(0, 0);
	}

	function create_class() {
		if($this->form_validation->run('create_class')) {
			$class = $this->input->post('class');
			$class['user_id'] = $this->session->userdata('id');
			$this->classes_model->insert($class);
			$this->layout->success('Class successfully created');
			refresh('classes/view_class_info/'.$class['course_id']);
		}

		$data['courses'] = $this->course_model->get();
		$this->layout->page('classes/create_class', get_header(), 'Create Class');
		$this->layout->show($data);
	}

	function view_classes($course_id = 0, $offset = 0) {
		$data['courses'] = $this->course_model->get();
		$data['classes'] = $this->classes_model->get_list($course_id, $offset);

		$length = count($data['classes']);
		for($i = 0; $i < $length; $i++) {
			$class = $data['classes'][$i];
			$related_courses = $this->related_courses->get_related_courses($class['id']);
			$courses = array();
			foreach($related_courses as $course)
				$courses[] = $course['name'];
			$data['classes'][$i]['related_courses'] = $courses;
			$data['classes'][$i]['users'] = $this->class_users->get_user_count($class['id']);
		}

		$this->layout->page('classes/view_classes', get_header(), 'View Class');
		$this->layout->show($data);
	}

	function view_class_info($class_id) {
		$class = $this->classes_model->get_class($class_id);
		$raw_related_courses = $this->related_courses->get_related_courses($class_id);

		$related_courses = array();
		foreach($raw_related_courses as $related_course)
			$related_courses[] = $related_course['name'];

		$class['related_courses'] = $related_courses;
		$data['class'] = $class;

		$this->layout->page('classes/view_class_info', get_header(), 'View Class Info');
		$this->layout->show($data);
	}	

}