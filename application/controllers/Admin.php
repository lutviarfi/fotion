<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct() {
		parent::__construct();
		$this->load->model('AdminModel');
	}

	// tampil list buku dan get session
	public function index()
	{

		$allAdmin = $this->AdminModel->getAllPicker('picker');
        $data['picker'] = $allAdmin;
        
        $this->load->view('ApproveAdmin',$data);	
	
	}

	public function update($username){
	
		$update = $this->AdminModel->update($username);
		$data['username'] = $update; 

        redirect('Admin',$data);
	
	}


	public function merge(){
		$detail = $this->ListModel->getMerge();
				

		$this->load->view('ApproveResto',$data);	
	
	}

	public function getAllResto(){
	
		$point = $this->AdminModel->getAllResto('resto');
		$data['resto'] = $point; 
        $this->load->view('PointResto',$data);
	
	}
}
