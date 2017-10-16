<?php

class Kendaraan_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function addKendaraan($data) {
        $this->db->insert('kendaraan', $data);
    }
    
    public function getDataKendaraan() {
        $res = $this->db->get('kendaraan');
        return $res->result_array();
    }
}
?>