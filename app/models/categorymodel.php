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

		//product
		public function insert_product($table, $data){
			return $this->db->insert($table,$data);
		}
	}

?>