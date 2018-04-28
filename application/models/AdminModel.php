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
		$result = $this->db->set('active','ACTIVE')->where('username',$username)->update('picker');
		return $result;
	}

	public function getAllResto(){
    
		$result = $this->db->get('resto');
		//$result = $this->db->query("SELECT COUNT(idmakanan) from food where ('username',$data)");
        return $result->result();
        
	}

}