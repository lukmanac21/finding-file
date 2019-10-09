<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judul extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->database();
		$this->load->model('mJudul');
	}
	public function index(){
        $result['data'] = $this->mJudul->showData();
        $this->load->view('admin/judul', $result); 
    }
    public function addJudul(){
        $nama_judul = $this->input->post('judul');
        $data = array (
            'nama_judul' => $nama_judul
            );
        $this->mJudul->inputData($data, 'judul_surat');
        redirect('admin/Judul/index');
    }
    public function editJudul(){
        $id= $this->input->post('id');
        $judul = $this->input->post('judul');
        $data = array (
            'nama_judul' => $judul
        );
        $where = array(
            'id_judul' => $id
        );
        $this->mJudul->updateData($where, $data, 'judul_surat');
        redirect('admin/Judul/index');
    }
    public function deleteJudul(){
        $id= $this->input->post('id');
        $this->mJudul->deleteData($id);
        redirect('admin/Judul/index');
    }
}
