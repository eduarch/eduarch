<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'admin_user',
			'title' => 'Home Admin',
			'template' => 'admin',
			'header' => 'admin',
			'footer' => 'default'
		));
	}

	function create() {
		$this->layout->template();
	}

	function search_update() {

	}

	function logs() {

	}
}