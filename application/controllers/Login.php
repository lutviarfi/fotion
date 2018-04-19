<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
			$this->load->model('CRUDModel');
	}


	public function index()
	{
		$this->load->view('restogister');
	}

	public function authnodatabase(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$newdata = array('username'  => $username);

		$this->session->set_userdata($newdata);
		$data['login'] = $username;

		//kondsi if
		if($username=="admin"){

			$this->load->view('Result',$data);

		}else{

			$this->load->view('error');
		}
	}


	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($checkUsername=$this->CRUDModel->readUser($username,$password)){
			$this->load->view('ListBuku');
		}else if($checkUsername=$this->CRUDModel->readUser1($username,$password)){
			$this->load->view('ListBuku');
		}else if($checkUsername=$this->CRUDModel->readUser2($username,$password)){
			$this->load->view('ListBuku');
		}else{
			$this->load->view('Login');
		}
	}

	public function logout(){

		$this->load->view('Login2');


	}

	public function ShowSession(){

		$username = $this->session->username;

		$data['username'] = $username;

		$this->load->view('ShowSession',$data);
	}


	public function InsertDaftar(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$authuser = $this->input->post('auth');

		$data = array(
		'username' =>$username,
		'password'=> md5($password),
		'nama'=>$nama,
		'auth' => $authuser

		);

		$result = $this->CRUDModel->InsertDaftar($data);

		$data = NULL;
		if($result){

			$data['result'] = "Sukses";
		}else{

			$data['result'] = "Gagal";
		}

		$newdata = array(
			'username'  => $checkUsername->username,
			'name'  => $checkUsername->nama,
			'auth'  => $checkUsername->auth
		  );
		//set seassion
		$this->session->set_userdata($newdata);
		//$this->load->view('Insert',$data);
		redirect('CRUD');
	}

}
