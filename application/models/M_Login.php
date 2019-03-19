<?php

	class M_Login extends CI_Model{
		
		public function check($data){
			$this->db->where('email', $data['email']);
			$this->db->where('password', $data['password']);
			
			$query = $this->db->get('member');
			
			if($query->num_rows()==1) {
				return $query->row(0);
			}else {
				return FALSE;
			}
		}
		
		function login($email,$password){
			  $periksa = $this->db->get_where('member',array('email'=>$email,'password'=> md5($password)));
			  if($periksa->num_rows()>0){
				return 1;
			  }else{
				return 0;
			  }
		}

	}

?>