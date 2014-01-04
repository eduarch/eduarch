<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_faci_panel extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->template = 'default';
		$this->layout->header = get_header();
	}

	function index() {
		$this->layout->directory = 'dashboard/faci_panel/';
		$this->layout->title = 'Dashboard | Facilitator Panel';
		$this->layout->show();
	}
}