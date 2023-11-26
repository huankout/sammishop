<?php
	class login extends DController
	{
		public function __construct()
		{
			$message = array();
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->login();
		}
		public function login(){
			Session::init();
			// $this->load->view('header');
			
			if (Session::get('login') == true) {
				header('Location:'.BASE_URL."login/dashboard");
			}
			$this->load->view('cpanel/login');
			// $this->load->view('footer');
		}

		public function dashboard(){
			Session::checkSession();		
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$this->load->view('cpanel/dashboard');
			$this->load->view('cpanel/footer');

		}

		public function authentication_login(){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$table_admin = 'tbl_admin';
			$loginModel = $this->load->model('loginmodel');

			$count = $loginModel->login($table_admin,$username,$password);

			if ($count == '0') {
				$message['msg'] = "sai tài khoản hoặc mk r thằng ngu ạ";
				header("Location:".BASE_URL."login");
				
			}else{
				$result = $loginModel->getLogin($table_admin,$username,$password);
				Session::init();
				Session::set('login', true);
				Session::set('username',$result[0]['username']);
				Session::set('userid',$result[0]['admin_id']);				
				header("Location:".BASE_URL."login/dashboard");																								
			}
		}
		public function logout(){
			Session::init();
			Session::destroy();
			header("Location:".BASE_URL."login");
		}
	}
?>