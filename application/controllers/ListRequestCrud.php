<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListRequestCrud extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('ListRequestModel');
	}

	/*public function index()
	{
		$this->load->view('restogister');
	}*/

  public function listrequest()
	{
		$this->load->view('ListRequest');
	}

	public function index()
	{
		$allUsername = $this->ListRequestModel->getAllRequest();
		//$data['namarestaurant'] = $namarestaurant;
		//$data['namamakanan'] = $namamakanan;
	//	$data['halal'] = $halal;
//		$data['status'] = $status;

		$data['datauser'] = $allUsername;
		$this->load->view('ListRequest',$data);
	}


}
