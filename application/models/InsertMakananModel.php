<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InsertMakananModel extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

  public function InsertUsername($data){
    $checkinsert = false;
    try{
      $this->db->insert('food',$data);
      $checkinsert = true;
    }catch (Exception $ex) {
      $checkinsert = false;
    }
    return $checkinsert;
  }
  public function getPoint()
  {
    $this->db->where('point', $point);
    $this->db->get('resto');
  }
}
