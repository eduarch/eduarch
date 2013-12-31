<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once '_dashboard/admin_panel.php';

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
			case ADMIN_USER: $this->admin_panel(); break;
			case GENERAL_USER:
				if($this->session->userdata('is_facilitator'))
					$this->faci_panel();
				else
					$this->learning();
			break;
		}
	}

	function admin_panel($module = 'index') {
		$admin_panel = new admin_panel($this);

		if(method_exists($admin_panel, $module)) {
			$args = func_get_args();
			array_shift($args);
			call_user_func_array(array($admin_panel, $module), $args);
		} else {
			show_404();
		}
	}

	function faci_panel($module) {

	}

	function learning() {
		$this->layout->directory = 'dashboard/learning/';
		$this->layout->title = 'Learning';
		$this->layout->show();
	}

	function teaching() {
		$this->layout->directory = 'dashboard/teaching/';
		$this->layout->title = 'Teaching';
		$this->layout->show();	
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


