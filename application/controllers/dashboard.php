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

	function index($control = '', $title = '') {
		if($control == '') {
			if($this->session->userdata('is_facilitator')) {

			} else {
				switch($this->session->userdata('user_type_id')) {
					case GENERAL_USER:
						$this->layout->directory = 'dashboard/learning/';
						$this->layout->title = 'Dashboard | Learning';
					break;
					case ADMIN_USER:
						$this->layout->directory = 'dashboard/admin_panel/';
						$this->layout->title = 'Dashboard | Learning';
					break;
				}
			}
		} else if(file_exists('application/views/dashboard/'.$control.'/view.php')) {
			$this->layout->directory = "dashboard/$control/";
			$this->layout->title = 'Dashboard | '.$title;
		} 

		$this->layout->show();
	}
}