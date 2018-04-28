<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picker extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('ListModel');
		
	}

	// tampil list picker dan get session
	public function index()
	{
		$allFood = $this->ListModel->getmerge($this->session->user);
        $data['idpesan'] = $allFood;
		$user = $this->session->status;
		$data['user'] = $user;
		$this->load->view('ApprovePicker',$data);		
	}

	public function merge(){
		$detail = $this->ListModel->getMerge();			
		$this->load->view('ApprovePicker',$data);	
	
	}
}