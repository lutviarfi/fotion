<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	//ambil data login table
	public function getAllUser(){
		$result = $this->db->query("SELECT * from food,pesan WHERE food.idmakanan = pesan.idpesan");
		return $result->result();
	}

	public function getsort($username){	
		$result = $this->db->query("SELECT * from food,pesan,resto,picker WHERE food.idmakanan = pesan.idmakanan AND food.username = resto.username AND resto.username ='$username'");
		return $result->result();
	}

	public function getmerge(){	
		$result = $this->db->query("SELECT * from food,pesan WHERE  food.idmakanan = pesan.idmakanan");
		return $result->result();
	}
	public function update($idpesan){
		$result = $this->db->set('status','APPROVE')->where('idpesan',$idpesan)->update('pesan');
		return $result;
	}
}