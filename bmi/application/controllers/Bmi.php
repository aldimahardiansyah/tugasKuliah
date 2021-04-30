<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bmi extends CI_Controller
{
    public function index()
    {
        $this->load->model('pasien_model');
    }
}