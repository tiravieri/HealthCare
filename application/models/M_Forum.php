<?php

	Class M_Forum extends CI_Model{
		
		function getForum(){
			$query = $this->db->get('forum');
			return $query->result_array();
		}
		
		public function getInfoForum2($id)
		{
			$this->db->where('no_forum',$id);
			$query = $this->db->get('forum');
			return $query->result_array();
		}
		
		public function getInfoKomentar($id)
		{
			$this->db->where('no_forum',$id);
			$query = $this->db->get('komenforum');
			return $query->result_array();

		}
		
		public function insertKomen($data,$table)
		{
			return $this->db->insert($table,$data);
		}
		
		public function insert($data,$table){
			return $this->db->insert($table,$data);
		}
		
		public function get_data()
		{
			$data = $this->session->userdata('email');
			$this->db->where('email',$data);
			$query = $this->db->get('member');
			return $query->result();
		}
	}

?>