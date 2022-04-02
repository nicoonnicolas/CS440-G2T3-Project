<?php
include ("Database.php");
session_start();
echo "You have successfully logged in! <br>";
echo "User IP Address is   " . getIPAddress() . "<br>";

if (isset($_SESSION["data_exploited_from_sql_login"])) {
	echo "Data Exploited from Malicious Login: <br>";
	print_r($_SESSION["data_exploited_from_sql_login"]);
	echo "<br><br>";
	echo "Your case has been logged into the DB!";
	$ipAddress = getIPAddress();
	$sql = "INSERT INTO sql_injection_incident (INCIDENT_IP) VALUES ('$ipAddress')";
	$result = mysqli_query($link, $sql);
	
} else {
	echo "You are logged in as a real user!";
}

function getIPAddress()
{
	//whether ip is from the share internet  
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	//whether ip is from the proxy  
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	//whether ip is from the remote address  
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

?>
<br>
<a href="Logout.php">Logout!</a>