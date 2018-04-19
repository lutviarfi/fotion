<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CRUDModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}


  //insert data login table
	public function Insertfood($data){

		$checkinsert = false;
		try{
			$this->db->insert('food',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
  }

  //read data login table
	public function readUser($username,$password){
		$result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',md5($password))->limit(1)->get('restogistration');
		return $result->row();

	}

	//ambil id buku buat update
  function get_id($idbuku)
  {
    $this->db->where('idbuku', $idbuku);
    $this->db->select("*");
    $this->db->from("buku");
    return $this->db->get();
  }


	//ambil data buku table
	public function getAllFood(){
		$result = $this->db->get('food');
		return $result->result();
	}

	//ambil data login table
	public function getAllUser(){
		$result = $this->db->get('restogistration');
		return $result->result();
	}

    //update data buku
    function updateBuku($data,$where,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    //Delete data buku
    public function deleteBuku($idbuku){
			$checkupdate = false;
		
			try{
				$this->db->where('idbuku',$idbuku);
				$this->db->delete('buku');
				$checkupdate = true;
			}catch (Exception $ex) {
				
				$checkupdate = false;
			}
			
			return $checkupdate; 
			
		}
}
