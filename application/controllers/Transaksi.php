<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
		public function __construct() {
		parent::__construct();
		$this->load->model('TransaksiModel');
	}
    
    public function pesan($idmakanan){
        
        $kode = $this->input->post('idmakanan');
		$username = $this->session->username;
  
            $data = array(
            'idmakanan'=>$kode,
            'username' => $username,
            'status' => "0"
            );
  
            $result = $this->TransaksiModel->pesan($data);
  
            $data = NULL;
            if($result){
                echo "<script type='text/javascript'>
                alert ('Sending Request !');
                window.location.replace('index');
                </script>";
                redirect('HomeLogin');
            }else{
                echo "<script type='text/javascript'>
                alert ('Sending Failed, silahkan Login dulu !');
                window.location.replace('index');
                </script>";       
                redirect('HomeLogin');
            }
        }
    }
