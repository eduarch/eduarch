<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class landing extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'landing',
			'header' => 'default',
			'title' => 'Landing Page'
		));
	}

	function index() {
		$this->layout->show();
	}
}