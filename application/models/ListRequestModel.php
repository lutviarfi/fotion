<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListRequestModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}



	//insert data buku table
  //read data login table
	/*public function readUser($username,$password){
		$result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',md5($password))->limit(1)->get('login');
		return $result->row();
	}*/

	//ambil id buku buat update
  /*function get_id($idbuku)
  {
    $this->db->where('idbuku', $idbuku);
    $this->db->select("*");
    $this->db->from("q_transaksi");
    return $this->db->get();
  }*/


	//ambil data buku table
	public function getAllRequest(){
		$result = $this->db->get('q_transaksi');
		return $result->result();
	}

	//ambil data login table
	public function getAllUser(){
		$result = $this->db->get('login');
		return $result->result();
	}

    //update data request
    function updateBuku($data,$where,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
  }
