<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertMakananController extends CI_Controller {

  public function __construct() {
		parent::__construct();
		$this->load->model('InsertMakananModel');
	}

	public function index()
	{
	 $this->load->view('InsertMakanan');
	}

  public function InsetData(){

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

  		$data = array(
  		'idmakanan'=>$kode,
      'gambar' => $gambar,
  		'nama' => $nama,
  		'expire' => $expire,
  		'halal' => $halal,
  		'available' => $available,
  		'ingredients' => $ingredients,
      'lokasi' => $lokasi
  		);

  		$result = $this->InsertMakananModel->InsertUsername($data);

  		$data = NULL;
  		if($result){

  			redirect('InsertMakananController');
  		}else{

  			$nama = $this->session->nama;
  			$data['nama'] = $nama;
  			$data['result'] = "Gagal";
  			$this->load->view('InsertMakanan',$data);
  		}
  	}
  }

}
