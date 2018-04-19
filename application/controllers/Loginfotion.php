<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginfotion extends CI_Controller {
	public function __construct() {
		parent::__construct();
			$this->load->model('CRUDModel');
	}

	public function index()
	{
		$this->load->view('restogister');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($checkUsername=$this->CRUDModelfotion->readUser($username,$password)){
			$this->load->view('ListBuku');
		}else if($checkUsername=$this->CRUDModelfotion->readUser1($username,$password)){
			$this->load->view('ListRequest');
		}else if($checkUsername=$this->CRUDModelfotion->readUser2($username,$password)){
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
}
