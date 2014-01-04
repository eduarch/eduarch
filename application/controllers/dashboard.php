<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	private $user;

	function __construct() {
		parent::__construct();
		$this->layout->set(array(
			'template' => 'default',
			'directory' => '',
			'header' => get_header(),
			'title' => ''
		));

		$id = $this->session->userdata('id');
		$this->user = $this->user_model->get_by_id($id);
	}

	function index() {
		switch($this->user['user_type_id']) {
			case ADMIN_USER: refresh('admin'); break;
			case GENERAL_USER:
				if($this->session->userdata('is_facilitator'))
					$this->faci_panel();
				else
					$this->learning();
			break;
		}
	}

	function faci_panel($module = 'index') {
	}

	function learning() {
		$this->layout->directory = 'dashboard/learning/';
		$this->layout->title = 'Learning';
		$this->layout->show();
	}

	function teaching() {
		$classes = $this->classes_model->
			where('user_id', $this->session->userdata('id'))->
			get_list();

		$data['classes'] = $classes;

		$this->layout->directory = 'dashboard/teaching/';
		$this->layout->title = 'Teaching';
		$this->layout->show($data);	
	}

	function sessions() {
		$this->layout->directory = 'dashboard/sessions/';
		$this->layout->title = 'Sessions';
		$this->layout->show();	
	}

	function notifications() {
		$this->layout->directory = 'dashboard/notifications/';
		$this->layout->title = 'Notifications';
		$this->layout->show();		
	}

}