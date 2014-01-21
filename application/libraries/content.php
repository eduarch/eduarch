<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class content {

	protected $CI;

	protected $directory;
	protected $title;

	private $meta;
	private $assets_top;
	private $assets_bottom;
	private $view;

	function __construct() {
		$this->CI = & get_instance();
		$this->meta = array();
		$this->assets_top = array();
		$this->assets_bottom = array();
		$this->view = array();
	}

	function setup($directory, $title) {
		$this->directory = $directory.'/';
		$this->title = $title;
		return $this;
	}

	function add_fragment($directory, $data = null, $is_view_fragment = false) {
		$directory = $directory.'/';

		$meta_file = $directory.'meta';
		$assets_top_file = $directory.'assets_top';
		$assets_bottom_file = $directory.'assets_bottom';

		if(view_exists($meta_file))
			$this->meta[] = $this->CI->load->view($meta_file, null, true);

		if(view_exists($assets_top_file))
			$this->assets_top[] = $this->CI->load->view($assets_top_file, null, true);

		if(view_exists($assets_bottom_file))
			$this->assets_bottom[] = $this->CI->load->view($assets_bottom_file, null, true);

		if($is_view_fragment)
			$this->CI->load->view($directory.'view', $data);
		else
			$this->view[] = $this->CI->load->view($directory.'view', $data, true);

		return $this;
	}

	function add_session_fragment($key, $directory) {
		if(S($key)) {
			$this->add_fragment($directory, S($key));
			unset_S($key);
		}
		return $this;
	}

	function add_view($file, $data = null, $is_view = false) {
		if($is_view)
			$this->CI->load->view($file, $data);
		else
			$this->view[] = $this->CI->load->view($file, $data, true);
		return $this;
	}

	function load() {
		$this->CI->load->view('__template', array(
			'title' => $this->title,
			'meta' => implode('', $this->meta), 
			'assets_top' => implode('', $this->assets_top),
			'view' => implode('', $this->view),
			'assets_bottom' => implode('', $this->assets_bottom)
		));
	}

}