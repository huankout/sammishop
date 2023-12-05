<?php

	class cart extends DController
	{
		public function __construct(){
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->cart();
		}
		public function cart(){
			Session::init();

			$table = 'tbl_category_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$this->load->view('header', $data);
			$this->load->view('cart');
			$this->load->view('footer');
		}
		public function order(){
			Session::init();
			$table_order = 'tbl_order';
			$table_order_details = 'tbl_order_details';
			$ordermodel = $this->load->model('ordermodel');

			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$email = $_POST["email"];
			$order_desc = $_POST["order_desc"];
			$order_code = rand(0,9999);

			date_default_timezone_set('asia/ho_chi_minh');
			$date = date("d/m/Y");
			$hour = date("h:i:sa");
			$order_date = $date.$hour;

			$data_order = array(
				'order_status' => 'moi',
				'order_code' => $order_code,
				'order_date' => $date.' '.$hour,
			);
			$result_order = $ordermodel->insert_order($table_order,$data_order);

			if(Session::get("shopping_cart")==true){
				foreach(Session::get("shopping_cart") as $key => $value){
					$data = array(
						'order_code' => $order_code,
						'product_id' => $value['product_id'],
						'product_quantity' => $value['product_quantity'],
						'name' => $name,
						'phone' => $phone,
						'address' => $address,
						'email' => $email,
						'order_desc' => $order_desc,
					);
					$result_order = $ordermodel->insert_order_details($table_order_details,$data);
				}
				
			}
		}
		public function addcart(){
			Session::init();
			// Session::destroy();
			
			if(isset($_SESSION["shopping_cart"])){
				$available = 0;
				foreach($_SESSION["shopping_cart"] as $key => $value){
					if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['product_id']){
						$available++;
						$_SESSION["shopping_cart"][$key]['product_quantity'] += $_POST['product_quantity'];
					}
				}
				if($available == 0){
					$item = array(
						'product_id' => $_POST["product_id"],
						'product_title' => $_POST["product_title"],
						'product_price' => $_POST["product_price"],
						'product_image' => $_POST["product_image"],
						'product_quantity' => $_POST["product_quantity"]
					);
					$_SESSION["shopping_cart"][] = $item;
				}
			}else{
				$item = array(
					'product_id' => $_POST["product_id"],
					'product_title' => $_POST["product_title"],
					'product_price' => $_POST["product_price"],
					'product_image' => $_POST["product_image"],
					'product_quantity' => $_POST["product_quantity"]
				);
				$_SESSION["shopping_cart"][] = $item;
			}
			header("Location:".BASE_URL.'cart');
		}
		public function updatecart(){
			Session::init();
			// Session::destroy();
			if(isset($_POST['delete_cart'])){
				if(isset($_SESSION["shopping_cart"])){
					foreach($_SESSION["shopping_cart"] as $key => $value){
						if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['delete_cart']){
							unset($_SESSION["shopping_cart"][$key]);
						}
					}
					header("Location:".BASE_URL.'cart');
				}
			}else if(isset($_POST['update_cart'])){
				foreach($_POST['qty'] as $key => $qty)
				foreach($_SESSION["shopping_cart"] as $session => $value){
					if($value['product_id'] == $key && $qty >= 1){
						$_SESSION["shopping_cart"][$session]['product_quantity'] = $qty;
					}elseif($value['product_id'] == $key && $qty <=0){
						unset($_SESSION["shopping_cart"][$key]);
					}
				}
				header("Location:".BASE_URL.'cart');
			}else 
			header("Location:".BASE_URL);
		}
    }
?>