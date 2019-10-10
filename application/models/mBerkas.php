<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class mBerkas extends CI_MODEL{
    function showData(){
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->join('judul_surat', 'judul_surat.id_judul = berkas.id_judul');
        $this->db->join('tempat', 'tempat.id_tempat = berkas.id_tempat');
        $query = $this->db->get();
        return $query->result();
    }
    function showJudul(){
        $query = $this->db->query("select * from judul_surat");
        return $query->result();
    }
    function showTempat(){
        $query = $this->db->query("select * from tempat");
        return $query->result();
    }
    function inputData($data, $table){
        $this->db->insert($table,$data);
    }
    function updateData($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function deleteData($id){
        $this->db->where('id_berkas',$id);
        $this->db->delete('berkas');
    }
}

?>