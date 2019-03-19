<?php
	
	class C_Home extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('text');
			$this->load->helper('url');
			$this->load->model('M_Home');
		}
		public function index (){
			$data['artikel'] = $this->M_Home->getArtikel();
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('nav2');
				$this->load->view('Home',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('nav1');
				$this->load->view('Home',$data);
				$this->load->view('footer');
			}
		}
		
		public function getinfo($id){
		
		//$header['url']="detil";
		
		$dpthasil = $this->M_Home->getInfoArtikel($id);
		if ($dpthasil)
		{
			$data['artikel'] = $dpthasil;
		}
		
	}
	}

?>