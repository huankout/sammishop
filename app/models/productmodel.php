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
		
	}

?>