<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('mTempat');
        if ($this->session->userdata['logged_in'] == FALSE)
        {
            redirect('login');
        }
	}
	public function index(){
        $result['data'] = $this->mTempat->showData();
        $this->load->view('admin/tempat', $result); 
    }
    public function addTempat(){
        $nama_tempat = $this->input->post('tempat');
        $data = array (
            'nama_tempat' => $nama_tempat
            );
        $this->mTempat->inputData($data, 'tempat');
        redirect('admin/Tempat/index');
    }
    public function editTempat(){
        $id= $this->input->post('id');
        $tempat = $this->input->post('tempat');
        $data = array (
            'nama_tempat' => $tempat
        );
        $where = array(
            'id_tempat' => $id
        );
        $this->mTempat->updateData($where, $data, 'tempat');
        redirect('admin/Tempat/index');
    }
    public function deleteTempat(){
        $id= $this->input->post('id');
        $this->mTempat->deleteData($id);
        redirect('admin/Tempat/index');
    }
}
