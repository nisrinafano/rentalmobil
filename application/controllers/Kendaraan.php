<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kendaraan_model');
    }
    
    public function createUser()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $is_submit = $this->input->post('is_submit');
        if(isset($is_submit) && $is_submit == 1) {
                $data = array(
                    'namaKendaraan' => $this->input->post('nama'),
                    'merkKendaraan' => $this->input->post('merk'),
                    'nopolKendaraan' => $this->input->post('nopol'),
                    'hargaSewa' => $this->input->post('harga'),
                    'statusKendaraan' => 'available'
                );
                $this->User_model->addKendaraan($data);
                redirect('Kendaraan');
            } else {
                $datakendaraan['datakendaraan'] = $this->Kendaraan_model->getDataUser();
                $this->load->view('uploadkendaraan', $datakendaraan);
            }
    }
}
?>