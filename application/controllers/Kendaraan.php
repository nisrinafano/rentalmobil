<?php

class Kendaraan extends CI_Controller{
    public function __construct() {  
		parent::__construct();   
		$this->load->model('My_Model');  
	} 
    
    function createKatalog() {   
	$data['err_message']="";
	$this->load->view('forms',$data);
	}

    function create() {
		$img=$this->upload->data();
		$fotoKendaraan=$img['file_name'];
		$gambarbrg_model=$img['file_name'];

		$data = array(
			'idKendaraan' => $this->input->post('idKendaraan'),
			'merkKendaraan' => $this->input->post('merkKendaraan'),
			'namaKendaraan' => $this->input->post('namaKendaraan'),
			'hargaSewa' => $this->input->post('hargaSewa'),
			
			'nopolKendaraan' => $this->input->post('nopolKendaraan'),
			'idPemilik' => $this->input->post('idPemilik'),
			
			'fotoKendaraan' => $fotoKendaraan,
			'gambarbrg_model' => $gambarbrg_model
		);
		$this->My_Model->adminAdd($data);
	}
	function do_upload(){
  	$this->load->library('upload');
   	$config['upload_path'] = './upload/';
   	$config['allowed_types'] = 'gif|jpg|png';
	   // $config['max_size'] = 100000;
	   // $config['max_width'] = 10000;
	   // $config['max_height'] = 10000;

  		$this->upload->initialize($config);

   		if ( ! $this->upload->do_upload('fotoKendaraan')||! $this->upload->do_upload('gambarbrg_model')) {
   			echo $this->upload->display_errors();
    		echo "gagal upload";
   		} else {
    		$this->create();
    		$this->createKatalog();
     	}
	}
}
?>