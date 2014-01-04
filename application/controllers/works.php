<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class works extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template = 'default';
		$this->layout->header = get_header();
	}

	function index() {
		$this->layout->directory = 'works/view_works/';
		$this->layout->title = 'View Works';
		$this->layout->show();
	}
}