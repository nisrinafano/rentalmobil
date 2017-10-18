<?php

class User extends CI_Controller{
    public function __construct() {  
		parent::__construct();   
		$this->load->model('My_Model');  
	} 
    function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('pass'); 
		$isLogin = $this->My_Model->login_authen($username, $password); 
		
		$i = $this->My_Model->authen_user($username); 
		
		if ($isLogin == true && $i[0]['authentication'] < 3) {
		  	redirect('MyController/loadAdmin');
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
}
?>