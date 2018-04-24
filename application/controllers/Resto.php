<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resto extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('RestoModel');
		
	}

	// tampil list buku dan get session
	public function index()
	{

		$allAdmin = $this->AdminModel->getAllUser();
        $data['nama'] = $allAdmin;
        
		$status = $this->session->status;
		$data['status'] = $status;

        $this->load->view('ApproveResto',$data);	
	
	}


	public function update() {
		$id=$this->input->post('id');

		$data = array(
		'status' => "Deliv",
		'nama' => $id
		);
		$result = $this->RestoModel->updateStatus($id, $data);
		$data = null;

		if(!$result){
			$data['result'] = "Sukses";
		}else{
			$data['result'] = "Gagal";
		}
		redirect('Resto');
	}

}