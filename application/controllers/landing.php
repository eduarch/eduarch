<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Landing extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'landing', 'default', 'Landing');
		// $this->user_model->update_field('2', array('user_pass' => md5('123')));
	}

	function index() {
		$this->layout->show();
	}
}