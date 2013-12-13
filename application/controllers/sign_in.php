<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->layout->page_info(array(
			'directory' => 'landing',
			'title' => 'Landing Page',
			'template' => 'default',
			'header' => 'default',
			'footer' => 'default',
			'in' => $this->session->userdata('in')
		));
		
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	function index() {
		if($this->form_validation->run('sign_in')) {
			$this->layout->success('Signed in successfully');
			if($this->input->is_ajax_request()) {
				echo json_encode(array(
					'valid' => true,
					'redirect' => $this->session->userdata('in')));
				return;
			} else {
				redirect('home', 'refresh');
			}
		} elseif($this->input->is_ajax_request()) {
			echo json_encode(array(
				'valid' => false,
				'errors' => $this->layout->form_errors(true)
			));
			return;
		}

		$this->layout->template();
	}

	function _validate_login($password) {
		$user = $this->input->post('user');
		$user['user_pass'] = $password;
		$user = $this->user_model->sign_in($user);
		if($user == null) {
			$this->form_validation->set_message('_validate_login',
				'Incorrect Email or Password');
			return false;
		}

		$user['in'] = $this->user_model->decide_home($user['user_type_no']);
		$this->session->set_userdata($user);

		return true;
	}
}