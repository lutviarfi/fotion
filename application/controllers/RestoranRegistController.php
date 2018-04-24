<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestoranRegistController extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('RestoranRegistModel');
	}

  public function index()
  {
    $this->load->view('RegisterResto');
  }

  public function InsertData(){

    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
		$password = $this->input->post('password');
    $point = $this->input->post('point');
		$active = $this->input->post('active');

		$data = array(
		'username'=>$username,
		'email'=>$email,
		'phone'=>$phone,
		'password'=> md5($password),
		'point'=> 0,
		'active'=>"PENDING"
		);

		$result = $this->RestoranRegistModel->InsertUsername($data);

		$data = NULL;
		if($result){

			redirect('RestoranRegistController');
		}else{
			$data['result'] = "Gagal";
			$this->load->view('RegisterRestoran');
		}
	}
}
