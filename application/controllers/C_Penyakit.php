<?php

	class C_Penyakit extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Penyakit');
		}
		
		public function index(){
			$data['penyakit'] = $this->M_Penyakit->getPenyakit();
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('nav2');
				$this->load->view('Penyakit',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('Penyakit',$data);
				$this->load->view('footer');
			}
		}
		
		public function detilPenyakit($id){
			$dpthasil = $this->M_Penyakit->getInfo($id);
			$user = $this->session->userdata('email');
			
				if ($dpthasil)
				{
					$data['penyakit'] = $dpthasil;
				}
				
			if($user){
				$this->load->view('nav2');
				$this->load->view('Jenispenyakit',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('Jenispenyakit',$data);
				$this->load->view('footer');
			}
		}
		
		public function detilPenyakit2($id){
			$dpthasil = $this->M_Penyakit->getInfoPenyakit($id);
			$user = $this->session->userdata('email');
			
				if ($dpthasil)
				{
					$data['penyakit'] = $dpthasil;
				}
				
			if($user){
				$this->load->view('nav2');
				$this->load->view('detilPenyakit',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('detilPenyakit',$data);
				$this->load->view('footer');
			}
		}
	}

?>