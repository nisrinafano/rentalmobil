<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function index()
    {
        
        $this->loginview();
    }

    public function loginview() {
        $this->load->view('login');
    }
    
    public function regview() {
        $this->load->view('register');
    }
       public function __construct() {
        parent::__construct();
                $this->load->model('User_model');
    }

            public function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$isLogin = $this->User_model->login_authen($email,$password);
            if($isLogin == true) {
                $data_session =   array('email' => $email,
                                        'status' => "login"
                                        //'idCustomer' => $idLogin
                                         );
                $this->session->set_userdata($data_session);
                redirect('Welcome');
            } else {
                $this->session->set_flashdata('error', 'password/username yang anda masukkan salah');
                redirect('User/loginview');
            }
    }
    
    public function createUser()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $is_submit = $this->input->post('is_submit');
                if(isset($is_submit) && $is_submit == 1) {
                $data = array(
                    'namaUser' => $this->input->post('nama'),
                    'emailUser' => $this->input->post('email'),
                    'passwordUser' => $this->input->post('password'),
                    'alamatUser' => $this->input->post('alamat'),
                    'pekerjaanUser' => $this->input->post('pekerjaan')
                );
                $this->User_model->addUser($data);
                redirect('User');
                echo 'Selamat anda berhasil melakukan register';
            } else {
                $datauser['datauser'] = $this->User_model->getDataUser();
                $this->load->view('register', $datauser);
            }
    }
}