<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class works extends CI_Controller {
	function __construct() {
		parent::__construct();

		$header = 'default';

		if($this->session->userdata('logged'))
			$header = 'signed';

		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'works',
			'header' => $header,
			'title' => 'Works'
		));
	}

	function index() {
		$this->layout->show();
	}
}