<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    function index(){
        $data['content'] = 'content/login';
        $this->load->view('_partials/view', $data);
    }
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $where = [
            'username' => $username,
            'password' => md5($password)
        ];
        $cek = $this->login_model->cek_login('admin', $where);
        if($cek > 0){
            $data_session = [
                'nama' => $username,
                'status' => 'login'
            ];
            $this->session->set_userdata($data_session);
            redirect(base_url('admin'));
        }
        else{
            echo "Username atau password salah!";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}