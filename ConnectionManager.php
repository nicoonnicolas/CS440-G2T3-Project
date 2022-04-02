<?php 
class ConnectionManager {
	public function getDBConnection (){	
		$dsn = "mysql:host=localhost; dbname=cs440_project;port=3306";
		$pdo = new PDO($dsn, "root", "");
		return $pdo;
	}
}

?>