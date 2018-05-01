<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model {

    public function __construct(){
		parent::__construct();
    }
    
    public function getmerge(){
		$result = $this->db->query("SELECT * from food,pesan WHERE food.idmakanan = pesan.idpesan");
		return $result->result();

	}

    public function pesan($idmakanan){
		$result = $this->db->insert('pesan', $idmakanan);
		return $result;
    }
  
    public function getPicker(){
        $result = $this->db->get('picker');
        return $result->result();
  }
}
