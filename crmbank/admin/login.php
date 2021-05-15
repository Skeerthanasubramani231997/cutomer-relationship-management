<?php
	session_start();
	include("../includes/header/adminLoginHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$flag = true;
	if (isset ($_POST['submit'])) {
		$admin_id = $_POST['admin_id'];
		$password = $_POST['password'];
		$flag = adminLoginCheck($admin_id, $password);
		if ($flag) {
			$_SESSION["admin_id"] = $admin_id;
			header('Location: customer.php');

		}
	}
?>
<style>
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password]{
  width: 100%;
  padding: 12px 20px;
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
	<h1 align = "center">  Admin Login </h1>
	<form action = "" method = "POST" align = "center">
		<table align = "center">
		<?php 

			if ($flag == false) {
				echo "User Not Exist";
			}
		?>
			
			<tr>
				<td><b> Admin Id	</b>			</td>
				<td> <input type = "text" name = "admin_id" placeholder="email" required>				</td>
			</tr>
			
			<tr>
				<td> <b>Password </b>				</td>
				<td> <input type = "password" name = "password" placeholder="ddmmyyyy"required>				</td>
			</tr>
			
			
			
			<tr>
				<td> 				</td>s
				<td> <input type = "submit" name = "submit" value = "submit">
					 <input type = "reset" name = "reset" value = "reset">
				</td>
			</tr>
			
		</table>
	</form>

<div  style="padding-left: 70px; padding-top: 70px; ">

</div>
</article>



