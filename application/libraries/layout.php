<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Layout {

	const ERROR_DELIMITER_OPEN = '<div data-alert class="alert-box radius warning" style="margin-bottom: 5px;">';
	const ERROR_DELIMITER_CLOSE = '<a class="close right">&times;</a></div>';

	const TEMPLATE_PREFIX = 'common/template_';
	const HEADER_PREFIX = 'common/header_';
	const FOOTER_PREFIX = 'common/footer_';
	const MESSAGE_PREFIX = 'common/message_';

	private $CI;

	public $template;
	public $directory;
	public $header;
	public $title;

	public $pagination_config;

	function __construct() {
		$this->CI = & get_instance();
	}

	function set($data) {
		$this->template($data['template']);
		$this->page(
			$data['directory'].'/',
			$data['header'], 
			$data['title']);
	}

	function template($template) {
		$this->template = $template;
	}

	function page($directory, $header, $title) {
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
		if($this->CI->input->is_ajax_request())
			return validation_errors();
		else
			echo validation_errors();
	}

	function patch_avatar(&$user) {
		if($user['user_image'] == null)
			$user['user_image'] = JOHN_DOE_IMAGE;
		else
			$user['user_image'] = UPLOAD_AVATAR.$user['user_image'];
	}

	function upload_errors() {
	    echo $this->CI->upload->display_errors(self::ERROR_DELIMITER_OPEN, self::ERROR_DELIMITER_CLOSE);
	}

	function success($content) { $this->page_message('success', $content, 'glyphicon glyphicon-ok-sign'); }
	function warning($content) { $this->page_message('warning', $content, 'glyphicon glyphicon-warning-sign'); }
	function info($content) { $this->page_message('info', $content, 'glyphicon glyphicon-info-sign'); }

	private function page_message($type, $content, $icon) {
		$this->CI->session->set_userdata('page_message', array(
			'type' => $type,
			'content' => $content,
			'icon' => $icon
		));
	}

	function pagination() {
		$this->CI->load->library('pagination');
		$this->CI->pagination->initialize($this->pagination_config);
		echo $this->CI->pagination->create_links();
	}
}