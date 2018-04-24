<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PickerRegisters extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('ModelPicker');

	}

	public function index()
	{
	 $this->load->view('PickerRegister');
		}

	public function InsertPicker(){

		$this->load->helper(array('form', 'url'));
		      $nama_file = md5(uniqid(rand(), true));
		      $this->load->library('upload');
		  		$config = [
		  			'upload_path' => './assets/img/',
		  			'allowed_types' => 'gif|jpg|png|jpeg|bmp',
		        'file_name' => $nama_file
		  		];

		      $this->upload->initialize($config);
		  		  if(!$this->upload->do_upload('gambar')){
		  		      $gambar="";
		  		  }else{
		  		$gambar=$this->upload->file_name;

		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$kondisi = $this->input->post('kondisi');
		$alamat = $this->input->post('alamat');

		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $password,
			'kondisi' => $kondisi,
			'alamat' => $alamat,
			'photo' => $gambar,
			'active' => "pending"
		);

		$result = $this->ModelPicker->InsertPickers($data);

		$data = null;
		if($result){
			Redirect('PickerRegisters');
		}else{
			$data['result']= "gagal";
			$this->load->view('PickerRegister',$data);
		}
	}
}
}
