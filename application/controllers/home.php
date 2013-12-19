<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'home',
			'header' => 'signed',
			'title' => 'Home Page'
		));
	}

	function index() {
		$this->layout->show();
	}
}