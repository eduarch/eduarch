<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'classes',
			'header' => get_header(),
			'title' => 'Classes'
		));
	}

	function index() {
		$this->layout->show();
	}
}