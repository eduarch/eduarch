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
		refresh_in('', false);
		$this->load->model('country_model');
		$this->load->library('upload');

		$id = $this->session->userdata('id');
		$user = $this->user_model->get_by_id($id);
		$user['country'] = $this->country_model->get_by_id($user['country_id']);

		$this->layout->page('classes/create_class', get_header(), 'Create Class');
		$this->layout->show($user);
	}

	function view_classes($course_id = 0, $offset = 0) {
		$this->load->model('related_courses');
		$this->load->model('class_users');

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

}