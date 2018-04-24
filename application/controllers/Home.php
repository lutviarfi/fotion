<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 public function __construct(){
	 	parent::__construct();
		$this->load->model('HomeModel');
 }



	public function index()
	{
		$ambilFood = $this->HomeModel->getFood();
		$data['getFood']=$ambilFood;

	 $this->load->view('Homepage',$data);
	}

	public function pick()
	{

		$kode = $this->input->post('idmakanan');

		$data = array(
		'idmakanan'=>$kode,
		);

		$result = $this->HomeModel->insertpesan($data);

		// $data = NULL;
		// if($result){
    //
		// 	redirect('InsertMakananController');
		// }else{
    //
		// 	$nama = $this->session->nama;
		// 	$data['nama'] = $nama;
		// 	$data['result'] = "Gagal";
		// 	$this->load->view('InsertMakanan',$data);
	}
}
