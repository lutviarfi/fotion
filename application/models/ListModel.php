<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	//ambil data login table
	public function getAllUser(){
		$result = $this->db->get('pesan');
		return $result->result();
	}

	function updateStatus($id,$data)
    {
		$check = false ;
		try{
			$this->db->where('nama',$id);
			$this->db->update('pesan',$data);
			$check = true;
		} catch (Exception $ex) {
			$check = false;
		}
		return $check;
      
    }

}