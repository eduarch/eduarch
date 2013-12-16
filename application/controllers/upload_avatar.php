<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Upload_Avatar extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('upload');
		$config['upload_path'] = UPLOAD_AVATAR;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->upload->initialize($config);
	}

	function index() {
		if($this->upload->do_upload('userfile')) {
			$user_no = $this->session->userdata('user_no');
			$upload_data = $this->upload->data();
			
			$image = $this->user_model->get_profile_image($user_no);
			if($image != null && file_exists(UPLOAD_AVATAR.$image))
				unlink(UPLOAD_AVATAR.$image);

			$file_name = $upload_data['file_name'];
			$this->user_model->update_field($user_no, array('user_image' => $file_name));
			$this->session->set_userdata('user_image', UPLOAD_AVATAR.$file_name);
			$this->layout->success('Profile Image Updated');
		}

		redirect(base_url('profile', 'refresh'));	
	}
}




