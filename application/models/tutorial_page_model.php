<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class tutorial_page_model extends Abstract_Model {

	function __construct() {
		parent::__construct('tutorial_pages','id', 'tutorial_page_id');
	}

	function get_page_count($tutorial_id) {
		return $this->where('tutorial_id', $tutorial_id)->count();
	}
}