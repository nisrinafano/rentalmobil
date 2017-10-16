<?php

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function getDataUser() {
        $res = $this->db->get('user');
        return $res->result_array();
    }
    
    function login_authen($email, $password) {
    	$this->db->select('*');
    	$this->db->where('emailUser', $email);
    	$this->db->where('passwordUser', $password);
    	$this->db->from('user');

    	$query = $this->db->get();
    	if($query->num_rows() == 1){
    		return true;
    	} else return false;
    }
    
    public function addUser($data) {
        $this->db->insert('user', $data);
    }
}