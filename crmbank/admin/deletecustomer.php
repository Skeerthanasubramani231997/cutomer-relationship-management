<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id = checkAdminValidation();
	$customer_id = $_GET["customer_id"];
	if ($customer_id == "") {
		header('Location: customer.php');
	}
	deleteCustomer($customer_id);	
?>

<article> 	

</article>

<?php
include("../includes/footer/footer.php");
?>
