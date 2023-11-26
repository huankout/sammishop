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
			$table = 'tbl_category_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$this->load->view('header', $data);
			$this->load->view('cart');
			$this->load->view('footer');
		}
    }
?>