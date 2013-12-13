<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Layout {

	const OPEN_TAG_ERROR = '<div data-alert class="alert-box radius warning tag-error">';
	const CLOSE_TAG_ERROR = '</div>';

	const FOOTER_LOCATION = 'common/footer_';
	const HEADER_LOCATION = 'common/header_';
	const TEMPLATE_LOCATION = 'common/template_';

	const SESSION_REFRESHER = 'user_email';

	private $CI;

	public $template;
	public $directory;
	public $title;
	public $header;
	public $footer;

	function __construct() {
		$this->CI = & get_instance();
		$this->page_info = array();
	}

	function page_info($data) {
		$this->directory = $data['directory'].'/';
		$this->title = $data['title'];
		$this->template = self::TEMPLATE_LOCATION . $data['template'];
		$this->header = self::HEADER_LOCATION . $data['header'];
		$this->footer = self::FOOTER_LOCATION . $data['footer'];
	}

	function template($data = null) {
		$this->CI->load->view($this->template);
	}

	function view_header() {
		$this->CI->load->view($this->header);
	}

	function view_content() {
		$this->CI->load->view($this->directory.'view');
	}

	function view_footer() {
		$this->CI->load->view($this->footer);
	}

	function view($view, $data = null) {
		$this->CI->load->view($this->directory.$view, $data);
	}

	function optional_view($view, $data = null) {
		$view = $this->directory.$view;
		if(file_exists('application/views/'.$view.'.php')) {
			$this->CI->load->view($view, $data);
		}
	}

	function form_errors($return = false) {
		$errors = validation_errors();
		if($errors != '') {
			if($return)
				return $errors;
			else {
				$this->CI->form_validation->set_error_delimiters(self::OPEN_TAG_ERROR, self::CLOSE_TAG_ERROR);
				echo $errors;
			}
		}
	}

	function message() {
		$data['page_message'] = $this->CI->session->userdata('page_message');
		if($data['page_message']) {
			$this->CI->session->unset_userdata('page_message');
			$this->CI->load->view('common/template_message', $data);
		}
	}

	function success($message) {
		$this->set_message('success', $message);
	}

	function warning($message) {
		$this->set_message('warning', $message);
	}

	function info($message) {
		$this->set_message('info', $message);
	}

	private function set_message($type, $content) {
		$this->CI->session->set_userdata('page_message', array(
			'type' => $type,
			'content' => $content
		));
	}

	function refresh_in($url) {
		if($this->CI->session->userdata('user_no'))
			redirect(base_url($url), 'refresh');
	}

	function refresh_out($url) {
		if($this->CI->session->userdata('user_no') == false)
			redirect(base_url($url), 'refresh');
	}

}