<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template('default');
	}

	function index($offset = 0) {
		$this->load->model('related_courses');
		$this->load->model('class_users');

		$data['courses'] = $this->course_model->get();
		$data['classes'] = $this->classes_model->
			select('classes.id, classes.name, classes.desc, classes.image, classes.points,
				users.last_name as user_lname, users.first_name as user_fname, courses.name as course')->
				join('user_model', 'course_model')->
			order_by('classes.points', 'desc')->limit(20, $offset)->get();

		$length = count($data['classes']);
		for($i = 0; $i < $length; $i++) {
			$class = $data['classes'][$i];

			$related_courses = $this->related_courses->
				select('courses.name')->join('course_model')->
				where('related_courses.class_id', $class['id'])->get();
			$courses = array();
			foreach($related_courses as $course)
				$courses[] = $course['name'];
			$data['classes'][$i]['related_courses'] = $courses;

			$data['classes'][$i]['users'] = $this->class_users->
				where('class_id', $class['id'])->count();
		}

		$this->layout->page('classes/view_classes', get_header(), 'View Class');
		$this->layout->show($data);
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

}