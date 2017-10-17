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
	function getDetail($idbrg){
		$data = $this->My_Model->getDtl($idbrg);  
		$this->load->view('web/single1', array('data' => $data)); 
	}
	function getDetail1($namabrg){
		$data = $this->My_Model->getBrg(); 
		$data1 = array('gambarbrg' => [0][$gambarbrg],
						'namabrg' => [0][$namabrg] );
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
	'pesanan' => $this->input->post('pesanan'),
	'tglOrder' => date("Y-m-d H:i:s")
	);
	
	$this->My_Model->addOrder($data);   
	$this->createOrder();
	}

	function createAccount() {   
		$data['err_message']="";
		$this->load->view('signup',$data);
	}
	function createUser(){
	$data = array( 
	'first' => $this->input->post('first'),
	'last' => $this->input->post('last'),  
	'nohp' => $this->input->post('nohp'),
	'email' => $this->input->post('email'),
	'jeniskelamin' => $this->input->post('jeniskelamin'),
    'username' => $this->input->post('username'),  
	'password' => $this->input->post('pass')		
	);
	
	$this->My_Model->addAkun($data);   
	$this->createAccount();
	}

	function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('pass'); 
		$isLogin = $this->My_Model->login_authen($username, $password); 
		
		$i = $this->My_Model->authen_user($username); 
		
		if ($isLogin == true && $i[0]['authentication'] < 3) {
		  	$this->loadAdmin(); 
		} 
		else{  
			if ($i[0]['authentication'] < 3) {  
				$update = $this->My_Model->wrong_password($username, $i[0]['authentication']+1); 
				$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);   
				$this->load->view('login', $data);  
			}  else{   
				$data['err_message'] = "AKUN ANDA TERBLOCK";   
				$this->load->view('login', $data);  
					} 
			}
	}

    function createKatalog() {   
	$data['err_message']="";
	$this->load->view('forms',$data);
	}

    function create() {
		$img=$this->upload->data();
		$gambarbrg=$img['file_name'];
		$gambarbrg_model=$img['file_name'];

		$data = array(
			'idbrg' => $this->input->post('idbrg'),
			'jenisbrg' => $this->input->post('jenisbrg'),
			'namabrg' => $this->input->post('namabrg'),
			'hargabrg' => $this->input->post('hargabrg'),
			'ukuranbrg' => $this->input->post('ukuranbrg'),
			'warnabrg' => $this->input->post('warnabrg'),
			'satuanbrg' => $this->input->post('satuanbrg'),
			'deskripsibrg' => $this->input->post('deskripsibrg'),
			'gambarbrg' => $gambarbrg,
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

   		if ( ! $this->upload->do_upload('gambarbrg')||! $this->upload->do_upload('gambarbrg_model')) {
   			echo $this->upload->display_errors();
    		echo "gagal upload";
   		} else {
    		$this->create();
    		$this->createKatalog();
     	}
	}

	function updateKatalog(){
		$img=$this->upload->data();
		$gambarbrg=$img['file_name'];
		$gambarbrg_model=$img['file_name'];

		$brg = $this->My_Model->getBrg();
		$data= array(
			"idbrg"=> $brg[0]['idbrg'],
			"jenisbrg"=> $brg[0]['jenisbrg'],
			"namabrg"=> $brg[0]['namabrg'],
			"hargabrg"=> $brg[0]['hargabrg'],
			"ukuranbrg"=> $brg[0]['ukuranbrg'],
			"warnabrg"=> $brg[0]['warnabrg'],
			"satuanbrg"=> $brg[0]['satuanbrg'],
			"deskripsibrg"=> $brg[0]['deskripsibrg'],
			'gambarbrg' => $gambarbrg,
			'gambarbrg_model' => $gambarbrg_model
			);
		$this->load->view('edit',$data);
	}
	function doUpdate(){
		$data=array(
			'idbrg'=>$this->input->post('idbrg'),
			'jenisbrg'=>$this->input->post('jenisbrg'),
			'namabrg'=>$this->input->post('namabrg'),
			'hargabrg'=>$this->input->post('hargabrg'),
			'ukuranbrg'=>$this->input->post('ukuranbrg'),
			'warnabrg'=>$this->input->post('warnabrg'),
			'satuanbrg'=>$this->input->post('satuanbrg'),
			'deskripsibrg'=>$this->input->post('deskripsibrg'),
			'gambarbrg' => $gambarbrg,
			'gambarbrg_model' => $gambarbrg_model
			);
		$where = array('idbrg'=>$this->input->post('idbrg'));
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
