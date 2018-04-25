<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resto extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('ListModel');
		
	}

	// tampil list buku dan get session
	public function index()
	{

		$allFood = $this->ListModel->getmerge();
        $data['idpesan'] = $allFood;
		//$nama = $this->ListModel->getmerge();
		//$data['nama_m'] = $nama;
		$status = $this->session->status;
		$data['status'] = $status;
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

	// public function update() {
	// 	$id=$this->input->post('id');

	// 	$data = array(
	// 	'status' => "Deliv",
	// 	'nama' => $id
	// 	);
	// 	$result = $this->ListModel->updateStatus($id, $data);
	// 	$data = null;

	// 	if(!$result){
	// 		$data['result'] = "Sukses";
	// 	}else{
	// 		$data['result'] = "Gagal";
	// 	}
	// 	redirect('Resto');
	// }

}