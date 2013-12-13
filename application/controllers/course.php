<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Course extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'course',
			'title' => 'Courses',
			'template' => 'default',
			'header' => 'default',
			'footer' => 'default'
		));
	}

	function index() {
		
	}
}