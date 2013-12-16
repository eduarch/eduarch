<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Layout {

	const ERROR_DELIMITER_OPEN = '<div data-alert class="alert-box radius warning" style="margin-bottom: 5px;">';
	const ERROR_DELIMITER_CLOSE = '<a class="close right">&times;</a></div>';

	const TEMPLATE_PREFIX = 'common/template_';
	const HEADER_PREFIX = 'common/header_';
	const FOOTER_PREFIX = 'common/footer_';
	const MESSAGE_PREFIX = 'common/message_';

	private $CI;

	private $template;
	private $directory;
	private $header;
	private $title;

	function __construct() {
		$this->CI = & get_instance();
	}

	function set($template, $directory, $header, $title) {
		$this->template = $template;
		$this->directory = $directory.'/';
		$this->header = $header;
		$this->title = $title;
	}

	function view_top() {
		$this->optional_view('assets_top');
	}

	function view_bottom() {
		$this->optional_view('assets_bottom');
	}

	function view_header() {
		$this->CI->load->view(self::HEADER_PREFIX.$this->header);
	}

	function view_footer() {
		$this->CI->load->view(self::FOOTER_PREFIX.'default');
	}

	function view_contents() {
		$this->CI->load->view($this->directory.'view');
	}

	function view_title() {
		return $this->title;
	}

	function view_message() {
		$page_message = $this->CI->session->userdata('page_message');
		if($page_message) {
			$this->CI->load->view(self::MESSAGE_PREFIX.'default', array(
				'page_message' => $page_message));
			$this->CI->session->unset_userdata('page_message');
		}
	}

	function show($data = null) {
		$this->CI->load->view(self::TEMPLATE_PREFIX.$this->template, $data);
	}

	function view($view) {
		$this->CI->load->view($this->directory.$view);
	}

	function optional_view($view) {
		$view = $this->directory.$view;
		if(file_exists('application/views/'.$view.'.php'))
			$this->CI->load->view($view);
	}

	function form_errors() {
		$this->CI->form_validation->set_error_delimiters(
			self::ERROR_DELIMITER_OPEN, self::ERROR_DELIMITER_CLOSE);
		echo validation_errors();
	}

	function success($content) { $this->page_message('success', $content); }
	function warning($content) { $this->page_message('warning', $content); }
	function info($content) { $this->page_message('info', $content); }

	private function page_message($type, $content) {
		$this->CI->session->set_userdata('page_message', array(
			'type' => $type,
			'content' => $content
		));
	}
}