<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id = checkAdminValidation();
	$valueToSearch = "";
	if (isset($_POST["valueToSearch"])) {
		$valueToSearch = $_POST["valueToSearch"];
	}
	
?>

<article> 	
	
	<form action = "" enctype="multipart/form-data" method = "POST" align = "center">
		<input type = "text" name = "valueToSearch"> <input type = "submit" name = "search" value = "search">
		<div class="container" style="width:1200px;">  
               
                <div class="table-responsive">  
                     <table class="table table-bordered" style="border-radius:10px;">  
                          <tr>  
						   <b><h3 align="center" >View Bank</h3></b>  
                                							<th width="20%" style="background-color: #438D80;color:white"> Bank Id</th>  
                                							<th width="20%" style="background-color: #438D80;color:white">  IBAN Number</th> 
	            					 		<th width="20%" style="background-color: #438D80;color:white"> Bank Name</th>  
	          							 <th width="20%" style="background-color: #438D80;color:white"> Update </th>
	          							 <th width="20%" style="background-color: #438D80;color:white"> Delete </th>
	           

								
                          </tr>  
                     <?php  
                     echo fetchBank($valueToSearch);  
                     ?>  
                     </table>  
                     <br />  
                      
                </div>  
           </div>
	</form>


</article>



