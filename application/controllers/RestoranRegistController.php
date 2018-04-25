<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestoranRegistController extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('RestoranRegistModel');
	}

  public function InsetData(){
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$data = array(
		'username'=$username,
		'email'=$email,
		'phone'=$phone,
		'password'=> md5($password),
		'point'=$point,
		'username'=$username,
		'active'=$active
		);

		$result = $this->RestoranRegisterModel->InsertUsername($data);

		$data = NULL;
		if($result){

			redirect('');
		}else{

			$nama = $this->session->nama;
			$data['nama'] = $nama;
			$data['result'] = "Gagal";
			$this->load->view('RegisterRestoran',$data);
		}
	}
