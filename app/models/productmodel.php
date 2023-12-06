<?php

	class productmodel extends DModel
	{
		
		public function __construct()
		{
			parent::__construct();
		}
        public function insert_product($table, $data){
			return $this->db->insert($table,$data);
		}
        public function product($table_product, $table_category){
			$sql = "SELECT * FROM $table_product, $table_category WHERE $table_product.id_category_product = $table_category.id_category_product ORDER BY id_product DESC";
			return $this->db->select($sql);
		}
        public function delete_product($table_product,$cond){
			return $this->db->delete($table_product,$cond);
		}
        public function productbyid($table,$cond){
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this->db->select($sql);
		}
        public function updateproduct($table,$data,$cond){
			return $this->db->update($table,$data,$cond);
		}
        public function list_product_home($table_product){
			$sql = "SELECT * FROM $table_product ORDER BY $table_product.id_product DESC";
			return $this->db->select($sql);
		}
        public function list_product_index($table_product){
			$sql = "SELECT * FROM $table_product ORDER BY $table_product.id_product DESC";
			return $this->db->select($sql);
		}
        public function detail_product_home($table,$table_product,$cond){
			$sql = "SELECT * FROM $table_product, $table WHERE $cond";
			return $this->db->select($sql);
		}
        public function related_product_home($table,$table_product,$cond_related){
			$sql = "SELECT * FROM $table,$table_product WHERE $cond_related";
			return $this->db->select($sql);
		}
        public function product_hot($table_product){
			$sql = "SELECT * FROM $table_product WHERE product_hot != 1 ORDER BY $table_product.id_product DESC";
			return $this->db->select($sql);
		}
		
	}

?>