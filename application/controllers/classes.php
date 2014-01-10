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
			$data['classes'][$i]['related_courses'] = $related_courses;
			$data['classes'][$i]['users'] = $this->class_users->get_user_count($class['id']);
		}

		$this->layout->page('classes/view_classes', get_header(), 'View Class');
		$this->layout->show($data);
	}

	function view_class_info($class_id) {
		$class = $this->classes_model->get_class($class_id);
		$class['related_courses'] = $this->related_courses->get_related_courses($class_id);
		$class['users'] = $this->class_users->get_user_count($class_id);
		$class['tutorials'] = $this->tutorial_model->where('class_id', $class_id)->get();

		$this->layout->page('classes/view_class_info', get_header(), 'View Class Info');
		$this->layout->show($class);		
	}

	function upload_image($class_id) {

	}

	function rate($class_id) {
		if($this->input->is_ajax_request()) {
			if($this->user_rated_entity_model->has_saved($entity_id, $class_id, $user_id)) {
				$entity = $this->classes_model->get_entity();
				$user_id = $this->session->userdata('id');
				$this->user_rated_entity_model->save($entity['id'], $class_id, $user_id);
			}
		}
	}

}