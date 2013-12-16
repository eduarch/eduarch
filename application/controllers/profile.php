<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Profile extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'profile', 'signed', 'User Profile');
	}

	function index() {
		$this->layout->show();
	}
}