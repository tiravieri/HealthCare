<?php

	class C_Regis extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('M_Regis');
			$this->load->library('session');
		}
		
		public function index(){
			$this->load->view('nav1');
			$this->load->view('Regis');
			$this->load->view('footer');
		}
		
		public function index2(){
			$this->load->view('nav1');
			$this->load->view('alertberhasil');
			$this->load->view('footer');
		}
		
		public function register(){
			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$pass = $this->input->post('password');
			
			$data = array(
				
				"email"=>$email,
				"nama"=>$nama,
				"password"=>$pass
			);
			
			$berhasil = $this->M_Regis->insert($data,'member');
			if ($berhasil){
				echo $this->session->set_flashdata('message','Registrasi Berhasil');
				redirect('C_Regis/index2');
			}
			
			
		}
	}

?>