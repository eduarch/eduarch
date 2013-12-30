<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class suggestion_board extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'suggestion_board',
			'header' => get_header(),
			'title' => 'Suggestion Board'
		));
	}

	function index() {
		$this->load->show();
	}
}