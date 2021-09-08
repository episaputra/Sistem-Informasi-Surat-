<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


public function __construct(){

parent::__construct();

	$this->load->model('UserModel');

}

public function index(){

    //tampilUtama
    $this->load->view('LoginView');
}



 	 function login(){

        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_akun=$this->UserModel->cekAkun($username,$password);
 
        if($cek_akun->num_rows() > 0){ //jika login sebagai dosen
 		$this->session->set_userdata('masuk',TRUE);
 		redirect('index.php/Dashboard');
 
    }
    else {
    	   echo "<script>alert('GAGAL LOGIN: Username atau Password Anda Salah!');history.go(-1);</script>";
    }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
       redirect(base_url());
    }
}
