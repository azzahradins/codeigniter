<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index(){
        //$this->load->database();
        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        if($this->input->post('keyword')){
            $data['mahasiswa'] = $this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
    
    public function tambah(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Menambahkan Data Mahasiswa';
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->mahasiswa_model->tambahDataMhs();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa', 'refresh');
        }
    }

    public function hapus($id){
        $this->mahasiswa_model->hapusDataMhs($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('mahasiswa', 'refresh');
    }

    public function detail($id){
        $data['title'] = "Detail Mahasiswa";
        $data['mahasiswa'] = $this->mahasiswa_model->getMhsId($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Mengubah Data Mahasiswa';
            $data['mahasiswa'] = $this->mahasiswa_model->getMhsId($id);
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->mahasiswa_model->editDataMhs($id);
            $this->session->set_flashdata('flash-data', 'diubah');
            redirect('mahasiswa', 'refresh');
        }
    }
}
/* End of file mahasiswa.php */
?>