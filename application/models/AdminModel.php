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
	    return $result->result();
	}

	public function getPointResto($username){
	
		$result = $this->db->where('username',$username);
		$result = $this->db->get('resto');
	    return $result->result();
	}

	public function updatePoint($username){
		
		// $result = $this->db->query("UPDATE resto SET 'point' = '$point' WHERE username = '$username'");
		// return $result->result();

		$result2 = $this->db->where('username',$username);
		$result2 = $this->db->set('point');
		$result2 = $this->db->update('resto');
		
		return $result2;
	}

}