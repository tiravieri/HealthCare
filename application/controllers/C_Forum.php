<?php

	class C_Forum extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Forum');
		}
		
		public function index(){
			$data['forum'] = $this->M_Forum->getForum();
			$data['member'] = $this->M_Forum->get_data();
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('nav2');
				$this->load->view('Forum',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('Forum',$data);
				$this->load->view('footer');
			}
		}
		
		public function halForum($id){
			$dat = $this->M_Forum->getInfoForum2($id);
			$data['forum'] = $dat;
			$data['komentar'] = $this->M_Forum->getInfoKomentar($id);
			$user = $this->session->userdata('email');

			if($user){
				$this->load->view('nav2');
				$this->load->view('detilForum',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('detilForum',$data);
				$this->load->view('footer');
			}	
		}
		
		public function addkomen(){
			$user = $this->session->userdata('email');
			if($user){
				$email1 = $this->session->userdata('email');
				$komentar = $this->input->post('komentar');
				$noforum = $this->input->post('noforum');
				$coba = $this->M_Forum->getInfoForum2($noforum);
				$data = array(
					
					"email1"=>$email1,
					"komentar"=>$komentar,
					"no_forum"=>$noforum
				);
				
				$berhasil = $this->M_Forum->insertKomen($data,'komenforum');
				if ($berhasil){
					echo $this->session->set_flashdata('message','komentar Berhasil');
					redirect('C_Forum/index');
				}
			} else{
				redirect('C_Login/index');
			}
		}
		
		public function addforum(){
			$email = $user = $this->session->userdata('email');
			$noforum = $this->input->post('noforum');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			
			$data = array(
				
				"email"=>$email,
				"no_forum"=>$noforum,
				"judul_forum"=>$judul,
				"isi_forum"=>$isi
			);
			
			$berhasil = $this->M_Forum->insert($data,'forum');
			if ($berhasil){
				echo $this->session->set_flashdata('message','Registrasi Berhasil');
				redirect('C_Forum/index');
			}
			
			
		}
	}

?>