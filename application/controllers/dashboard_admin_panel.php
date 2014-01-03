<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_admin_panel extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->layout->template = 'default';
		$this->layout->header = get_header();
	}

	function index() {
		$this->layout->directory = 'dashboard/admin_panel/';
		$this->layout->title = 'Dashboard | Admin Panel';
		$this->layout->show();
	}

	function countries() {
		$this->layout->directory = 'dashboard/admin_panel/countries/';
		$this->layout->title = 'Dashboard | Admin Panel | Countries';
		$this->layout->show();
	}

	function entities($offset = 0) {
		$this->layout->directory = 'dashboard/admin_panel/entities/';
		$this->layout->title = 'Dashboard | Admin Panel | Entities';

		$this->load->model('entity_model');

		$data['entities'] = $this->entity_model->order_by('id', 'asc')->limit(10, $offset)->get();

		$data['previous'] = $data['next'] = $offset;
		if($offset > 0)
			$data['previous'] = $offset - 10;

		if(!empty($data['entities']) && count($data['entities']) == 10)
			$data['next'] = $offset + 10;

		$this->layout->show($data);
	}

	function add_entity() {
		$this->load->model('entity_model');

		if($this->form_validation->run('add_entity')) {
			exit;
			$entity = $this->input->post('entity');
			$this->entity_model->insert($entity);
			$this->layout->success('New Entity Added');
			refresh('admin/entities');
		}

		$this->entities();
	}

	function view_entity($id) {
		$this->load->model('entity_model');
		$entity = $this->entity_model->get_by_id($id);

		if($this->input->is_ajax_request()) {
			echo json_encode($entity);
			return;
		}

		$this->layout->directory = 'dashboard/admin_panel/entities_view/';
		$this->layout->title = 'Dashboard | Admin Panel | View Entity ';
		$this->layout->show($entity);
	}

	function edit_entity($id) {
		if($this->input->is_ajax_request()) {
			$entity = $this->input->post('entity');
			echo json_encode($entity);
			return;
		}

		$this->load->model('entity_model');

		if($this->form_validation->run('edit_entity')) {
			$entity = $this->input->post('entity');
			$this->entity_model->
				set('name', $entity['name'])->
				where_id($entity['id'])->
				update();

			$this->layout->success('Entity Successfully Changed');
			refresh('admin/entities');
		}

		$data = $this->entity_model->get_by_id($id);

		$this->layout->directory = 'dashboard/admin_panel/entities_edit/';
		$this->layout->title = 'Dashboard | Admin Panel | Edit Entities';
		$this->layout->show($data);
	}

	function remove_entity($id) {
		$this->load->model('entity_model');
		$this->entity_model->where_id($id)->delete();
		refresh('admin/entities');
	}

	function users() {
		$this->layout->directory = 'dashboard/admin_panel/users/';
		$this->layout->title = 'Dashboard | Admin Panel | Users';

		$data['users'] = $this->user_model->
			select('
				users.id, email, last_name, first_name, gender,
				countries.name as country, user_types.name as user_type, status.name as status')->
			join('country_model', 'user_type_model', 'status_model')->get();

		$this->layout->show($data);
	}

	function view_user($user_id) {
		$this->layout->directory = 'dashboard/admin_panel/users_view/';
		$this->layout->title = 'Dashboard | Admin Panel | View User';
		$user = $this->user_model->get_full_info();

		if(empty($user)) {
			$this->layout->warning('User does not exist anymore.');
			refresh('admin/users');
		}

		$this->layout->show($user);
	}

	function status() {
		$this->load->model('status_model');
		$this->load->model('status_entity_model');

		$this->layout->directory = 'dashboard/admin_panel/status/';
		$this->layout->title = 'Dashboard | Admin Panel | Status';

		$data['status'] = $this->status_model->get();
		$data['status_entity'] = $this->status_entity_model->get_status_entity();

		$this->layout->show($data);
	}

	function add_status_entity($stat_id) {
		
	}

	/* Callbacks */
	function _check_entity($entity) {
		$entity = $this->entity_model->where('name', $entity)->get_single();

		if(!empty($entity)) {
			$this->form_validation->set_message('_check_entity', 'Entity already exists');
			return false;
		}
		
		return true;
	}

	function _check_edit_entity($entity_name) {
		$id = set_value('entity[id]', '');

		$entity_by_id = $this->entity_model->get_by_id($id);
		$entity_by_name = $this->entity_model->where('name', $entity_name)->get_single();

		if(!empty($entity_by_name)) {
			if($entity_by_id['name'] == $entity_name) {
				$this->form_validation->set_message('_check_edit_entity', 
					'No changes assigned');
			} else {
				$this->form_validation->set_message('_check_edit_entity', 
					'Entity name already exists');
			}

			return false;
		}

		return true;
	}

}