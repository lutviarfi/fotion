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

	//insert data buku table
  public function InsertBuku($data){

		$checkinsert = false;
		try{
			$this->db->insert('buku',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

  //read data login table
	public function readUser($username,$password){
		$result = $this->db->where('UPPER(id_admin)', strtoupper($username))->where('password',$password)->limit(1)->get('admin');
		return $result->row();

	}

  public function readUser1($username,$password){
		$result = $this->db->where('UPPER(email)', strtoupper($username))->where('pass',$password)->limit(1)->get('footpicker');
		return $result->row();
	}

  //read data login table
	// public function readUser($username,$password){
	// 	$result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',md5($password))->limit(1)->get('restogistration');
	// 	return $result->row();

	// }

  public function readUser2($username,$password){
		$result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',$password)->limit(1)->get('restauran');
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
	
	// //ambil id buku buat update
  // function get_id($idbuku)
  // {
  //   $this->db->where('idbuku', $idbuku);
  //   $this->db->select("*");
  //   $this->db->from("buku");
  //   return $this->db->get();
  // }


	//ambil data food table
	public function getAllFood(){
		$result = $this->db->get('food');
		return $result->result();
	}

	// //ambil data login table
	// // public function getAllUser(){
	// // 	$result = $this->db->get('restogistration');
	// // 	return $result->result();
	// // }

  //   //update data buku
  //   function updateBuku($data,$where,$table)
  //   {
  //     $this->db->where($where);
  //     $this->db->update($table,$data);
  //   }


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

  //   //Delete data buku
  //   public function deleteBuku($idbuku){
	// 		$checkupdate = false;
		
	// 		try{
	// 			$this->db->where('idbuku',$idbuku);
	// 			$this->db->delete('buku');
	// 			$checkupdate = true;
	// 		}catch (Exception $ex) {
				
	// 			$checkupdate = false;
	// 		}
			
	// 		return $checkupdate; 
			
	// 	}

}
