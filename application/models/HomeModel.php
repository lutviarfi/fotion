<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

  public function getFood(){
      $result = $this->db->get('food');
    return $result->result();
  }
}
