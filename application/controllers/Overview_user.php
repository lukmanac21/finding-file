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
        $result['data'] = $this->mBerkas->showData();
        $this->load->helper('url');
        $this->load->view('overview_user',$result);
    }
    
}
