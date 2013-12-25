<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class suggestion_board extends CI_Controller {
	function __construct() {
		parent::__construct();

		$header = 'default';

		if($this->session->userdata('logged'))
			$header = 'signed';

		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'suggestion_board',
			'header' => $header,
			'title' => 'Suggestion Board'
		));
	}

	function index() {
		$this->layout->show();
	}
}