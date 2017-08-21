<?php
	include("connectionpool.php");
	session_start();
	
		$contact_person=$_POST['contact_person'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$con_pass=$_POST['con_pass'];
		
		if($password==$con_pass)
		{
			echo 'hii';
			$q_ipro="INSERT INTO `user` (`name`, `email`, `password`, `mobile`) VALUES (?,?,?,?)";
			$st_ipro=$conn->prepare($q_ipro) or die($conn->error);
			if($st_ipro)
			{
				$st_ipro->bind_param('ssss', $contact_person, $email, md5($password), $mobile);
				$st_ipro->execute();
				
				$user_id=$st_ipro->insert_id;
				
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