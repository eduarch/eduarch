<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Landing extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->layout->refresh_in('home');

		$this->layout->page_info(array(
			'directory' => 'landing',
			'title' => 'Landing Page',
			'template' => 'default',
			'header' => 'default',
			'footer' => 'default',
		));
		
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	function index() {
		$this->layout->template();
	}

}