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
		public function addcart(){
			Session::init();
			
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
		public function deletecart(){
			Session::init();
			if(isset($_SESSION["shopping_cart"])){
				foreach($_SESSION["shopping_cart"] as $key => $value){
					if($value['product_id'] == $_POST['delete_id']){
						
						unset($_SESSION["shopping_cart"][$key]);
					}
				}
				header("Location:".BASE_URL.'cart');
			}else{
				header("Location:".BASE_URL);
			}
		}
    }
?>