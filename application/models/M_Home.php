<?php

	Class M_Home extends CI_Model{
		
		function getArtikel(){
			$query = $this->db->get('artikel');
			return $query->result_array();
		}
		
		public function getInfoArtikel($id)
		{
			$this->db->where('no_artikel',$id);
			$query = $this->db->get('artikel');
			return $query->row_array();
		}
		
	}

?>