<article> 	
<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id = checkAdminValidation();
	$bank_id = $_GET["bank_id"];
	if ($bank_id == "") {
		header('Location: bank.php');
	}
	deleteBank($bank_id);	
?>

</article>

