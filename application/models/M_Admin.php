<?php 
	Class M_admin extends CI_Model{
		public function check_user($data){
            $this->db->where('username', $data['username']);
            $this->db->where('password', $data['password']);
 
            $query = $this->db->get('admin');

            if($query->num_rows()== 1) {
                return $query->row(0);
            } else {
                return FALSE;
            }
		}
		
		function updateArtikel($data){  
  		$tabel = 'artikel'; 
		  $lolo = array (
				"no_artikel"=>$data['nomor'],
				"judul"=>$data['judul'],
				"isi"=>$data['isi'],
			);  
			$this->db->where('no_artikel', $data['nomor']);
			$update = $this->db->update($tabel,$lolo); 
			if ($update){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		public function deleteArtikel($id)
		{
			$this->db->where('no_artikel',$id);
			$this->db->delete('artikel');
		}
		
		function getPasien(){
			$query = $this->db->get('pasien');
			return $query->result_array();
		}
		
		function updatePasien($data){  
  		$tabel = 'pasien'; 
		  $lolo = array (
				"no_pasien"=>$data['nomor'],
				"nama_pasien"=>$data['nama'],
				"jenis_kelamin"=>$data['jk'],
				"alamat"=>$data['alamat'],
				"tgl_lahir"=>$data['tgl_lahir'],
				"tgl_masuk"=>$data['tgl_masuk'],
				"keluhan"=>$data['keluhan'],
			);  
			$this->db->where('no_pasien', $data['nomor']);
			$update = $this->db->update($tabel,$lolo); 
			if ($update){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		function updatePenyakit($data){  
  		$tabel = 'penyakit'; 
		  $lolo = array (
				"id_penyakit"=>$data['id'],
				"nama_penyakit"=>$data['nama'],
				"penjelasan"=>$data['penjelasan'],
			);  
			$this->db->where('id_penyakit', $data['id']);
			$update = $this->db->update($tabel,$lolo); 
			if ($update){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		public function deletePenyakit($id)
		{
			$this->db->where('id_penyakit',$id);
			$this->db->delete('penyakit');
		}
	}
?>