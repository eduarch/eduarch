<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_model.php';

class status_model extends Abstract_Model {
	
	function __construct() {
		parent::__construct('status', 'id', 'status_id');
	}
		
}