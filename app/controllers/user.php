<?php
	class user extends DController
	{
		public function __construct()
		{
			$data = array();
			$message = array();

			parent::__construct();
		}
		public function index(){

			$this->user_login();
		}
		public function authentication_user_login(){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$table_customer = 'tbl_customer';
			$customermodel = $this->load->model('customermodel');

			$count = $customermodel->login($table_customer,$username,$password);

			if ($count == 0) {
				$message['msg'] = "Tên tài khoản hoặc mật khẩu không đúng";
				header("Location:".BASE_URL."user/user_login?msg=".urlencode(serialize($message)));
				
			}else{
				$result = $customermodel->getLogin($table_customer,$username,$password);
				Session::init();
				Session::set('customer', true);
				Session::set('customer_name',$result[0]['customer_name']);
				Session::set('customer_id',$result[0]['customer_id']);
				$message['msg'] = "Đăng nhập thành công";	
				// echo "Đăng nhập thành công";	
				header("Location:".BASE_URL."user/user_login?msg=".urlencode(serialize($message)));	
																								
			}
			
		}
		public function logout(){
			Session::init();
			Session::destroy();
			$message['msg'] = "Đăng xuất thành công";
			header	("Location:".BASE_URL."user/user_login?msg=".urlencode(serialize($message)));
		}
		public function user_login(){
			
			$table_post = 'tbl_category_post';
			$table = 'tbl_category_product';
			$table_product = 'tbl_product';
			$post = 'tbl_post';
			$categorymodel = $this->load->model('categorymodel');
			$postmodel = $this->load->model('postmodel');
			$data['category'] = $categorymodel->category_home($table);
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['post_index'] = $postmodel->post_index($post);

			Session::init();
			$this->load->view('header', $data);
			$this->load->view('customer_login', $data);
			$this->load->view('footer');
		}
		public function user_sign_up(){
			$table_post = 'tbl_category_post';
			$table = 'tbl_category_product';
			$table_product = 'tbl_product';
			$post = 'tbl_post';
			$categorymodel = $this->load->model('categorymodel');
			$postmodel = $this->load->model('postmodel');
			$data['category'] = $categorymodel->category_home($table);
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['post_index'] = $postmodel->post_index($post);

			$this->load->view('header', $data);
			$this->load->view('customer_sign_up', $data);
			$this->load->view('footer');
		}
		
		public function add_user(){
			$table_customer = "tbl_customer";

			$name = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$phone = $_POST['txtDienThoai'];
			$address = $_POST['txtDiaChi'];
			$password = $_POST['txtPassword'];

			$data = array(
				'customer_name' => $name,
				'customer_email' => $email,
				'customer_phone' => $phone,
				'customer_address' => $address,
				'customer_password' => md5($password),

			);

			$customermodel = $this->load->model('customermodel');
			$result = $customermodel->insertcustomer($table_customer, $data);
			if ($result == 1) {
				
				$message['msg'] = "Đăng kí thành công";
				header("Location:".BASE_URL."user/user_login?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "Đăng kí thất bại";
				header("Location:".BASE_URL."user/user_login?msg=".urlencode(serialize($message)));
			}
		}
	}
?>