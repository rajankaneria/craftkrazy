<?php
	include("connectionpool.php");
	session_start();
	
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	if($email==''||$password=='')
	{
		header("location:login.php?msg=Please Enter username and password.");
		break;	
	}	
	else
	{	
		$q_u="select user_id,name,email,password from user where email=? and password=?";
		$stmt=$conn->prepare($q_u)or die('error in q_u');
		if($stmt)
		{
			$stmt->bind_param('ss',$email,$password);
			$stmt->execute();
			$stmt->bind_result($user_id,$name,$u_email,$pass);
			$stmt->store_result();
			$stmt->fetch();
			if($password==$pass)
			{	
				$_SESSION['uid']=$user_id;
				$_SESSION['name']=$name;
				
				header("location:index.php?msg=login successful...");
			}
			else
			{
				header("location:loginuser.php?msg=Enter valid username and password.");
			}
			
		}
	}
?>