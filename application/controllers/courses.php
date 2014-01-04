<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class courses extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template('default');
	}

	

	function create_course() {
		refresh_in('', false);
		
		$this->load->library('upload');
		$id = $this->session->userdata('id');
		$user = $this->user_model->get_by_id($id);

		$this->layout->page('courses/create_course', get_header(), 'Create Course');
		$this->layout->show($user);
	}
}