<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('CRUDModel');
	}

	// //logout
	// public function logout() {

	// 	$sess_array = $this->session->all_userdata();
		
	// 	foreach($sess_array as $key =>$val){
	// 	if($key!='username'
	// 	  && $key!='name'    
	// 	  && $key!='RESERVER_KEY_HERE')$this->session->unset_userdata($key);
	// 	}
		
	// 	$this->load->view('Login2');

	// }

	// tampil list buku dan get session
	public function index()
	{
		if($this->session->name==NULL){
			redirect('');	
		}

		$allBuku = $this->CRUDModel->getAllBuku();
		$data['buku'] = $allBuku;

		$nama = $this->session->name;
		$data['nama'] = $nama;

		$auth = $this->session->auth;
		$data['auth'] = $auth;

		$this->load->view('ListBuku',$data);	
	}

	public function FormDonation(){
		$this->load->view('DonationFood');
	}
	// public function Detil($id) {
	// 	$data['buku'] =  $this->CRUDModel->get_id($id)->result();

	// 	$nama = $this->session->name;
	// 	$data['nama'] = $nama;

	// 	$auth = $this->session->auth;
	// 	$data['auth'] = $auth;
		
	// 	$this->load->view('Detil',$data);
	// }

	// public function edit($id) {
	// 	$data['buku'] =  $this->CRUDModel->get_id($id)->result();

	// 	$nama = $this->session->name;
	// 	$data['nama'] = $nama;

	// 	$auth = $this->session->auth;
	// 	$data['auth'] = $auth;
		
	// 	$this->load->view('Update',$data);
	// }

	// public function hapus($id) {
	// 	$this->CRUDModel->deleteBuku($id);
	// 	redirect('CRUD');
	// }

	// public function update($id) {
	// 	$judul = $this->input->post('judul');
	// 	$penulis = $this->input->post('penulis');
	// 	$penerbit = $this->input->post('penerbit');
	// 	$tglterbit = $this->input->post('tglterbit');
	// 	$sinopsis = $this->input->post('sinopsis');

	// 	$data = array(
	// 	'judul' =>$judul,
	// 	'penulis'=> $penulis,
	// 	'penerbit'=>$penerbit,
	// 	'tglterbit' =>$tglterbit,
	// 	'sinopsis' => $sinopsis
	// 	);

	// 	$where = array(
	// 		'idbuku' => $id
	// 	);

	// 	$result = $this->CRUDModel->updateBuku($data,$where,'buku');
	// 	$data = null;

	// 	if(!$result){
	// 		$data['result'] = "Sukses";
	// 	}else{
	// 		$data['result'] = "Gagal";
	// 	}
	// 	redirect('CRUD');
	// }

	// // tampil form input
	// public function input(){

	// 	$nama = $this->session->name;
	// 	$data['nama'] = $nama;

	// 	$auth = $this->session->auth;
	// 	$data['auth'] = $auth;

	// 	$this->load->view('InsertBuku',$data);
	// }

	//add donation food
	public function InsertFood(){

		$this->load->helper(array('form', 'url'));
		$nama_file = md5(uniquid(rand(), true));
		$this->load->library('upload');
		$config = [
				'upload_path' => './assets/img/',
				'allowed_types' => 'git|jpg|png|jpeg|bmp',
				'file_name' => $nama_file
		];

		$this->upload->initialize($config);
			if(!$this->upload->do_upload('photo')){
				$photo="";
			}else{
				$photo=$this->upload->file_name;
				$foodname = $this->input->post('namefood');
				$halal = $this->input->post('halalorno');
				$expiry = $this->input->post('expiry');
				$status = $this->input->post('status');
				$ingredient = $this->input->post('ingredients');
			}

		$data = array(
		'judul' => $judul,
		'penulis'=> $penulis,
		'penerbit'=> $penerbit,
		'tglterbit' => $tglterbit,
		'gambar' => $photo,
		'sinopsis' => $sinopsis
		);

		$result = $this->CRUDModel->InsertFood($data);
		
		if($result){
			
			$this->session->set_flashdata('Success','Send Success');
			redirect('');
		}else{
			$this->session->set_flashdata('Failed','Send Failed');
			redirect('');
		}

		redirect('CRUD');
	}
	
}
