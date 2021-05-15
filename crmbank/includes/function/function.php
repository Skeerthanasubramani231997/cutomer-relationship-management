<?php

// admin login check
	function adminLoginCheck($admin_id, $password) {
		global $con;
		$sql = "SELECT * FROM admin WHERE admin_id = '$admin_id' AND password = '$password' ";
		$result = mysqli_query($con, $sql);
		if (mysqli_fetch_array($result) > 0 ) {
			return true;
		} else {
			return false;
		}
	}
// admin login validation
	function checkAdminValidation() {
		if (isset($_SESSION["admin_id"])) {
			return $_SESSION["admin_id"]; 
		} else {
			header('Location: login.php');
			exit;
		}
	}
	

// fetch customer
	function fetchCustomer($valueToSearch) {  
      $output = '';  
      global $con;  
	  $sql = "";
	  if ($valueToSearch == "") {
		$sql = "SELECT * FROM customer ";  
	  } else {
		$sql = "SELECT * FROM `customer` WHERE customer_id LIKE  '%$valueToSearch%' ";  
	  }
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
	       $output .= '<tr>    
	        <td>' . $row["customer_id"] . '</td>  
                          <td>' . $row["first_name"] . '</td>  
                          <td>' . $row["last_name"] . '</td> 
						  <td>' . $row["gender"] . '</td> 
						  <td>' . $row["email"] . '</td> 
						  <td>' . $row["dob"] . '</td> 
						  <td>' . $row["address_1"] . '</td>
						  <td>' . $row["address_2"] . '</td>
						  <td>' . $row["city"] . '</td>
						 <td>' . $row["state"] . '</td>
						 <td>' . $row["zip_code"] . '</td>
						<td>' . $row["country"] . '</td>
						<td>' . $row["mobile_phone"] . '</td>
						<td>' . $row["home_phone"] . '</td>
						<td>' . $row["account_no"] . '</td>
						 <td>' . $row["national_id"] . '</td>
						 <td>' . $row["tax_id"] . '</td>
						 <td>' . $row["image"] . '</td>
						 <td> <a href = "updatecustomer.php?customer_id=' . $row["customer_id"] . '"><h3 style="background-color: blue;color:white"> Update </td>
						  <td> <a href = "deletecustomer.php?customer_id=' . $row["customer_id"] . '"> <h3 style="background-color: blue;color:white">Delete </td>
                        </tr>  
                          '; 

      }  
      return $output;  

	}
	
// add customer
	function addCustomer($first_name, $last_name, $gender, $email, $dob,$address_1,$address_2,$city,$state,$zip_code,$country,$home_phone,$mobile_phone,$account_no,$national_id,$tax_id,$Get_image_name) {
		global $con;
		$sql = "INSERT INTO `customer`(`first_name`, `last_name`, `gender`,`email`, `dob`, `address_1`,`address_2`,`city`,`state`,`zip_code`,`country`,`home_phone`,`mobile_phone`,`account_no`,`national_id`,`tax_id`,`image`)
				VALUES ('$first_name', '$last_name', '$gender', '$email', '$dob','$address_1','$address_2','$city','$state','$zip_code','$country','$home_phone','$mobile_phone','$account_no','$national_id','$tax_id','$Get_image_name')";
				
		if (mysqli_query($con, $sql)) {
			header('Location: customer.php');          // go to customerpage
			if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
  			echo "Your Image uploaded successfully";
  	}else{
  		echo  "Not Insert Image";
  	}
			exit;
		}
	}

// add customer check 
	function addCustomerCheck($first_name, $national_id) {
		global $con;
		$customer_id="";
		$sql = "SELECT * FROM customer WHERE customer_id = '$customer_id' ";
		$result = mysqli_query($con, $sql);
		if (mysqli_fetch_array($result) > 0 ) {
			return true;
		} else {
			return false;
		}
	}
	
	
// delete customer
	function deleteCustomer($customer_id) {
		global $con;
		$originalCustomerId=$customer_id;
		$sql = "DELETE FROM `customer` WHERE `customer_id` = '$originalCustomerId'";
		mysqli_query($con, $sql);
		header('Location: customer.php');
	}

// update customer
	function updateCustomer($customer_id,$first_name, $last_name, $gender, $email, $dob,$address_1,$address_2,$city,$state,$zip_code,$country,$home_phone,$mobile_phone,$account_no,$national_id,$tax_id) {
		global $con;
		$orginalCustomerId = $customer_id;
		$sql = "UPDATE `customer` SET 
			   `customer_id` = $customer_id,
			   `first_name`= '$first_name',
			   `last_name`= '$last_name', 
			   `gender`= '$gender',
			   `email` = '$email',
			   `dob`= '$dob',
			   `address_1`= '$address_1',
			   `address_2` = '$address_2',
			   `city` = '$city',
			   `state` = '$state',
			   `zip_code` = '$zip_code',
			   `country` = '$country',
			   `mobile_phone` = '$mobile_phone',
			   `home_phone` = '$home_phone',
			   `account_no` = '$account_no',
			   `national_id` = '$national_id',
			   `tax_id` = '$tax_id'
			   WHERE customer_id = '$orginalCustomerId' ";
			   
				
		if ((mysqli_query($con, $sql))) {
			header('Location: customer.php');          // go to customer page
			exit;
		}
	}

// fetch bank
	function fetchBank($valueToSearch) {  
      $output = '';  
      global $con;  
	  $sql = "";
	  if ($valueToSearch == "") {
		$sql = "SELECT * FROM bank";  
	  } else {
		$sql = "SELECT * FROM `bank` WHERE bank_id LIKE  '%$valueToSearch%' ";  
	  }
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>   
                          <td>' . $row["bank_id"] . '</td>  
                          <td>' . $row["iban_no"] . '</td>  
                          <td>' . $row["bank_name"] . '</td> 
						  <td> <a href = "updatebank.php?bank_id=' . $row["bank_id"] . '"> <h3 style="background-color: blue;color:white">Update </td>
						  <td> <a href = "deletebank.php?bank_id=' . $row["bank_id"] . '"><h3 style="background-color: blue;color:white"> Delete </td>
                        </tr>  
                          ';  
      }  
      return $output;  
	}
	
// add bank
	function addBank($iban_no, $bank_name) {
		global $con;
		$sql = "INSERT INTO `bank`(`iban_no`, `bank_name`)
				VALUES ('$iban_no', '$bank_name')";
				
		if (mysqli_query($con, $sql)) {
			header('Location: bank.php');          // go to customerpage
			exit;
		}
	}

	
	
// delete bank
	function deleteBank($bank_id) {
		global $con;
		$originalBankId=$bank_id;
		$sql = "DELETE FROM `bank` WHERE `bank_id` = '$originalBankId'";
		mysqli_query($con, $sql);
		header('Location: bank.php');
	}

// update bank
	function updateBank($bank_id, $iban_no,$bank_name) {
		global $con;
		$orginalBankId = $bank_id;
		$sql = "UPDATE `bank` SET 
			   `bank_id`= '$bank_id', 
			   `iban_no`= '$iban_no',
			   `bank_name`= '$bank_name'
			   WHERE bank_id = '$orginalBankId' ";
			   
				
		if ((mysqli_query($con, $sql))) {
			header('Location: bank.php');          // go to customer page
			exit;
		}
	}

// customer login check
	function customerLoginCheck($customer_id, $email) {
		global $con;
		$sql = "SELECT * FROM customer WHERE customer_id = '$customer_id' AND email = '$email' ";
		$result = mysqli_query($con, $sql);
		if (mysqli_fetch_array($result) > 0 ) {
			return true;
		} else {
			return false;
		}
	}


// customer login validation
	function checkCustomerValidation() {
		if (isset($_SESSION["customer_id"])) {
			return $_SESSION["customer_id"]; 
		} else {
			header('Location: login.php');
			exit;
		}
	}

// fetch view customer
	function customerFetchview($valueToSearch) {
		global $con;
		$sql = "SELECT  * from customer WHERE customer_id = '$valueToSearch'";
		//echo $sql;
		$result = mysqli_query($con, $sql);
		$output = '';
		if (mysqli_num_rows($result) >= 1) {
			while($row = mysqli_fetch_array($result))  
			{       
			$output .= '<tr>   
	       <td>' . $row["customer_id"] . '</td>  
                          <td>' . $row["first_name"] . '</td>  
                          <td>' . $row["last_name"] . '</td> 
						  <td>' . $row["gender"] . '</td> 
						  <td>' . $row["email"] . '</td> 
						  <td>' . $row["dob"] . '</td> 
						  <td>' . $row["address_1"] . '</td>
						  <td>' . $row["address_2"] . '</td>
						  <td>' . $row["city"] . '</td>
						 <td>' . $row["state"] . '</td>
						 <td>' . $row["zip_code"] . '</td>
						<td>' . $row["country"] . '</td>
						<td>' . $row["mobile_phone"] . '</td>
						<td>' . $row["home_phone"] . '</td>
						<td>' . $row["account_no"] . '</td>
						 <td>' . $row["national_id"] . '</td>
						 <td>' . $row["tax_id"] . '</td>
						 <td>' . $row["image"] . '</td>
							</tr>  
							';  
			}  
			return $output;
		}
		return $output;
	}


// fetch view account statement
	function accountFetchview($valueToSearch) {
		global $con;
		$sql = "SELECT C. customer_id,C.first_name,C.last_name, A.account_no,A.account_type,A.balance,A.date from customer C inner join account A on C.customer_id=A.customer_id  WHERE C.customer_id = '$valueToSearch' ";
		echo "";
		$result = mysqli_query($con, $sql);
		$output = '';
		if (mysqli_num_rows($result) >= 1) {
			while($row = mysqli_fetch_array($result))  
			{       
			$output .= '<tr>   
								<td>' . $row["customer_id"] . '</td>  
								<td>' . $row["first_name"] . '</td>  
								<td>' . $row["last_name"] . '</td> 
								<td>' . $row["account_no"] . '</td> 
								<td>' . $row["account_type"] . '</td> 
								<td>' . $row["balance"] . '</td> 
								<td>' . $row["date"] . '</td> 
								
							</tr>  
							';  
			}  

			return $output;
		}
		return $output;
	}


// fetch account
	function fetchAccount($valueToSearch) {  
      $output = '';  
      global $con;  
	  $sql = "";
	  if ($valueToSearch == "") {
		$sql = "SELECT * FROM account ";  
	  } else {
		$sql = "SELECT * FROM `account` WHERE account_no LIKE  '%$valueToSearch%' ";  
	  }
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
	       $output .= '<tr>    
	        <td>' . $row["account_no"] . '</td>  
                          <td>' . $row["customer_id"] . '</td>  
                          <td>' . $row["bank_id"] . '</td> 
						  <td>' . $row["account_type"] . '</td> 
						  <td>' . $row["balance"] . '</td> 
						  <td>' . $row["date"] . '</td> 
						  <td> <a href = "updateaccount.php?account_no =' . $row["account_no"] . '"> <h3 style="background-color: blue;color:white">Update </td>
						  <td> <a href = "deleteaccount.php?account_no =' . $row["account_no"] . '"><h3 style="background-color: blue;color:white"> Delete </td>
                        </tr>  
                          '; 

      }  
      return $output;  

	}
	
// add account
	function addAccount($account_no,$customer_id,$bank_id,$account_type,$balance) {
		global $con;
		$sql = "INSERT INTO `account`(`account_no`, `customer_id`, `bank_id`,`account_type`, `balance`)
				VALUES ('$account_no', '$customer_id', '$bank_id', '$account_type', '$balance')";
				
		if (mysqli_query($con, $sql)) {
			header('Location: account.php');          // go to customerpage
			exit;
		}
	}

// add account check 
	function addAccountCheck($customer_id, $bank_id) {
		global $con;
		$account_no="";
		$sql = "SELECT * FROM account WHERE account_no = '$account_no' ";
		$result = mysqli_query($con, $sql);
		if (mysqli_fetch_array($result) > 0 ) {
			return true;
		} else {
			return false;
		}
	}
	
	
// delete account
	function deleteAccount($account_no) {
		global $con;
		$originalAccountId=$account_no;
		$sql = "DELETE FROM `account` WHERE `account_no` = '$originalAccountId'";
		mysqli_query($con, $sql);
		header('Location: account.php');
	}

// update account
	function updateAccount($account_no, $customer_id, $bank_id, $account_type, $balance) {
		global $con;
		$orginalAccountId = $account_no;
		$sql = "UPDATE `account` SET 
			   `account_no` = $account_no,
			   `customer_id`= '$customer_id',
			   `bank_id`= '$bank_id', 
			   `account_type`= '$account_type',
			   WHERE account_no = '$orginalAccountId' ";
			   
				
		if ((mysqli_query($con, $sql))) {
			header('Location: account.php');          // go to customer page
			exit;
		}
	}



 		
		?>
