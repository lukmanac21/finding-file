<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mLogin');
        //if($this->session->userdata('status') != "login"){
            //redirect(base_url("login"));
        //}
    }
	public function index(){
        $this->load->helper('url');
        $this->session->userdata('nama_siswa');
		$this->load->view('login');
    }
    public function signup(){
        $this->load->helper('url');
        $this->load->view('signup');
    }
    public function login_action(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email_user' => $email,
            'password_user' => md5($password)
        );
        $check = $this->mLogin->login_checker("user",$where)->num_rows();
        if($check > 0){
            $data_session = array(
                'email_user' => $email,
                'status' => "Login"
            );
            $this->session->set_userdata($data_session);
            redirect(site_url('admin/overview'));
        }else{?>
            <script type=text/javascript>
            alert("Email atau Password salah!.");
            window.location.href='http://localhost/SI-Berkas/index.php/login';
            </script>
        <?php

        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("login"));
    }
}
