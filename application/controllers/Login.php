<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('LoginModel');
	}

	public function index(){
		$this->load->view('Login');
	}

	public function authResto()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$checkUsername = $this->LoginModel->readResto($username,$password);
		
		if($checkUsername==NULL){
			echo "<script type='text/javascript'>
               alert ('Maaf Username Dan Password Anda Salah !');
               window.location.replace('index');
      			</script>";
		}else{
			$newdata = array(
				'username'  => $checkUsername->username);
			//set session
			$this->session->set_userdata($newdata);
			redirect('HomeLogin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

	public function loginPicker(){
		$this->load->view('LoginPicker');
	}

	public function authPicker()
	{
		$username = $this->input->post('username');
		$password = md5 ($this->input->post('password'));

		$checkUsername = $this->LoginModel->readPicker($username,$password);
		
		if($checkUsername==NULL){
			echo "<script type='text/javascript'>
               alert ('Maaf Username Dan Password Anda Salah !');
               window.location.replace('index');
      			</script>";
		}else{
			$newdata = array(
				'user'  => $checkUsername->username
			);
			//set session
			$this->session->set_userdata($newdata);
			redirect('HomeLogin');
		}
	}
}