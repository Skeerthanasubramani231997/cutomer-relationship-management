<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$databaseName = "crmbank";
	
	$con = mysqli_connect($serverName, $userName, $password, $databaseName);
	
	if ($con) {echo "1";}
?> 