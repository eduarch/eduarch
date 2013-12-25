<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {
	function __construct() {
		parent::__construct();

		$header = 'default';

		if($this->session->userdata('logged'))
			$header = 'signed';

		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'classes',
			'header' => $header,
			'title' => 'Classes'
		));
	}

	function index() {
		$this->layout->show();
	}
}