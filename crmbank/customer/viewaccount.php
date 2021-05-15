<?php
	session_start();
	include("../includes/header/customerHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$customer_id = checkCustomerValidation();
	$valueToSearch = $_SESSION["customer_id"];
	
?>

<article> 	
	
	<form action = "" enctype="multipart/form-data" method = "POST" align = "center">
		<!--<input type = "text" name = "valueToSearch"> <input type = "submit" name = "search" value = "search">
		<div class="container" style="width:1200px;">  -->	
               
                <div class="table-responsive">  
                     <table class="table table-bordered" style="border-radius:10px;">  
                          <tr>  
						   <b><h3 align="center" > View Account</h3></b>  
                                  <th width="25%" style="background-color: #438D80;color:white"> Customer Id</th>  
                                <th width="25%" style="background-color: #438D80;color:white"> First Name</th> 
	            <th width="25%" style="background-color: #438D80;color:white"> Last Name</th>
	           <th width="25%" style="background-color: #438D80;color:white"> Account Number </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Account Type</th>
	           <th width="25%" style="background-color: #438D80;color:white">Balance  </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Created Date</th>
	           
                          </tr>  
                     <?php  
                     echo accountFetchview($valueToSearch);  
                     ?>  
                     </table>  
                     <br />  
                      
                </div>  
           </div>
	</form>


</article>



