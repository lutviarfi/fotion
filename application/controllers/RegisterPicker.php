<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterPicker extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('ModelPicker');

	}

	public function index()
	{
	 $this->load->view('RegistrasiPicker');
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
		$password = md5 ($this->input->post('password'));
		$kondisi = $this->input->post('kondisi');
		$alamat = $this->input->post('alamat');

		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $password,
			'kondisi' => $kondisi,
			'alamat' => $alamat,
			'gambar' => $gambar,
			'active' => "Not Yet"
		);

		$result = $this->ModelPicker->InsertPickers($data);

		$data = null;
		if($result){
			Redirect('Login/loginPicker');
		}else{
			$data['result']= "gagal";
			$this->load->view('RegistrasiPicker',$data);
		}
	}
}
}
