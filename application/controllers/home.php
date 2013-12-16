<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'home', 'signed', 'Home Page');
	}

	function index() {
		$this->layout->show();
	}
}