<?php

	Class C_Admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('M_Artikel');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('M_Admin');
			$this->load->model('M_Penyakit');
			$this->load->library(array('form_validation', 'session'));
	}
		
		public function check(){
			$data = $this->input->post(null,TRUE);
			$login = $this->M_Admin->check_user($data);
			if($login){
				$this->session->set_userdata('username',$login->username);
				redirect('C_admin/index2');
			} else {
				$this->session->set_flashdata('message','Gagal Login');
				redirect('C_Admin/index');
			}
		}
		
		function index(){
			$this->load->view('navadmin1');
			$this->load->view('Login_admin');
		}
		
		function index2(){
			$user = $this->session->userdata('username');
				$this->load->view('navadmin2');
				$this->load->view('Admin');
				$this->load->view('footer');
			
		}
		
		public function kelolaArtikel(){
			$data['artikel'] = $this->M_Artikel->getArtikel();
			$this->load->view('navadmin2');
			$this->load->view('kelolaArtikel',$data);
		}
		
		public function updateArtikel() {
			$data = $this->input->post(null,TRUE);
			$edit = $this->M_Admin->updateArtikel($data);
			if($edit){
				$this->session->set_flashdata('alert', 'sukses_edit');
				redirect('C_admin/kelolaArtikel');
			}else{
				echo "<script>alert('Gagal Edit Data');</script>";

			}
		}
		
		public function delArtikel(){
			$data = $this->input->post(null,TRUE);
			$this->M_Admin->deleteArtikel($data['no_artikel']);
			redirect('C_Admin/kelolaArtikel');
		}
		
		public function kelolaPasien(){
			$data['pasien'] = $this->M_Admin->getPasien();
			$this->load->view('navadmin2');
			$this->load->view('Pasien',$data);
		}
		
		public function updatePasien() {
			$data = $this->input->post(null,TRUE);
			$edit = $this->M_Admin->updatePasien($data);
			if($edit){
				$this->session->set_flashdata('alert', 'sukses_edit');
				redirect('C_admin/kelolaPasien');
			}else{
				echo "<script>alert('Gagal Edit Data');</script>";

			}
		}
		
		public function kelolaPenyakit(){
			$data['penyakit'] = $this->M_Penyakit->getPenyakit();
			$this->load->view('navadmin2');
			$this->load->view('kelolaPenyakit',$data);
		}
		
		public function detilPenyakit($id){
			$dpthasil = $this->M_Penyakit->getInfo($id);
			
				if ($dpthasil)
				{
					$data['penyakit'] = $dpthasil;
				}
				
				$this->load->view('navadmin2');
				$this->load->view('kelolaJenispenyakit',$data);
			
		}
		
		public function updatePenyakit() {
			$data = $this->input->post(null,TRUE);
			$edit = $this->M_Admin->updatePenyakit($data);
			if($edit){
				$this->session->set_flashdata('alert', 'sukses_edit');
				redirect('C_Admin/kelolaPenyakit');
			}else{
				echo "<script>alert('Gagal Edit Data');</script>";

			}
		}
		
		public function delPenyakit(){
			$data = $this->input->post(null,TRUE);
			$this->M_Admin->deletePenyakit($data['id']);
			redirect('C_Admin/kelolaPenyakit');
		}
	}

?>