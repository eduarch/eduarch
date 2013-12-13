<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'home',
			'title' => 'Home Page',
			'template' => 'default',
			'header' => 'general',
			'footer' => 'default',
			'out' => ''
		));
	}

	function index() {
		$this->layout->template();
	}

	function sign_out() {
		$this->session->sess_destroy();
		refresh_out('landing');
	}
}