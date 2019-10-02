<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model{
    
    public function getSiswa(){
        $query = $this->db->get('siswa');
        return $query->result_array();
    }

    public function tambahDataSw(){
        $data= array(
            "id" => null,
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "alamat" => $this->input->post('alamat', true)
        );
        $this->db->insert('siswa', $data);
    }

    public function getSiswaId($id){
        $query = $this->db->get_where('siswa', ['id'=> $id]);
        return $query->row_array();
    }

    public function hapusSiswaId($id){
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }

    public function editSiswaId($id){
        $data=array(
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "alamat" => $this->input->post('alamat', true)
        );
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);   
    }

    public function cariDataSiswa(){
        $keyword = $this->input->post('keyword');
        $this->db->like('Nama', $keyword);
        $this->db->or_like('Alamat', $keyword);
        $this->db->or_like('Nim', $keyword);
        return($this->db->get('siswa')->result_array());
    }

}
/* End of file mahasiswa_models.php */
?>