<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

  public function getFood(){
      $result = $this->db->get('food');
    return $result->result();
  }

  public function insertpesan($data)
  {
    $checkinsert = false;
    try{
      $this->db->insert('pesan',$data);
      $checkinsert = true;
    }catch (Exception $ex) {
      $checkinsert = false;
    }
    return $checkinsert;
  }
}
