<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekreasi extends CI_Controller{
    public function index(){
        $data = ["content" => 'content/wisata-rekreasi'];
        $this->load->view('_partials/view', $data);
    }
}