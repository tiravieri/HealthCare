<?php

	Class C_Profile extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('M_Profile');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library(array('form_validation', 'session'));
	}
	
	
		public function index(){
			$user = $this->session->userdata('email');
			$data = array(
				'title' => 'Data member',
				'mmbr' => $this->M_Profile->get_data()
			);
			$this->load->view('nav2');
			$this->load->view('Profile',$data);
			$this->load->view('footer');
		}
		
		public function updateMember() {
			$data = $this->input->post(null,TRUE);
			$edit = $this->M_Profile->updateMember($data);
			if($edit){
				$this->session->set_flashdata('alert', 'sukses_edit');
				redirect('C_Profile/index');
			}else{
				echo "<script>alert('Gagal Edit Data');</script>";

			}
		}
		
		public function delMember(){
			$data = $this->input->post(null,TRUE);
			$this->M_Profile->deleteMember($data['email']);
			$this->session->sess_destroy();
			redirect('C_Login/index');
		}
	}