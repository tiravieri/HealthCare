<?php
	class C_Login extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('M_Login');
			$this->load->library('session');
		}
		
		public function index(){
			$data = array(
				'title' => 'Login To healthcare',
				'filename' => 'Login'
			);
			$this->load->view('nav1');
			$this->load->view('Login',$data);
			$this->load->view('footer');
		}
		
		public function login(){
			if(isset($_POST['submit'])){
			  $email = $this->input->post('email');
			  $password = $this->input->post('password');
			  $berhasil = $this->M_Login->login($email,$password);
			  if($berhasil == 1){
				$this->session->set_userdata(array('status_login'=>'sukses'));
				redirect('C_Home/index');
			  }else{
				redirect('C_Login/index');
			  }
			}else{
				$this->load->view('C_Login/index');
			}
		}
		public function check(){
			$data = $this->input->post(null,TRUE);
			$login = $this->M_Login->check($data);
			
			if ($login){
				$this->session->set_userdata('email',$login->email);
				redirect('C_Home/index');
			} else {
				$this->session->set_flashdata('message','Error Login');
				redirect('C_Login/index');
			}
		}
		
		public function Logout(){
			$this->session->sess_destroy();
			redirect('C_Home/index');
		}
	}
?>