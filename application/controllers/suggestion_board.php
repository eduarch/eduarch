<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class suggestion_board extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template = 'default';
		$this->layout->header = get_header();
	}

	function index() {
		$this->layout->directory = 'suggestion_board/view_board/';
		$this->layout->title = 'Suggestion Board';
		$this->layout->show();
	}
}