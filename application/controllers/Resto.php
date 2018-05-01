<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resto extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('ListModel');
		
	}

	// tampil list picker dan get session
	public function index()
	{
		$username = $this->session->username;
		$data['username'] = $username;

		$allFood = $this->ListModel->getmerge($username);
        $data['idpesan'] = $allFood;
		$this->load->view('ApproveResto',$data);	
	
	}

	public function update($idpesan){
	
		$update = $this->ListModel->update($idpesan);
		$data['idpesan'] = $update; 

        redirect('Resto',$data);
	
	}


	public function merge(){
		$detail = $this->ListModel->getMerge();
				
		$this->load->view('ApproveResto',$data);	
	
	}

}