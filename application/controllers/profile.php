<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Profile extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'profile', 'signed', 'User Profile');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index() {
		$user_no = $this->session->userdata('user_no');
		$user = $this->user_model->get_user($user_no);
		$this->layout->patch_avatar($user);
		$this->layout->show($user);
	}
}