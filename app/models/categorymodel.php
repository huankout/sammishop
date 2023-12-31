<?php

	class categorymodel extends DModel
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		//category product
		public function category($table){
			$sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
			return $this->db->select($sql);
		}
		public function category_home($table){
			$sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
			return $this->db->select($sql);
		}
		public function categorybyid_home($table,$table_product, $id){
			$sql = "SELECT * FROM $table,$table_product WHERE $table.id_category_product = $table_product.id_category_product AND $table_product.id_category_product='$id' ORDER BY $table_product.id_category_product DESC";
			return $this->db->select($sql);
		}
		public function categorybyid($table,$cond){
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this->db->select($sql);
		}
		public function insertcategory($table_category_product,$data){
			return $this->db->insert($table_category_product,$data);
		}

		public function updatecategory($table_category_product,$data,$cond){
			return $this->db->update($table_category_product,$data,$cond);
		}
		public function deletecategory($table_category_product,$cond){
			return $this->db->delete($table_category_product,$cond);
		}
		//category post
		public function insertcategory_post($table, $data){
			return $this->db->insert($table, $data);
		}
		public function post_category($table){
			$sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
			return $this->db->select($sql);
		}
		public function categorypost_home($table_post){
			$sql = "SELECT * FROM $table_post ORDER BY id_category_post DESC";
			return $this->db->select($sql);
		}
		public function postbyid_home($table_cate_post,$table_post,$id){
			$sql = "SELECT * FROM $table_post,$table_cate_post WHERE $table_post.id_category_post = $table_cate_post.id_category_post AND $table_post.id_category_post='$id' ORDER BY $table_post.id_post DESC";
			return $this->db->select($sql);
		}
		public function deletecategory_post($table_category_post,$cond){
			return $this->db->delete($table_category_post,$cond);
		}
		public function categorybyid_post($table,$cond){
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this->db->select($sql);
		}
		public function updatecategory_post($table_category_post,$data,$cond){
			return $this->db->update($table_category_post,$data,$cond);
		}
	}

?>