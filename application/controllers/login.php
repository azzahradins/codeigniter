<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }
    
    
    public function index()
    {
        if($this->session->userdata('level')){
            if($this->session->userdata('level')=="admin"){
                redirect('mahasiswa','refresh');
            }else{
                redirect('siswa','refresh');
            }
        }else{
            $data['title']='Login';
            $data['pesan']='Masukan username dan password';
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
        }
        
    }
    
    public function proses_login(){
        $username = htmlspecialchars($this->input->post('uname1'));
        $password = htmlspecialchars($this->input->post('pass1'));

        $cekLogin = $this->login_model->login($username, $password);
        if($cekLogin){
            foreach($cekLogin as $row);
            $this->session->set_userdata('user', $row["username"]);
            $this->session->set_userdata('level', $row["level"]);

            if($this->session->userdata('level') == 'admin'){
                redirect('mahasiswa/index', 'refresh');
            }else if($this->session->userdata('level') == 'user'){
                redirect('siswa/index', 'refresh');
            }
        }else{
            $this->session->set_flashdata('login', 'failed');
            redirect('login','refresh');
        }
    }

    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('level');
        redirect('login','refresh');
    }

}

/* End of file login.php */

?>