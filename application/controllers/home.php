<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		if($this->session->userdata('user_type_no') == GENERAL_USER) {
			$this->layout->page_info(array(
				'directory' => 'home',
				'title' => 'Home Page',
				'template' => 'default',
				'header' => 'general',
				'footer' => 'default',
				'out' => ''
			));
		} else {
			$this->layout->page_info(array(
				'directory' => 'home_admin',
				'title' => 'Home Admin',
				'template' => 'admin',
				'header' => 'admin',
				'footer' => 'default'
			));
		}
	}

	function index() {
		$this->layout->template();
	}
}