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
		
	}

?>