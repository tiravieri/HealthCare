<?php
	class M_Profile extends CI_Model{
		
		public function get_data()
		{
			$data = $this->session->userdata('email');
			$this->db->where('email',$data);
			$query = $this->db->get('member');
			return $query->result();
		}
		
		function updateMember($data){  
  		$tabel = 'member'; 
		  $lolo = array (
				"email"=>$data['email'],
				"nama"=>$data['nama'],
				"password"=>$data['password'],
			);  
			$this->db->where('email', $data['email']);
			$update = $this->db->update($tabel,$lolo); 
			if ($update){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		public function deleteMember($id)
		{
			$this->db->where('email',$id);
			$this->db->delete('member');
		}
	}
?>