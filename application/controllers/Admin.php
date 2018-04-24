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

	public function getPicker()
	{

		$allPicker = $this->AdminModel->getAllPicker();
		$data['picker']= $allPicker;

		$username = $this->session->status;
		$data['username'] = $username;

        $this->load->view('ApproveAdmin',$data);	
	
	}
}
