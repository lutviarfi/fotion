<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	public function readPicker($username,$password)
  	{
 	   $result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',($password))->limit(1)->get('picker');
		return $result->row();
    }
    
}

