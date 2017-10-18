<?php   
 
class MyController extends CI_Controller {    
	public function __construct() {  
		parent::__construct();   
		$this->load->model('My_Model');  
	} 
	function index() {   
		$data = $this->My_Model->getBrg();  
		$this->load->view('web/index', array('data' => $data)); 
	} 
	function index1() {   
		$data = $this->My_Model->getBrg();  
		$this->load->view('web/index', array('data' => $data)); 
	} 
	function admin() {   
		$this->load->view("login");
	} 
	function prod() {   
		$data = $this->My_Model->getBrg();  
	$this->load->view('web/products', array('data' => $data)); 
	}
	function contact() {   
		$data = $this->My_Model->getBrg();  
		$this->load->view('web/contact', array('data' => $data)); 
	}
	function adminin() {   
		$data = $this->My_Model->getBrg();  
		$this->load->view('login', array('data' => $data)); 
	}
	function order() {   
		$data = $this->My_Model->getBrg();  
		$this->load->view('web/order', array('data' => $data)); 
	}
	function adminOrder() {
		$data = $this->My_Model->getOrder();       
		$this->load->view('tabelorder', array('data' => $data)); 
	}
	function loadAdmin() {
		$data = $this->My_Model->getBrg();      
		$this->load->view('tables', array('data' => $data)); 
	}
	function adminContact() {
		$data = $this->My_Model->getContact();       
		$this->load->view('tabelcontact', array('data' => $data)); 
	}
	function readKatalog(){
		$data = $this->My_Model->getBrg();  
		$this->load->view('tables', array('data' => $data)); 
	} 
	function getDetail($idKendaraan){
		$data = $this->My_Model->getDtl($idKendaraan);  
		$this->load->view('web/single1', array('data' => $data)); 
	}
	function getDetail1($namaKendaraan){
		$data = $this->My_Model->getBrg(); 
		$data1 = array('fotoKendaraan' => $data[0][$fotoKendaraan],
						'namaKendaraan' => $data[0][$namaKendaraan] );
		$this->load->view('web/single1', array('data1' => $data1)); 
	}

	function createContact() {   
		$data['err_message']="";
		$this->load->view('web/contact',$data);
	}
	function contactUs(){
	$data = array( 
	'nama' => $this->input->post('nama'),
	'email' => $this->input->post('email'),  
	'judul' => $this->input->post('judul'),
	'isi' => $this->input->post('isi'),
	'tglContact' => date("Y-m-d H:i:s")		
	);
	
	$this->My_Model->addContact($data);   
	$this->createContact();
	}

	function createOrder() {   
		$data['err_message']="";
		$this->load->view('web/order',$data);
	}
	function orderr(){
	$data = array( 
	'namalengkap' => $this->input->post('namalengkap'),
	'email' => $this->input->post('email'),  
	'alamat' => $this->input->post('alamat'),
	'nohp' => $this->input->post('nohp'),
	'noktp' => $this->input->post('noktp'),
	'namakendaraan' => $this->input->post('namakendaraan'),
	'jumlahkendaraan' => $this->input->post('jumlahkendaraan'),
	'durasipeminjaman' => $this->input->post('durasipeminjaman')
	);
	
	$this->My_Model->addOrder($data);   
	$this->createOrder();
	}

	function updateKatalog(){
		$img=$this->upload->data();
		$fotoKendaraan=$img['file_name'];
		$gambarbrg_model=$img['file_name'];

		$brg = $this->My_Model->getBrg();
		$data= array(
			"idKendaraan"=> $brg[0]['idKendaraan'],
			"merkKendaraan"=> $brg[0]['merkKendaraan'],
			"namaKendaraan"=> $brg[0]['namaKendaraan'],
			"hargaSewa"=> $brg[0]['hargaSewa'],
			
			"nopolKendaraan"=> $brg[0]['nopolKendaraan'],
			"idPemilik"=> $brg[0]['idPemilik'],
			
			'fotoKendaraan' => $fotoKendaraan,
			'gambarbrg_model' => $gambarbrg_model
			);
		$this->load->view('edit',$data);
	}
	function doUpdate(){
		$data=array(
			'idKendaraan'=>$this->input->post('idKendaraan'),
			'merkKendaraan'=>$this->input->post('merkKendaraan'),
			'namaKendaraan'=>$this->input->post('namaKendaraan'),
			'hargaSewa'=>$this->input->post('hargaSewa'),
			
			'nopolKendaraan'=>$this->input->post('nopolKendaraan'),
			'idPemilik'=>$this->input->post('idPemilik'),
			
			'fotoKendaraan' => $fotoKendaraan,
			'gambarbrg_model' => $gambarbrg_model
			);
		$where = array('idKendaraan'=>$this->input->post('idKendaraan'));
		$upd = $this->My_Model->updateBrg('katalog',$data,$where);
		if($upd>1){
			$data = $this->My_Model->getBrg();
			redirect("adminUpdate");
		}
	}

	public function deleteKatalog(){  
		$item = $this ->input->post('item');
		$this->My_Model->deleteBrg($item);
	}
	function dashboard(){  
		$this->load->view('indexAdmin'); 
	}
	function signup(){
		$this->load->view('signup'); 
	}
} 
?>
