<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeLogin extends CI_Controller {

 public function __construct(){
	 	parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('HomeModel');
 }



	public function index()
	{
		$username = $this->session->username;
		if($username == null)
		{
			redirect('Home');
		} else {
            $data['username'] = $username;

            $ambilFood = $this->HomeModel->getFood();
	    	$data['getFood']=$ambilFood;

			$this->load->view('HomePage',$data);
		}	
	}
}
