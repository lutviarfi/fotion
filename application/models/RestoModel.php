<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RestoModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}


  //insert data login table
	public function InsertDaftar($data){

		$checkinsert = false;
		try{
			$this->db->insert('restogistration',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
  }
    
  public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('restogistration', $data);  
   }  
	
}
