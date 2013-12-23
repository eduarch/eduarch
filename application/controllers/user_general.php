<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class user_general extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->template('default');
	}

	function sign_up() {
		refresh_in('home');
		
		if($this->form_validation->run('sign_up')) {
			$user = $this->input->post('user');
			$this->user_model->sign_up($user);
			$user = $this->user_model->get_last_insert();
			$user['logged'] = true;
			$this->session->set_userdata($user);
			$this->layout->success('Signed Up Successfully');
			refresh('home');
		}

		$this->load->model('country_model');
		$data['countries'] = $this->country_model->get();

		$this->layout->page('user_general/sign_up', 'default', 'Sign Up');
		$this->layout->show($data);
	}

	function login() {
		refresh_in('home');

		if($this->form_validation->run('login')) {
			$this->layout->success('Logged In Successfully');
			refresh('home');
		}

		$user = $this->input->post('user');
		$this->layout->page('user_general/login', 'default', 'Login');
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
		$this->load->library('upload');

		$id = $this->session->userdata('id');
		$user = $this->user_model->get_by_id($id);
		$user['country'] = $this->country_model->get_by_id($user['country_id']);

		$this->layout->page('user_general/account_settings', 'signed', 'Account Settings');
		$this->layout->show($user);
	}

	function upload_avatar() {
		$config['upload_path'] = './uploads/user/avatar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';

		$this->load->library('upload', $config);

		if($this->upload->do_upload()) {
			$id = $this->session->userdata('id');
			$upload_data = $this->upload->data();
			$image = USER_AVATAR_LOCATION.$upload_data['file_name'];
			$this->session->set_userdata('image', $image);
			$this->user_model->update_image($id, $image);
			$this->layout->success('Image Uploaded Successfully');
			redirect('account_settings');
		}

		$this->account_settings();
	}

	function change_info() {
		if($this->form_validation->run('change_info')) {
			$id = $this->session->userdata('id');
			$user = $this->input->post('user');
			$this->user_model->update_info($id, $user);
			$this->session->set_userdata($user);
			$this->layout->success('Change Information Successful');
			refresh('account_settings');
		}

		$id = $this->session->userdata('id');
		$data = $this->user_model->get_by_id($id);

		$this->load->model('country_model');
		$data['country'] = $this->country_model->get_by_id($data['country_id']);
		$data['countries'] = $this->country_model->get();
		$this->layout->page('user_general/change_info', 'signed', 'Change Information');
		$this->layout->show($data);	
	}

	function change_password() {
		if($this->form_validation->run('change_password')) {
			$id = $this->session->userdata('id');
			$user = $this->input->post('user');
			$password = $user['password'];
			$this->user_model->update_password($id, $password);
			refresh('account_settings');
		}

		$this->layout->page('user_general/change_password', 'signed', 'Change Password');
		$this->layout->show();
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

	function _check_current_password($input_password) {
		$password = $this->session->userdata('password');
	
		if($password != $input_password) {
			$this->form_validation->set_message('_check_current_password', 'Current Password is Invalid');
			return false;
		}
		
		return true;
	}

}