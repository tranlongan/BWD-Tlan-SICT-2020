<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
?>

<?php 
	/**
	* 
	*/
	class product
	{
		private $db;
		public function __construct()
		{
			$this->db = new Database();
		}

		public function show_product()
		{
			{
				$query = "SELECT * FROM news order by id desc ";
				$result = $this->db->select($query);
				return $result;
			}
		}
	

	
		
	
	}
 ?>