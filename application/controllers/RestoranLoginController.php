<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestoranLoginController extends CI_Controller {

	public function __construct() {
		parent::__construct();
			//$this->load->model('CRUDModel');
      $this->load->model('RestoranLoginModel');
	}

	//default function when program first running
	public function index()
	{
		$this->load->view('RestoranLogin');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$checkUsername = $this->CRUDModel->readUsername($username,$password);
		if($checkusername = $this->RestoranLoginModel->readUsername($username,$password)){
			//$newdata = array('username'  => $checkUsername->username);
			//set seassion
			//$this->session->set_userdata($newdata);
			redirect('InsertMakananController/index');
		}else if($checkUsername = $this->RestoranLoginModel->readUsername1($username,$password)){
			//$newdata = array('username'  => $checkUsername->nama);
			//set seassion
			//$this->session->set_userdata($newdata);
			redirect('Daftarfood/index');
		}else{
			echo 'gagals';
		}
	}

  /*function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("resto",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("resto"));

		}else{
			echo "Username dan password salah !";
		}
	}*/

	public function logout(){

		$sess_array = $this->session->all_userdata();

		foreach($sess_array as $key =>$val){
		if($key!='username'
		  && $key!='RESERVER_KEY_HERE')$this->session->unset_userdata($key);
		}
		redirect('');
		//redirect to default controller and index function
		//$this->load->view('Login2');
	}
}
