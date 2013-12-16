<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Edit_Password extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'edit_password', 'signed', 'Edit Password');
	}

	function index() {
		if($this->form_validation->run('edit_password')) {
			$user_no = $this->session->userdata('user_no');
			$new_pass = set_value('user[user_pass_new]', '');
			$this->user_model->update_field($user_no, array('user_pass' => $new_pass));
			$this->layout->success('Change Password Successful');
			redirect(base_url('profile'), 'refresh');
		}
		$this->layout->show();
	}

	function _validate_current_password($password) {
		$user_no = $this->session->userdata('user_no');
		$user = $this->user_model->get_user($user_no, 'user_pass');

		if($password != $user['user_pass']) {
			$this->form_validation->set_message('_validate_current_password', 'Current Password is Incorrect');
			return false;
		}

		return true;
	}

	function _validate_password_equal($retyped) {
		$new_pass = set_value('user[user_pass_new]', '');

		if($retyped != $new_pass) {
			$this->form_validation->set_message('_validate_password_equal', 'New Password and Retyped Password does not match');
			return false;
		}

		return true;
	}
}