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
						   <b><h3 align="center" >View Customer</h3></b>  
                                <th width="25%" style="background-color: #438D80;color:white"> Customer Id</th>  
                                <th width="25%" style="background-color: #438D80;color:white"> First Name</th> 
	            <th width="25%" style="background-color: #438D80;color:white"> Last Name</th>
	           <th width="25%" style="background-color: #438D80;color:white"> Gender</th>
	           <th width="25%" style="background-color: #438D80;color:white"> Email</th>
	           <th width="25%" style="background-color: #438D80;color:white"> DOB </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Address 1 </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Address 2 </th>
	           <th width="25%" style="background-color: #438D80;color:white"> City</th>
	           <th width="25%" style="background-color: #438D80;color:white"> State </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Zip Code </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Country </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Mobile Phone </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Home Phone </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Account Number</th>
	           <th width="25%" style="background-color: #438D80;color:white"> National Id</th>
	           <th width="25%" style="background-color: #438D80;color:white"> Tax Id </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Customer Photo </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Update </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Delete </th>
	           

								
                          </tr>  
                     <?php  
                     echo fetchCustomer($valueToSearch);  
                     ?>  
                     </table>  
                     <br />  
                      
                </div>  
           </div>
	</form>


</article>



