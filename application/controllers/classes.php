<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->layout->template('default');
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

	function index() {
		$this->layout->page('classes/view_classes', get_header(), 'Classes');
		$this->layout->show();
	}


}