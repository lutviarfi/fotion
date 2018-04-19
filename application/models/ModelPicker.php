<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelPicker extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	//insert data buku table
  public function InsertPicker($data){

		$checkinsert = false;
		try{
			$this->db->insert('nama',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

  
}
