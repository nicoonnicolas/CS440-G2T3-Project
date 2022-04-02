<?php 
include ("ConnectionManager.php");

class UserDAO {
	public function isUserValid($username, $password){
		$findUserSQL = "SELECT * FROM user WHERE USER_USERNAME = :username AND USER_PASSWORD = :password";
		$connMgr = new ConnectionManager();
		$conn = $connMgr->getDBConnection();
		$stmt = $conn->prepare($findUserSQL);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->bindParam(":username", $username, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		$stmt->execute();

		$result = array();

		while ($row = $stmt->fetch()){
			$user = new User ($row["USER_USERNAME"], $row["USER_PASSWORD"], $row["USER_FIRST_NAME"], 
			$row["USER_LAST_NAME"], $row["USER_ROLE"], $row["USER_DESCRIPTION"]);
			$result[] = $user;
		}

		return $result;
	}
}
?>