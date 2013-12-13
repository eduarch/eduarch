<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_admin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'home_admin',
			'title' => 'Home Admin',
			'template' => 'admin',
			'header' => 'general',
			'footer' => 'default'
		));
	}

	function index() {
		$this->layout->template();
	}
}