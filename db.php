<?php
	
	class Db {
		
		private $db_host  ="localhost";
		private $db_user = "root";
		private $db_pass = "";
		private $db_database = "clothes";

		function exec($query) {
			$mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_database);
			if ($mysqli->connect_errno) {
    			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    		}

    		mysqli_set_charset($mysqli, "utf8");


    		$result = $mysqli->query($query);
    		$mysqli->close();
			return $result; 
		}

		function select($query) {
			$mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_database);
			if ($mysqli->connect_errno) {
    			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    		}
    		mysqli_set_charset($mysqli, "utf8");
    			
			$res = $mysqli->query($query);
			$data = [];
			while ($row = $res->fetch_assoc()) {				
					$data[] = $row;
			}

			$res->free();
			$mysqli->close();
			return $data;
		}
	}

	$db = new Db();
?>