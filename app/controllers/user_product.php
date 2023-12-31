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
			$productmodel = $this->load->model('productmodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['list_product'] = $productmodel->list_product_home($table_product);

			$this->load->view('header', $data);
			// $this->load->view('slider');
			$this->load->view('list_product',$data);
			$this->load->view('footer');
		}
		public function product_hot(){
			$table = 'tbl_category_product';
			$table_product =  'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$productmodel = $this->load->model('productmodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['product_hot'] = $productmodel->list_product_index($table_product);

			// $this->load->view('slider');
			$this->load->view('header', $data);
			$this->load->view('product_hot', $data);
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
		public function detail_product($id){
			$table = 'tbl_category_product';
			$table_product =  'tbl_product';
			$table_post = 'tbl_category_post';
			$cond = "$table_product.id_category_product = $table.id_category_product AND $table_product.id_product='$id'";
			
			$categorymodel = $this->load->model('categorymodel');
			$productmodel = $this->load->model('productmodel');

			$data['category'] = $categorymodel->category_home($table);
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['detail_product'] = $productmodel->detail_product_home($table,$table_product,$cond);

			foreach($data['detail_product'] as $key => $cate){
				$id_cate = $cate['id_category_product'];
			}

			$cond_related = "$table_product.id_category_product = $table.id_category_product AND $table_product.id_category_product='$id_cate' AND $table_product.id_product != '$id'";
			$data['related'] = $productmodel->related_product_home($table,$table_product,$cond_related);

			$this->load->view('header', $data);
			// $this->load->view('slider');
			$this->load->view('detail_product', $data);
			$this->load->view('footer');
		}	

	}
?>