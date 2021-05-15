<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id = checkAdminValidation();
	$class_id = $_GET["class_id"];
	if ($class_id == "") {
		header('Location: class.php');
	}
	deleteClass($class_id);	
?>

<article> 	

</article>

<?php
include("../includes/footer/footer.php");
?>
