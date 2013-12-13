<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Create_user extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'home_admin',
			'title' => '',
			'template' => 'default',
			'header' => 'default',
			'footer' => 'default'
		));
	}

	function index() {
		
	}
}