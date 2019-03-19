<?php

	class C_Artikel extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Artikel');
		}
		
		public function index(){
			$data['artikel'] = $this->M_Artikel->getArtikel();
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('nav2');
				$this->load->view('Artikel',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('Artikel',$data);
				$this->load->view('footer');
			}
		}
		
		public function halArtikel($id){
			$dpthasil = $this->M_Artikel->getInfoArtikel($id);
			$user = $this->session->userdata('email');
			
				if ($dpthasil)
				{
					$data['artikel'] = $dpthasil;
				}
				
			if($user){
				$this->load->view('nav2');
				$this->load->view('detilArtikel',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('detilArtikel',$data);
				$this->load->view('footer');
			}
		}
	}

?>