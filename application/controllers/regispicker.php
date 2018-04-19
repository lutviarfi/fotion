<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regispicker extends CI_Controller {

	 
	public function __construct() {
		parent::__construct();	
			
	}
	
	
	public function index()
	{
		$this->load->view('regispicker');
    }
    
   //tambah data buku
	public function InsertPicker(){

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lokasi = $this->input->post('lokasi');
		$kondisi = $this->input->post('kondisi');
		$password = $this->input->post('password');

		$data = array(
		'nama' =>$nama,
		'email'=> $email,
		'lokasi'=>$lokasi,
		'kondisi' =>$kondisi,
		'password' => md5($password)
		);

		$result = $this->CRUDModel->InsertPicker($data);
		$data = NULL;
		if($result){

			$data['result'] = "Sukses";
		}else{

			$data['result'] = "Gagal";
		}

		redirect('CRUD');
	} 
	
}
