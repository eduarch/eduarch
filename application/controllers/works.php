<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class works extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'works',
			'header' => get_header(),
			'title' => 'Works'
		));
	}

	function index() {
		$this->layout->show();
	}
}