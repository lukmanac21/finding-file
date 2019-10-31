<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mUser');
        $this->load->library('session');
    }
    public function loginUser(){
        $this->load->view('loginUser');
    }
	public function index(){
        $status= "Aktif";
        $where =array(
            'status_slider' => $status
        );
        $result['slider'] = $this->mUser->showDataHome('*','tbl_slider',$where);
        $this->load->helper('url');
		$this->load->view('index',$result);
    }
    public function login_action(){
        $nrp = $this->input->post('nrp');
        $password = $this->input->post('password');
        $where = array(
            'nrp_siswa' => $nrp,
            'password_siswa' => md5($password)
        );
        $check = $this->mUser->login_checker("tbl_siswa",$where)->num_rows();
        if($check > 0){
            $data = $check->row_array();
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('username',$data['nama_siswa']);
            redirect(site_url('home'));
        }else{
            echo"nrp atau password salah";
        }
    }
}