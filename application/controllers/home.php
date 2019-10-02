<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class home extends CI_Controller {
 
    public function index($name = 'Azzahra Dinda S')
    {
        //echo "Selamat Datang di Halaman Home";
        $data['title'] = 'Home';
        $data['name']= $name;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');

    }

    public function belajar($tugas = "Saya belajar CodeIgniter"){
        $data['title'] = 'Home';
        $data['tugas']= $tugas;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }

    public function belajar_kedua($tugas = "Saya belajar pemograman framework"){
        $data['title'] = 'Framework';
        $data['tugas']= $tugas;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }
 
 }
 
 /* End of file Controllername.php */
 
?>