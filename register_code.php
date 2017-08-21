<?php
	include("connectionpool.php");
	session_start();
	
		$company_name=$_POST['company_name'];
		$contact_person=$_POST['contact_person'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$landline=$_POST['landline'];
		$address=$_POST['address'];
		$password=$_POST['password'];
		$con_pass=$_POST['con_pass'];
		
		if($password==$con_pass)
		{
			$q_ipro="INSERT INTO `seller` (`company_name`, `contact_person`, `email`, `password`, `mobile`, `landline`, `address`, `status`) VALUES (?,?,?,?,?,?,?,1)";
			$st_ipro=$conn->prepare($q_ipro) or die($conn->error);
			
			if($st_ipro)
			{
				$st_ipro->bind_param('sssssss', $company_name, $contact_person, $email, md5($password), $mobile, $landline, $address);
				$st_ipro->execute();
				
				$product_id=$st_ipro->insert_id;
				
				header("Location:index.php?status=done&msg=Successfuly Inserted");	
			}
			else
				header("Location:register.php?status=error&msg=Error in insert");
		}
		else
		{
			header("Location:register.php?status=error&msg=password does not match");
		}
	
?>