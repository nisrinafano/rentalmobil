<?php   
 
	class My_Model extends CI_Model { 
		function getBrg() {  
			$query = $this->db->get('katalog');
			return $query->result_array();  
		} 
		function getOrder() {  
			$query = $this->db->get('order');
			return $query->result_array();  
		} 
		function getContact() {  
			$query = $this->db->get('contact');
			return $query->result_array();  
		} 
		function getDtl($idbrg) {  
			$query = $this->db->get_where('katalog',array('idKendaraan'=>$idbrg));
			return $query->result_array();  
		} 
		function getDtl1($namabrg) {  
			$query = $this->db->get_where('katalog',array('namaKendaraan'=>$namabrg));
			return $query->result_array();  
		} 
		function addContact ($data){
			$this->db->insert('contact', $data);  
		}
		function addOrder($data){
			$this->db->insert('order', $data);  
		}
		public function deleteBrg($item){  
			$this->db->where_in('idKendaraan',$item);
			$this->db->delete('katalog');
		}
		public function updateBrg($tabelname, $data, $where){  
			$upd = $this->db->update($tabelname, $data, $where); 
			return $upd;
		} 
		function adminAdd($data) {  
			$this->db->insert('katalog', $data);  
			/* insert $data ke tabel ?barang? */
		}
		function addAkun ($data){
			$this->db->insert('user', $data);  
			/* insert $akun ke tabel ?akun? */
		}
		function login_authen($username, $password) { 
			$this->db->select('*'); 
			$this->db->where('username', $username); 
			$this->db->where('password', $password); 
			$this->db->from('user'); 
 
			$query = $this->db->get(); 
 
			if ($query->num_rows() == 1) {  
				return true; 
			} else{  
				return false; 
			  } 
		}
		function signUp_authen($username, $password) { 
			$this->db->select('*'); 
			$this->db->where('username', $username); 
			$this->db->where('password', $password); 
			$this->db->from('user'); 
 
			$query = $this->db->get(); 
 
			if ($query->num_rows() == 1) {  
				return true; 
			} else{  
				return false; 
			  } 
		}
		function authen_user($username){  
			$this->db->select('authentication');  
			$this->db->where('username', $username);  
			$this->db->from('user');  
			$query = $this->db->get();  
			return $query->result_array(); 
		} 
		function wrong_password($username, $value){  
			$this->db->set('authentication', $value);  
			$this->db->where("username", $username);  
			$this->db->update('user'); 
		} 
		
	} 
?>