<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestoranRegistController extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
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
		$result = $username;
		$encrypted_id = md5($result);

		$this->load->library('email');
		$config = array();
	    $config['charset'] = 'utf-8';
	    $config['useragent'] = 'Codeigniter';
	    $config['protocol']= "smtp";
	    $config['mailtype']= "html";
	    $config['smtp_host']= "ssl://smtp.gmail.com";
	    $config['smtp_port']= "465";
	    $config['smtp_timeout']= "400";
	    $config['smtp_user']= "verifikasi802@gmail.com";
	    $config['smtp_pass']= "admin123@"; 
	    $config['crlf']="\r\n"; 
	    $config['newline']="\r\n"; 
	    $config['wordwrap'] = TRUE;

	    $this->email->initialize($config);
	    //konfigurasi pengiriman
	    $this->email->from($config['smtp_user']);
	    $this->email->to($email);
	    $this->email->subject("Verifikasi Akun");
	    $this->email->message(
	     "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
	      site_url('RestoranRegistController/verification/'.$encrypted_id)
	    );

	    if($this->email->send())
	    {
	       echo "Berhasil melakukan registrasi, silahkan cek email kamu";
	    }else
	    {
	       echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email";
	    }
	  
	    echo "<br><br><a href='".site_url("Home")."'>Kembali ke Home</a>";
	}

	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('RestoranRegistModel');
		$this->RestoranRegistModel->changeActiveState($key);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url("Home")."'>Kembali ke Home</a>";
	}

}
