<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class landing extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->page->setup('landing/index', 'Landing Page')->guest();
	}

}