<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Profile extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->layout->refresh_out('landing');

		$this->layout->page_info(array(
			'directory' => 'profile',
			'title' => 'home',
			'template' => 'default',
			'header' => 'general',
			'footer' => 'default'
		));
	}

	function index() {
		$this->layout->template();
	}
}