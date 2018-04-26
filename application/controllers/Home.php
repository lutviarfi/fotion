<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 public function __construct(){
	 	parent::__construct();
		$this->load->model('HomeModel');
 }

	public function index()
	{
		$username = $this->session->username;
		$data['username']=$username;
		$ambilFood = $this->HomeModel->getFood();
		$data['getFood']=$ambilFood;

	 	$this->load->view('Homepage',$data);
	}
}
