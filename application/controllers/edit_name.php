<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Edit_Name extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->layout->set('default', 'edit_name', 'signed', 'Edit Name');
	}

	function index() {
		if($this->form_validation->run('edit_name')) {
			$user = $this->input->post('user');
			$user_no = $this->session->userdata('user_no');
			$this->user_model->update_field($user_no, $user);
			$this->session->set_userdata($user);
			$this->layout->success('Change Name Successful');
			redirect(base_url('profile', 'refresh'));
		}

		$this->layout->show();
	}
}