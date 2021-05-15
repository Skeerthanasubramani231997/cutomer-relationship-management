<?php
	session_start();
	include("../includes/header/adminLoginHeader.php");
	include("../includes/database/dbcon.php");
	include("../includes/function/function.php");
	$_SESSION["admin_id"] = null;
	header('Location: login.php');

?>




<?php
include("../includes/footer/footer.php");
?>
