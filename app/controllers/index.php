<?php
	class index extends DController
	{
		public function __construct()
		{
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->homepage();
		}
		public function homepage(){

			$table_post = 'tbl_category_post';
			$categorymodel = $this->load->model('categorymodel');
			$data['category_post'] = $categorymodel->categorypost_home($table_post);

			$this->load->view('header',$data);
			$this->load->view('slider');
			$this->load->view('home');
			$this->load->view('footer');
		}
		public function notfound(){
			$this->load->view('header');
			$this->load->view('404');
			$this->load->view('footer');
		}
		public function category(){
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('categoryproduct');
			$this->load->view('footer');
		}
		public function detail_product(){
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('detail_product');
			$this->load->view('footer');
		}

		public function contact(){
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('contact');
			$this->load->view('footer');
		}
	}
?>