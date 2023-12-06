<?php

	class postmodel extends DModel
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function category_post($table){
			$sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
			return $this->db->select($sql);
		}
		public function postbyid($table,$cond){
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this->db->select($sql);
		}
		public function insert_post($table,$data){
			return $this->db->insert($table,$data);
		}

		public function update_post($table,$data,$cond){
			return $this->db->update($table,$data,$cond);
		}
		public function delete_post($table_post,$cond){
			return $this->db->delete($table_post,$cond);
		}
		public function post($table_post, $table_category){
			$sql = "SELECT * FROM $table_post, $table_category WHERE $table_post.id_category_post = $table_category.id_category_post ORDER BY id_post DESC";
			return $this->db->select($sql);
		}
		public function list_post_home($post){
			$sql = "SELECT * FROM $post ORDER BY id_post DESC";
			return $this->db->select($sql);
		}
		public function related_post_home($post,$table_post,$cond_related){
			$sql = "SELECT * FROM $post,$table_post WHERE $cond_related ORDER BY id_post DESC";
			return $this->db->select($sql);
		}
		public function details_post_home($table_post,$post,$cond){
			$sql = "SELECT * FROM $table_post,$post WHERE $cond ORDER BY $post.id_post DESC";
			return $this->db->select($sql);
		}
		public function post_index($post){
			$sql = "SELECT * FROM $post ORDER BY id_post DESC LIMIT 5";
			return $this->db->select($sql);
		}
	}

?>