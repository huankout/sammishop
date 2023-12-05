<?php

	class product extends DController
	{
		
		public function __construct()
		{
			Session::checkSession();
			parent::__construct();
		}
		public function index(){

			$this->add_category();
			
		}
		public function add_category(){
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$this->load->view('cpanel/product/add_category');
			$this->load->view('cpanel/footer');
		}
		public function add_product(){
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$table = "tbl_category_product";
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category($table);
			$this->load->view('cpanel/product/add_product', $data);
			$this->load->view('cpanel/footer');
		}
		public function insert_product(){

			$table = "tbl_product";

			$title = $_POST['title_product'];
			$price = $_POST['price_product'];
			$hot = $_POST['product_hot'];
			$desc = $_POST['desc_product'];
			$quantity = $_POST['quantity_product'];
			$category = $_POST['category_product'];

			$image = $_FILES['image_product']['name'];
			$tmp_image = $_FILES['image_product']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/product/".$unique_image;

			$data = array(
				'title_product' => $title,
				'price_product' => $price,
				'product_hot' => $hot,
				'desc_product' => $desc,
				'quantity_product' => $quantity,
				'image_product' => $unique_image,
				'id_category_product' => $category

			);

			$productmodel = $this->load->model('categorymodel');
			$result = $productmodel->insert_product($table, $data);

			if ($result == 1) {
				move_uploaded_file($tmp_image, $path_uploads);
				$message['msg'] = "thêm sản phẩm thành công";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "thêm sản phẩm thất bại";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
			}
		}

		public function insert_category(){
			$title = $_POST['title_category_product'];
			$desc = $_POST['desc_category_product'];

			$table = "tbl_category_product";
			$data = array(
				'title_category_product' => $title,
				'desc_category_product' => $desc
			);
			$categorymodel = $this->load->model('categorymodel');
			$result = $categorymodel->insertcategory($table, $data);

			if ($result == 1) {
				$message['msg'] = "thêm danh mục thành công";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "thêm danh mục thất bại";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));
			}
		}

		public function list_product(){
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$table_product = "tbl_product";
			$table_category = "tbl_category_product";

			$categorymodel = $this->load->model('categorymodel');
			$data['product'] = $categorymodel->product($table_product, $table_category);

			$this->load->view('cpanel/product/list_product', $data);
			$this->load->view('cpanel/footer');
		}

		public function list_category(){
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$table = "tbl_category_product";

			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category($table);

			$this->load->view('cpanel/product/list_category', $data);
			$this->load->view('cpanel/footer');
		}

		public function delete_product($id){
			$table = "tbl_product";
			$cond = "id_product='$id'";
			$categorymodel = $this->load->model('categorymodel');
			$result = $categorymodel->delete_product($table,$cond);
			if ($result == 1) {
				$message['msg'] = "xóa sản phẩm thành công";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "xóa sản phẩm thất bại";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
			}
		}

		public function delete_category($id){
			$table = "tbl_category_product";
			$cond = "id_category_product='$id'";
			$categorymodel = $this->load->model('categorymodel');
			$result = $categorymodel->deletecategory($table,$cond);
			if ($result == 1) {
				$message['msg'] = "xóa danh mục thành công";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "xóa danh mục thất bại";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));
			}
		}
		public function edit_category($id){
			$table = "tbl_category_product";
			$cond = "id_category_product='$id'";
			$categorymodel = $this->load->model('categorymodel');
			$data['categorybyid'] = $categorymodel->categorybyid($table,$cond);
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$this->load->view('cpanel/product/edit_category',$data);
			$this->load->view('cpanel/footer');
		}

		public function edit_product($id){
			$table = "tbl_product";
			$table_category = "tbl_category_product";
			$cond = "id_product='$id'";
			$categorymodel = $this->load->model('categorymodel');

			$data['productbyid'] = $categorymodel->productbyid($table,$cond);
			
			$data['category'] = $categorymodel->category($table_category);
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$this->load->view('cpanel/product/edit_product',$data);
			$this->load->view('cpanel/footer');
		}

		public function update_product($id){

			$table = "tbl_product";
			$categorymodel = $this->load->model('categorymodel');
			$cond = "id_product='$id'";

			$hot = $_POST['product_hot'];
			$title = $_POST['title_product'];
			$price = $_POST['price_product'];
			$desc = $_POST['desc_product'];
			$quantity = $_POST['quantity_product'];
			$category = $_POST['category_product'];

			$image = $_FILES['image_product']['name'];
			$tmp_image = $_FILES['image_product']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/product/".$unique_image;

			if ($image) {
				
				$data['productbyid'] = $categorymodel->productbyid($table,$cond);
				foreach ($data['productbyid'] as $key => $value) {
					
					$path_unlink = "public/uploads/product/";
					unlink($path_unlink . $value['image_product']);
				}	
				$data = array(
				'title_product' => $title,
				'price_product' => $price,
				'product_hot' => $hot,
				'desc_product' => $desc,
				'quantity_product' => $quantity,
				'image_product' => $unique_image,
				'id_category_product' => $category
				);
				move_uploaded_file($tmp_image, $path_uploads);
			}else{
				$data = array(
				'title_product' => $title,
				'price_product' => $price,
				'product_hot' => $hot,
				'desc_product' => $desc,
				'quantity_product' => $quantity,
				//'image_product' => $image,
				'id_category_product' => $category

			);
			}

			$result = $categorymodel->updateproduct($table, $data, $cond);

			if ($result == 1) {

				$message['msg'] = "Cập nhật sản phẩm thành công";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "Cập nhật sản phẩm thất bại";
				header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
			}
		}
		
		public function update_category_product($id){

			$table = "tbl_category_product";
			$cond = "id_category_product='$id'";
			$title = $_POST['title_category_product'];
			$desc = $_POST['desc_category_product'];
			$data = array(
				'title_category_product' => $title,
				'desc_category_product' => $desc
			);
			$categorymodel = $this->load->model('categorymodel');
			$result = $categorymodel->updatecategory($table,$data,$cond);
			if ($result == 1) {
				$message['msg'] = "cập nhật danh mục thành công";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));

			}else{
				$message['msg'] = "cập nhật danh mục thất bại";
				header("Location:".BASE_URL."product/list_category?msg=".urlencode(serialize($message)));
			}
		}
		
	}

?>