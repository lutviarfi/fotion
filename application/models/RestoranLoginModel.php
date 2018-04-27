<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RestoranLoginModel extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

  function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function readUsername($username,$password){
		$result = $this->db->where('username',($username))->where('password',($password))->limit(1)->get('resto');
		return $result->row();
	}
	public function readUsername1($username,$password){
		$result = $this->db->where('username',($username))->where('password',($password))->limit(1)->get('picker');
		return $result->row();
	}

	/*public function getAllUsername(){
		$result = $this->db->get('dosen');
		return $result->result();
	}

	public function getAllUsername1(){
		$result = $this->db->get('dosen');
		return $result->result();
	}

	public function getUsername($id){
		$result = $this->db->where('nik',$id)->get('dosen');
		return $result->row();
	}

	public function getUsername1(){
		$result = $this->db->get('matakuliah');
		return $result->row();
	}

	public function UpdateUser($id,$data){
		$checkupdate = false;
		try{
			$this->db->where('nik',$id);
			$this->db->update('dosen',$data);
			$checkupdate = true;
		}catch (Exception $ex) {

			$checkupdate = false;
		}
		return $checkupdate;
	}

	public function DeleteUser($id){
		$checkupdate = false;
		try{
			$this->db->where('nik',$id);
			$this->db->delete('dosen');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
	}
  */
}
