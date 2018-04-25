<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RestoranRegistModel extends CI_Model {
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

	function changeActiveState($key)
	{
		$this->load->database();
	 	$data = array(
			'active'=>"ACTIVE"
	 	);

		$this->db->where('md5(username)', $key);
		$this->db->update('resto', $data);

		return true;
	}
}
