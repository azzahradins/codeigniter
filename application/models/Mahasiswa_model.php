<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{
    
    public function getAllMahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function tambahDataMhs(){
        $data= array(
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        );
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMhs($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function getMhsId($id){
        return $this->db->get_where('mahasiswa', ['id'=> $id])->row_array();
    }

    public function editDataMhs($id){
        $data= array(
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        );
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return($this->db->get('mahasiswa')->result_array());
    }
}

/* End of file mahasiswa_models.php */

?>