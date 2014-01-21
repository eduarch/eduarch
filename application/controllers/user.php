<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function sign_up() {
		if($this->input->is_ajax_request()) {
			$valid = $this->page->ajax_form_validate(array(
				'valid' => $this->form_validation->run('user/sign_up'),
				'redirect' => 'user/login'
			));

			if($valid) {
				
			}
		} else
			show_404();
	}

	function login() {
		if($this->input->is_ajax_request()) {
			$valid = $this->page->ajax_form_validate(array(
				'valid' => $this->form_validation->run('user/login'),
				'redirect' => 'user/sign_up'
			));

			if($valid) {
				$user = $this->input->post('user');
				$this->page->success('Login Successful');
				$user = $this->table_user->where('email', $user['email'])->get_single();
				S($user);
				S('logged', true);
			}

		} else
			show_404();
	}

	function countries() {
		if($this->input->is_ajax_request())
			echo json_encode($this->table_country->get_multiple());
	}

	function _sign_up_check_email($email) {
		if($this->table_user->email_exists($email)) {
			$this->form_validation->set_message('_sign_up_check_email', 'Email is already in use');
			return false;
		}
		
		return true;
	}

	function _sign_up_check_password($confirm_password) {
		$password = set_value('user[password]', '');
	
		if($password != $confirm_password) {
			$this->form_validation->set_message('_sign_up_check_password', 'Password did not match');
			return false;
		}
		
		return true;
	}

	function _login_check_email($email) {
		$count = $this->table_user->where('email', $email)->count();
	
		if($count == 0) {
			$this->form_validation->set_message('_login_check_email', 'Email does not exist');
			return false;
		}
		
		return true;
	}

	function _login_check_credentials($password) {
		if($this->form_validation->has_error('user[email]') == false) {
			$email = set_value('user[email]', '');
			$user = $this->table_user->where('email', $email)->get_single();

			if($user['password'] != $password) {
				$this->form_validation->set_message('_login_check_credentials', 'Incorrect Password');
				return false;
			}
		}
		
		return true;
	}

}