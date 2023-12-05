<?php
	class user extends DController
	{
		public function __construct()
		{
			$data = array();
			parent::__construct();
		}
		public function index(){

			$this->user();
		}
		public function user(){
			// $table_post = 'tbl_category_post';
			// $table = 'tbl_category_product';
			// $table_product = 'tbl_product';
			// $post = 'tbl_post';
			// $categorymodel = $this->load->model('categorymodel');
			// $data['category'] = $categorymodel->category_home($table);
			// $data['category_post'] = $categorymodel->categorypost_home($table_post);
			// $data['product_home'] = $categorymodel->list_product_index($table_product);
			// $data['post_index'] = $categorymodel->post_index($post);
			

			// $this->load->view('header', $data);
			// $this->load->view('slider', $data);
			// $this->load->view('home', $data);
			// $this->load->view('footer');
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

			$this->load->view('header', $data);
			$this->load->view('customer_login');
			$this->load->view('footer');
		}
		// public function user_sign_up(){
		// 	$table = 'tbl_category_product';
		// 	$categorymodel = $this->load->model('categorymodel');
		// 	$data['category'] = $categorymodel->category_home($table);
		// 	$table_post = 'tbl_category_post';
		// 	$data['category_post'] = $categorymodel->categorypost_home($table_post);

		// 	$this->load->view('header', $data);
		// 	// $this->load->view('slider');
		// 	$this->load->view('contact');
		// 	$this->load->view('footer');
		// }
	}
?>