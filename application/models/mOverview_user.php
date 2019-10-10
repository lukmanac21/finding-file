<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mOverview_user extends CI_Model{
    function showData(){
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->join('judul_surat', 'judul_surat.id_judul = berkas.id_judul');
        $this->db->join('tempat', 'tempat.id_tempat = berkas.id_tempat');
        $query = $this->db->get();
        return $query->result();
    }
}

?>