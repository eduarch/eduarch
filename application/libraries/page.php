<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'content.php';

class page extends content {

	function __construct() {
		parent::__construct();
	}

	function guest($data = null) {
		$this->add_fragment('__headers/guest')->
			add_session_fragment('page_message', '__messages/page_alert')->
			add_fragment($this->directory, $data)->
			add_fragment('__footers/global')->
			load();
	}

	function admin_dashboard($data) {
		$this->add_fragment('__headers/user')->
			add_session_fragment('page_message', '__message/page_alert')->
			add_fragment('__sidemenus/dashboard/admin')->
			add_fragment($this->directory, $data)->
			add_fragment('__footers/global')->
			load();
	}

	function faci_dashboard($data) {
		$this->add_fragment('__headers/user')->
			add_session_fragment('page_message', '__message/page_alert')->
			add_fragment('__sidemenus/dashboard/faci')->
			add_fragment($this->directory, $data)->
			add_fragment('__footers/global')->
			load();
	}

	function user_dashboard($data) {
		$this->add_fragment('__headers/user')->
			add_session_fragment('page_message', '__message/page_alert')->
			add_fragment('__sidemenus/dashboard/user')->
			add_fragment($this->directory, $data)->
			add_fragment('__footers/global')->
			load();
	}

	function success($content) { $this->message('success', $content, 'glyphicon glyphicon-ok-sign'); }
	function warning($content) { $this->message('warning', $content, 'glyphicon glyphicon-warning-sign'); }
	function info($content) { $this->message('info', $content, 'glyphicon glyphicon-info-sign'); }

	private function message($type, $message, $icon) {
		S('page_message', array(
			'type' => $type,
			'message' => $message,
			'icon' => $icon
		));
	}

	function ajax_form_validate($options = array()) {
		if($options['valid'] == false)
			$options['errors'] = $this->CI->form_validation->error_array();
		echo json_encode($options);
		return $options['valid'];
	}

	function ajax_field_validate($field) {
		$data['valid'] = $this->CI->form_validation->has_error($field) == false;
		if($data['valid'] == false)
			$data['error'] = $this->CI->form_validation->error_array($field);
		echo json_encode($data);
		return $data['valid'];
	}

}