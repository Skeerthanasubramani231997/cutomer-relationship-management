<?php
	session_start();
	include("../includes/header/customerLoginHeader.php");
	include("../includes/database/dbconnnect.php");
	include("../includes/function/function.php");
	$_SESSION["email"] = null;
	header('Location: login.php');

?>

<article> 	
	
</article>



<?php
include("../includes/footer/footer.php");
?>
