<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sign_up extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'sign_up', 'default', 'Sign Up');
	}

	function index() {
		if($this->form_validation->run('sign_up')) {
			$user = $this->input->post('user');
			unset($user['user_pass_confirm']);
			if($this->user_model->sign_up($user)) {
				$user = $this->user_model->get_last_user();
				$this->session->set_userdata($user);
				$this->layout->success('Sign Up Successful');
				redirect(base_url('home'), 'refresh');
			} else
				$this->layout->warning('Sign up failed because of system issues please contact administrator');
		}

		$this->layout->show();
	}

	function _validate_email($email) {
		if($this->user_model->email_exists($email)) {
			$this->form_validation->set_message('_validate_email', 'Email Address is already in use');
			return false;
		}

		return true;
	}

	function _validate_password($password_confirm) {
		$password = set_value('user[user_pass]', '');

		if($password != $password_confirm) {
			$this->form_validation->set_message('_validate_password', 'Password confirmation incorrect');
			return false;
		}

		return true;
	}

}