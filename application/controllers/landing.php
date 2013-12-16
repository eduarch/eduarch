<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Landing extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'landing', 'default', 'Landing');
	}

	function index() {
		$this->layout->show();
	}
}