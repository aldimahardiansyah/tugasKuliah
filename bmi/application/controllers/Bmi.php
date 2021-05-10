<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bmi extends CI_Controller
{
    public function index()
    {
        $this->load->model('pasien_model', 'pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->nama = 'Andi Hakim';
        $this->pasien1->gender = 'L';
        $this->pasien1->kode = '011143';
        $this->pasien1->tmp_lahir = 'Bogor';
        $this->pasien1->tgl_lahir = '2002-05-21';

        $this->load->model('pasien_model', 'pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->nama = 'Citra';
        $this->pasien2->gender = 'P';
        $this->pasien2->kode = '011123';
        $this->pasien2->tmp_lahir = 'Depok';
        $this->pasien2->tgl_lahir = '2002-04-12';

        $this->load->model('pasien_model', 'pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->nama = 'Hendra';
        $this->pasien3->gender = 'L';
        $this->pasien3->kode = '011145';
        $this->pasien3->tmp_lahir = 'Aceh';
        $this->pasien3->tgl_lahir = '2001-11-24';

        $this->load->model('bmi_model', 'bmi1');
        $this->bmi1->tinggi = 173;
        $this->bmi1->berat = 59;

        $this->load->model('bmi_model', 'bmi2');
        $this->bmi2->tinggi = 162;
        $this->bmi2->berat = 48;

        $this->load->model('bmi_model', 'bmi3');
        $this->bmi3->tinggi = 168;
        $this->bmi3->berat = 67;

        $this->load->model('Bmi_pasien', 'bmipasien1');
        $this->bmipasien1->id = 1;
        $this->bmipasien1->tanggal = '2021-05-11';
        $this->bmipasien1->pasien = $this->pasien1;
        $this->bmipasien1->bmi = $this->bmi1;

        $this->load->model('Bmi_pasien', 'bmipasien2');
        $this->bmipasien2->id = 2;
        $this->bmipasien2->tanggal = '2021-05-12';
        $this->bmipasien2->pasien = $this->pasien2;
        $this->bmipasien2->bmi = $this->bmi2;

        $this->load->model('Bmi_pasien', 'bmipasien3');
        $this->bmipasien3->id = 3;
        $this->bmipasien3->tanggal = '2021-05-21';
        $this->bmipasien3->pasien = $this->pasien3;
        $this->bmipasien3->bmi = $this->bmi3;

        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        $data['list_bmipasien'] = $list_bmipasien;
        $this->load->view('header.php');
        $this->load->view('bmi/index.php', $data);
    }
}