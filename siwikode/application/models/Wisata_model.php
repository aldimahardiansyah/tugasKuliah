<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {
    public function getAll($table){
        return $this->db->get($table);
    }
    public function getId($table, $id){
        return $this->db->get_Where($table, ['id' => $id])->row();
    }
    // public function joinJenisWisata($id){
    //     $this->db->select('wisata.*', 'jenis_wisata.*');
    //     $this->db->from('wisata');
    //     $this->db->join('jenis_wisata', 'wisata.jenis_wisata_id = jenis_wisata.id', 'inner');
    //     $this->db->where('wisata.id', $id);
    //     return $this->db->get()->row();
    // }
}