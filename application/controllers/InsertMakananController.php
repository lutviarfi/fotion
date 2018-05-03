<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertMakananController extends CI_Controller {

  public function __construct() {
		parent::__construct();
		$this->load->model('InsertMakananModel');
		$this->load->model('AdminModel');
	}

	public function index()
	{
			$username = $this->session->username;
  		$data['username'] = $username;

			$point = $this->AdminModel->getPointResto($username);
			$data['resto'] = $point;

	 $this->load->view('InsertMakanan',$data);
	}

  public function InsetData(){

		$username = $this->session->username;

      $this->load->helper(array('form', 'url'));
      $nama_file = md5(uniqid(rand(), true));
      $this->load->library('upload');
  		$config = [
  			'upload_path' => './assets/img/',
  			'allowed_types' => 'gif|jpg|png|jpeg|bmp',
        'file_name' => $nama_file
  		];

      $this->upload->initialize($config);
  		  if(!$this->upload->do_upload('gambar')){
  		      $gambar="";
  		  }else{
  		$gambar=$this->upload->file_name;
      $kode = $this->input->post('idmakanan');
  		$nama = $this->input->post('nama');
  		$expire = $this->input->post('expire');
  		$halal = $this->input->post('halal');
  		$available = $this->input->post('available');
  		$ingredients = $this->input->post('ingredients');
			$lokasi = $this->input->post('lokasi');
			$point = $this->input->post('point');

  		$data = array(
  		'idmakanan'=>$kode,
      'gambar' => $gambar,
  		'nama' => $nama,
  		'expire' => $expire,
  		'halal' => $halal,
  		'available' => $available,
			'ingredients' => $ingredients,
			'username'=>$this->session->username,
			'lokasi' => $lokasi,
			);

			$result = $this->InsertMakananModel->InsertUsername($data);

			//$this->AdminModel->getPointResto($username);

			//$data['point']=$point;

			//$result2 = $this->AdminModel->updatePoint($username);

			$data = NULL;
  		if($result == null){
			 	redirect('HomeLogin');
  		}else{

  			$username = $this->session->username;
  			$data['username'] = $username;
  			$data['result'] = "Gagal";
  			$this->load->view('InsertMakanan',$data);
  		}
  	}
	}

}
