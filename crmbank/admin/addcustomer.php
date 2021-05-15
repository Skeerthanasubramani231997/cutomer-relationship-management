 
<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id= checkAdminValidation();
	
	
	$flag = false;
	if (isset($_POST["submit"])) {
		$first_name=$_POST["first_name"];
		$last_name = $_POST["last_name"];
		$gender= $_POST["gender"];
		$email = $_POST["email"];
		$dob= $_POST["dob"];
		$address_1= $_POST["address_1"];
		$address_2= $_POST["address_2"];
		$city = $_POST["city"];
		$state=$_POST["state"];
		$zip_code= $_POST["zip_code"];
		$country = $_POST["country"];
		$zip_code= $_POST["zip_code"];
		$mobile_phone= $_POST["mobile_phone"];
		$home_phone= $_POST["home_phone"];
		$account_no= $_POST["account_no"];
		$national_id= $_POST["national_id"];
		$tax_id= $_POST["tax_id"];
		$Get_image_name = $_FILES['image']['name'];
  		$image_Path = "images/".basename($Get_image_name);
		addCustomer($first_name,$last_name,$gender,$email,$dob,$address_1,$address_2,$city,$state,$zip_code,$country,$home_phone,$mobile_phone, $account_no,$national_id,$tax_id,$Get_image_name);
		
}
?>

<style>
input[type=text]{
  width: 100%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=radio]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email]{
  width: 100%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date]{
  width: 100%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #438D80;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #438D80;
}

input[type=reset] {
  width: 100%;
  background-color: #438D80;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #438D80;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>


<article> 	
	
	<form action = " " enctype="multipart/form-data" method = "POST" align = "center">
		<table align = "center">
		<?php 
			if ($flag == true) {
				echo "customer already exit";
			}
		?>
			<tr>
				<td> First Name				</td>
				<td> <input type = "text" name = "first_name" required>			</td>                                                                   		
				
			</tr>
			
			<tr>
				<td> Last Name			</td>
				<td> <input type = "text" name = "last_name" required>			</td>
			</tr>
			
			<tr>
				<td> Gender				</td>
				<td> <input type = "radio" name = "gender" value = "male" required> Male
					 <input type = "radio" name = "gender" value = "female" required> Female
									</td>
			<tr>
			
			<tr>
				<td> Email				</td>
				
				<td> <input type = "email" name = "email" required>				</td>
			</tr>
			
			<tr>
				<td> DOB			</td>
				<td> <input type = "date" name = "dob" required>				</td>
			</tr>
			
			<tr>
				<td> Address 1		</td>
				<td> <input type = "text" name = "address_1" required>				</td>
			</tr>
			
			<tr>
				<td> Address 2		</td>
				<td> <input type = "text" name = "address_2" required>				</td>
			</tr>
			
			<tr>
				<td> City		</td>
				<td> <input type = "text" name = "city" required>				</td>
			</tr>
			
			<tr>
				<td> State		</td>
				<td> <input type = "text" name = "state" required>				</td>
			</tr>

			<tr>
				<td> Zip Code		</td>
				<td> <input type = "text" name = "zip_code" required>				</td>
			</tr>

			<tr>
				<td> Country		</td>
				<td> <input type = "text" name = "country" required>				</td>
			</tr>

			<tr>
				<td> Mobile Phone		</td>
				<td> <input type = "text" name = "mobile_phone" required>				</td>
			</tr>

			<tr>
				<td> Home Phone		</td>
				<td> <input type = "text" name = "home_phone" required>				</td>
			</tr>
			
			<tr>
				<td> Account Number		</td>
				<td> <input type = "text" name = "account_no" required>				</td>
			</tr>


			<tr>
				<td> National Id		</td>
				<td> <input type = "text" name = "national_id" required>				</td>
			</tr>

			<tr>
				<td> Tax id		</td>
				<td> <input type = "text" name = "tax_id" required>				</td>
			</tr>
			
			<tr>
				<td> Customer Photo		</td>
				<td> <input type="file" name="image" required>				</td>
			</tr>
			
			 
			<tr>
				<td> 				</td>
				<td> <input type = "submit" name = "submit" value = "submit">
					 <input type = "reset" name = "reset" value = "reset">
				</td>
			</tr>
			
		</table>
	</form>


</article>


