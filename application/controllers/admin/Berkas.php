<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->database();
		$this->load->model('mBerkas');
	}
	public function index(){
        $result['data'] = $this->mBerkas->showData();
        $result['judul_surat'] = $this->mBerkas->showJudul();
        $result['tempat'] = $this->mBerkas->showTempat();
        $this->load->view('admin/berkas', $result); 
    }
    public function addBerkas(){
        $no_urut = $this->input->post('no_urut');
        $tgl_surat = $this->input->post('tgl_surat');
        $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
        $id_judul = $this->input->post('id_judul');
        $id_tempat = $this->input->post('id_tempat');
        $nama_pihaksatu = $this->input->post('nama_pihaksatu');
        $nama_pihakdua = $this->input->post('nama_pihakdua');
        $data = array (
            'no_urut' => $no_urut,
            'tgl_surat' => $tgl_surat,
            'tgl_pendaftaran' => $tgl_pendaftaran,
            'id_judul' => $id_judul,
            'id_tempat' => $id_tempat,
            'nama_pihaksatu' => $nama_pihaksatu,
            'nama_pihakdua' => $nama_pihakdua,
            );
        $this->mBerkas->inputData($data, 'berkas');
        redirect('admin/Berkas/index');
    }
}
