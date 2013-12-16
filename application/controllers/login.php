<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'login', 'default', 'Login');
	}

	function index() {
		if($this->form_validation->run('login'))
			redirect(base_url('home'), 'refresh');

		$this->layout->show();
	}

	function _validate_login($password) {
		$user = $this->input->post('user');
		$user['user_pass'] = $password;
		$user = $this->user_model->login($user);

		if($user == null) {
			$this->form_validation->set_message('_validate_login', 'Incorrect Email or Password');
			return false;
		}

		$this->session->set_userdata($user);
		return true;
	}
}