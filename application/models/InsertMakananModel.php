<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InsertMakananModel extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

  public function InsertUsername($data){
    $checkinsert = false;
    try{
      $this->db->insert('buku',$data);
      $checkinsert = true;
    }catch (Exception $ex) {
      $checkinsert = false;
    }
    return $checkinsert;
  }
}
