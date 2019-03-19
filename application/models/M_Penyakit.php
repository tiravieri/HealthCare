<?php

	Class M_Penyakit extends CI_Model{
		
		function getPenyakit(){
			$query = $this->db->get('kategori_penyakit');
			return $query->result_array();
		}
		
		public function getInfo($id)
		{
			$this->db->where('no_penyakit',$id);
			$query = $this->db->get('penyakit');
			return $query->result_array();

		}
		
		public function getInfoPenyakit($id)
		{
			$this->db->where('id_penyakit',$id);
			$query = $this->db->get('penyakit');
			return $query->result_array();

		}
		
	}

?>