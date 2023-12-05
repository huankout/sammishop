<?php

	class customermodel extends DModel
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
        
	}

?>