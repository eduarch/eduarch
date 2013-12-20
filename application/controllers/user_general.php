<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class user_general extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template('default');

		$config['upload_path'] = './uploads/user/avatar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
	}

	function sign_up() {
		refresh_in('home');
		
		if($this->form_validation->run('sign_up')) {
			$user = $this->user_model->get_last_insert();
			$user['logged'] = true;
			$this->session->set_userdata($user);
			$this->layout->success('Signed Up Successfully');
			refresh('home');
		}

		$this->load->model('country_model');
		$data['countries'] = $this->country_model->get();
		$this->layout->page('sign_up', 'default', 'Sign Up');
		$this->layout->show($data);
	}

	function login() {
		refresh_in('home');

		if($this->form_validation->run('login')) {
			$this->layout->success('Logged In Successfully');
			refresh('home');
		}

		$user = $this->input->post('user');
		$this->layout->page('login', 'default', 'Login');
		$this->layout->show($user);
	}

	function logout() {
		refresh_in('', false);
		$this->session->sess_destroy();
		$this->layout->success('Logout Successful');
		$this->layout->page('landing', 'default', 'Landing Page');
		$this->layout->show();
	}

	function account_settings() {
		refresh_in('', false);
		$this->load->model('country_model');

		$id = $this->session->userdata('id');
		$user = $this->user_model->get_by_id($id);
		$user['country'] = $this->country_model->get_by_id($user['country_id']);
		$this->layout->page('account_settings', 'signed', 'Account Settings');
		$this->layout->show($user);
	}

	function upload_avatar() {
		if($this->upload->do_upload()) {
			
			$this->layout->success('Image Uploaded Successfully');
		}

		$this->account_settings();
	}

	function change_info() {

	}

	function change_password() {
	}

	/* CallBacks */
	function _check_email($email) {
		$user = $this->user_model->get_by_email($email);
	
		if($user) {
			$this->form_validation->set_message('_check_email', 'Email is already in use');
			return false;
		}
		
		return true;
	}

	function _check_password($confirm_password) {
		$password = set_value('user[password]', '');
	
		if($password != $confirm_password) {
			$this->form_validation->set_message('_check_password', 'Password did not match');
			return false;
		}
		
		return true;
	}

	function _check_login($password) {
		$email = set_value('user[email]', '');
		$user = $this->user_model->where('email', $email, 'password', $password)->get_single();
	
		if($user == null) {
			$this->form_validation->set_message('_check_login', 'Incorrect Email or Password');
			return false;
		}
		
		$user['logged'] = true;
		$this->session->set_userdata($user);

		return true;
	}
}