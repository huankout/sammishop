<?php
	class news extends DController
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
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('categorypost');
			$this->load->view('footer');
		}
		public function news_detail($id){
			$this->load->view('header');
			// $this->load->view('slider');
			$this->load->view('detail_post');
			$this->load->view('footer');
		}
	}
?>