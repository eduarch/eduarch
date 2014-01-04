<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class tutorials extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->layout->template = 'default';
	}

	function view_tutorial_info($tutorial_id, $offset = 0) {
		$tutorial = $this->tutorial_model->get_by_id($tutorial_id);

		$tutorial_pages = $this->tutorial_page_model->
			where('tutorial_id', $tutorial_id)->limit(1, $offset)->get_single();

		$class = $this->classes_model->get_by_id($tutorial['class_id']);

		$data['tutorial'] = $tutorial;
		$data['tutorial_page'] = $tutorial_pages;
		$data['class'] = $class;

		$number_of_pages = $this->tutorial_page_model->get_page_count($tutorial_id);

		$cfg['base_url'] = "tutorials/view_tutorial_info/$tutorial_id/";
		$cfg['total_rows'] = $number_of_pages;
		$cfg['per_page'] = 1;

		$this->layout->pagination_config = $cfg;

		$this->layout->page('tutorials/view_tutorial_info', get_header(), 'Tutorial Pages');
		$this->layout->show($data);
	}

}