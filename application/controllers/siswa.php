<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        
    }
    
    public function index(){
        //$this->load->database();
        $data['title'] = 'List Siswa';
        $data['siswa'] = $this->siswa_model->getSiswa();
        if($this->input->post('keyword')){
            $data['siswa'] = $this->siswa_model->cariDataSiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id){
        $data['title'] = 'Detail Data Mahasiswa';
        $data['siswa'] = $this->siswa_model->getSiswaId($id);
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Form Menambahkan Data Mahasiswa';
            $this->load->view('template/header', $data);
            $this->load->view('siswa/tambah', $data);
            $this->load->view('template/footer');
        }
        else
        {   
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            $this->siswa_model->tambahDataSw();
            redirect('siswa','refresh');
        }
    }

    public function hapus($id){
        $this->siswa_model->hapusSiswaId($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('siswa', 'refresh');
    }

    public function edit($id){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Form Menambahkan Data Mahasiswa';
            $data['siswa'] = $this->siswa_model->getSiswaId($id);
            $this->load->view('template/header', $data);
            $this->load->view('siswa/edit', $data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->session->set_flashdata('flash-data', 'diubah');
            $this->siswa_model->editSiswaId($id);
            redirect('siswa', 'refresh');
        }
    }
    
}
/* End of file mahasiswa.php */
?>