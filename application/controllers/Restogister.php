<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restogister extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));  
        $this->load->library(array('session', 'form_validation', 'email'));   
        $this->load->database();  
	    $this->load->model('RestoModel');
	}

	public function index()
	{
		$this->load->view('Restogister');
	}

	// public function ShowSession(){

	// 	$username = $this->session->username;

	// 	$data['username'] = $username;

	// 	$this->load->view('ShowSession',$data);
	// }

	public function InsertDaftar(){

		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');

        $saltid   = md5($email);  
        $status   = 0;  
        
        $data = array(
		'username' => $username,
		'email' => $email,
		'phone' => $phone,
        'password' => md5($password),
        'status' => $status
		    );

            //ini awal email regist
            if($this->RestoModel->InsertDaftar($data))  
     {  
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please confirm the mail sent to your email id to complete the registration.</div>');  
            redirect('Restogister');  
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again ...</div>');  
            redirect('Restogister');  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');  
            redirect('Restogister');  
     }  
      }    
   function sendemail($email,$saltid){  
    // configure the email setting  
      $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = '1511503524@student.budiluhur.ac.id';  
      $config['smtp_pass'] = 'ublbisa123'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = base_url()."user/confirmation/".$saltid;  
      $this->email->from('1511503524@student.budiluhur.ac.id', 'CodesQuery');  
    $this->email->to($email);   
    $this->email->subject('Please Verify Your Email Address');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with CodesQuery.</p><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>CodesQuery Team</p></body></html>";  
    $this->email->message($message);  
    return $this->email->send();  
    }  
  //public
    function confirmation($key)  
    {  
      if($this->RestoModel->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');  
        redirect(base_url());  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');  
        redirect(base_url());  
      }  
    }  
// akhir email regist
	// 	$result = $this->CRUDModel->InsertDaftar($data);

	// 	$data = NULL;
	// 	if($result){

	// 		$data['result'] = "Success";
	// 	}else{

	// 		$data['result'] = "Failed";
	// 	}

	// 	$newdata = array(
	// 		'username'  => $checkUsername->username,
	// 		'email'  => $checkUsername->email,
	// 		'phone'  => $checkUsername->phone
	// 	  );
	// 	//set seassion
	// 	$this->session->set_userdata($newdata);
	// 	redirect('CRUD');
    // }

}
