<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListRequest extends CI_Controller {

	public function __construct() {

	}

	public function index()
	{
		$this->load->view('restogister');
	}

  public function listrequest()
	{
		$this->load->view('ListRequest');
	}

}
