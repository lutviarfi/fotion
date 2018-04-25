<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	//ambil data login table
	public function getAllAdmin(){
	
        $result = $this->db->get('admin');
		return $result->result();
    }
    
    
	public function getAllPicker(){
    
        $result = $this->db->get('picker');
        return $result->result();
        
	}

	public function update($username){
		$result = $this->db->set('active','1')->where('username',$username)->update('picker');
		return $result;
	}

}