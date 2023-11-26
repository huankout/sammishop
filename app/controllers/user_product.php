<?php
	class user_product extends DController
	{
		public function __construct()
		{
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->category(0);
		}
		public function all(){
			$table = 'tbl_category_product';
			$table_product =  'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['list_product'] = $categorymodel->list_product_home($table_product);

			$this->load->view('header', $data);
			// $this->load->view('slider');
			$this->load->view('list_product',$data);
			$this->load->view('footer');
		}
		public function category($id){
			$table = 'tbl_category_product';
			$table_product =  'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['category_by_id'] = $categorymodel->categorybyid_home($table,$table_product,$id);

			// $this->load->view('slider');
			$this->load->view('header', $data);
			$this->load->view('categoryproduct', $data);
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