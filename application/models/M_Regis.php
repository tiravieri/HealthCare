<?php

	class M_Regis extends CI_Model {
		public function insert($data,$table){
			return $this->db->insert($table,$data);
		}
	}

?>