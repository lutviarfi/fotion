<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RestoranRegisterModel extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

	public function InsertUsername($data){
		$checkinsert = false;
		try{
			$this->db->insert('resto',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}
