<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class tutorial_model extends CI_Model {
	function __construct() {
		parent::__construct('tutorials', 'id', 'tutorial_id');
	}

}