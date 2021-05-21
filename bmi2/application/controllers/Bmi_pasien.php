<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pasien extends CI_Controller
{
    public function list()
    {
        $this->load->model('Bmi_pasien');
    }
}