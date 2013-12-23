<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set(array(
			'template' => 'default',
			'directory' => 'dashboard',
			'header' => 'signed',
			'title' => 'Dashboard'
		));
	}

	function index() {
		$this->layout->show();
	}
}