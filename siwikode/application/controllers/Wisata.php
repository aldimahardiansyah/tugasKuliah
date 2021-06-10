<?php
class Wisata extends CI_Controller{
    public function index($jenis){
        switch($jenis){
            case 'rekreasi':
                $data = ["content" => "content/wisata-rekreasi"];
                $this->load->view('_partials/view', $data);
            break;
        }
    }
    public function detailWisata($id){
        $this->load->model('wisata_model');
        $wisata = $this->wisata_model->getId('wisata', $id);

        $data = [ 
            "wisata" => $wisata,
            "content" => 'content/detail_wisata'
        ];
        $this->load->view('_partials/view', $data);
    }
}