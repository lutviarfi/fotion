<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CRUDModelfotion extends CI_Model {

    public function __construct(){
		parent::__construct();
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

  public function readUser2($username,$password){
		$result = $this->db->where('UPPER(username)', strtoupper($username))->where('password',$password)->limit(1)->get('restauran');
		return $result->row();
	}

	//ambil data buku table
	public function getAllBuku(){
		$result = $this->db->get('buku');
		return $result->result();
	}

	//ambil data login table
	public function getAllUser(){
		$result = $this->db->get('login');
		return $result->result();
	}
}
