<?php
class Wisata extends CI_Controller{
    function __construct(){
    parent::__construct();
    //load Helper for Form
    $this->load->helper('url', 'form'); 
    $this->load->library('form_validation');
    }

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

    public function create(){
        $this->load->model('wisata_model');
        $jenis = $this->wisata_model->getAll('jenis_wisata');

        $data = [
            "content" => 'content/registrasi_wisata',
            "jenis" => $jenis
        ];
        $this->load->view('_partials/view', $data);
    }

    public function restore(){
        $this->load->model('wisata_model');
        
        $id = $this->wisata_model->query('SELECT MAX(id) as id FROM wisata')->id+=1;
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $deskripsi = $this->input->post('desk');
        $telp = $this->input->post('hp');
        $email = $this->input->post('email');
        $web = $this->input->post('web');
        $alamat = $this->input->post('alamat');


        // upload gambar
        $config['upload_path'] = './public/assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')){
            $this->load->model('wisata_model');
            $jenis = $this->wisata_model->getAll('jenis_wisata');

            $data = [
                "content" => 'content/registrasi_wisata',
                "jenis" => $jenis,
                'error' => $this->upload->display_errors()
            ];
            $this->load->view('_partials/view', $data);
        }
        else{
            echo $this->upload->data('file_name').'<br>';
            var_dump($id);
            // $this->load->view('index');
            $this->wisata_model->save('gambar', [
                'id' => 'default', 
                'nama' => $this->upload->data()["file_name"], 
                'wisata_id' => $id
                ]);
        }
    }
}