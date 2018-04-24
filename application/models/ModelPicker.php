<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelPicker extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

	//insert data buku table
  public function InsertPickers($data){

		$checkinsert = false;
		try{
			$this->db->insert('picker',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}


}
