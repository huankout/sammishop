<?php
	class user_product extends DController
	{
		public function __construct()
		{
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->category();
		}
		public function category(){
			$table = 'tbl_category_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);

			// $this->load->view('slider');
			$this->load->view('header', $data);
			$this->load->view('categoryproduct');
			$this->load->view('footer');
		}
		public function detail_product(){
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('detail_product');
			$this->load->view('footer');
		}	
	}
?>