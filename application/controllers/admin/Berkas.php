<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->database();
        $this->load->model('mBerkas');

        if ($this->session->userdata['logged_in'] == FALSE)
        {
            redirect('login');
        }

	}
	public function index(){
        $filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');
        if (isset($filter)) {
            $result['data'] = $this->mBerkas->getBerkasWhere($field);
        } else {
            $result['data'] = $this->mBerkas->showData();
        }
        //$result['data'] = $this->mBerkas->showData();
        $result['judul_surat'] = $this->mBerkas->showJudul();
        $result['tempat'] = $this->mBerkas->showTempat();
        $result['kategori'] = $this->mBerkas->showKategori();
        $result['bulan'] = $this->mBerkas->showBulan();

        $this->load->view('admin/berkas', $result); 
    }
    public function addBerkas(){
        $config['upload_path']          = "assets/img/";
        $config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500000;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
        $this->load->library('upload', $config);

        $no_urut = $this->input->post('no_urut');
        $tgl_surat = $this->input->post('tgl_surat');
        $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
        $id_kategori = $this->input->post('id_kategori');
        $id_judul = $this->input->post('id_judul');
        $id_tempat = $this->input->post('id_tempat');
        $nama_pihaksatu = $this->input->post('nama_pihaksatu');
        $nama_pihakdua = $this->input->post('nama_pihakdua');

        if ( ! $this->upload->do_upload('file_name')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/berkas', $error);
		}else{
            $inputdata = $this->upload->data();
			$name = $inputdata['file_name'];
            $inputdata = array (
                'no_urut' => $no_urut,
                'tgl_surat' => $tgl_surat,
                'tgl_pendaftaran' => $tgl_pendaftaran,
                'id_judul' => $id_judul,
                'id_kategori' => $id_kategori,
                'id_tempat' => $id_tempat,
                'nama_pihaksatu' => $nama_pihaksatu,
                'nama_pihakdua' => $nama_pihakdua,
                'gambar_berkas' => $name
                );
                $this->mBerkas->inputData($inputdata, 'berkas');
                redirect('admin/Berkas/index');
            }
    }
}
