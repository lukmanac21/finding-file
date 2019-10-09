<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class mJudul extends CI_MODEL{
    function showData(){
        $query = $this->db->query("select * from judul_surat");
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
        $this->db->where('id_judul',$id);
        $this->db->delete('judul_surat');
    }
}

?>