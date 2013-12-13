<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sign_up extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->layout->refresh_in('home');

		$this->layout->page_info(array(
			'directory' => 'landing',
			'title' => 'Sign Up',
			'template' => 'default',
			'header' => 'default',
			'footer' => 'default'
		));
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	function index() {
		if($this->form_validation->run('sign_up')) {
			$user = $this->input->post('user');
			unset($user['user_pass_conf']);
			if($this->user_model->sign_up($user)) {
				$user = $this->user_model->get_last_user();
				$this->session->set_userdata($user);
				$this->layout->success('Sign Up Successful');
				redirect(base_url('home'), 'refresh');
			} else
				$this->layout->warning('System Error: Sign Up Failed');
		} 

		$this->layout->template();
	}

	function _validate_email($email) {
		if($this->user_model->email_exists($email)) {
			$this->form_validation->set_message('_validate_email',
				'Email is already in use');
			return false;
		}
		return true;
	}

	function _validate_password($confirm) {
		$password = set_value('user[user_pass]', '');
		if($password != $confirm) {
			$this->form_validation->set_message('_validate_password',
				'Confirmation Password is incorrect');
			return false;
		}
		return true;
	}
}