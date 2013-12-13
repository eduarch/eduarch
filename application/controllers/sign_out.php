<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_out extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'landing',
			'title' => 'Home Page',
			'template' => 'default',
			'header' => 'general',
			'footer' => 'default'
		));
	}

	function index() {
		$this->session->sess_destroy();
		redirect(base_url(''), 'refresh');
	}

}