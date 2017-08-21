<?php
	include("connectionpool.php");
	session_start();
	
	$userid=$_POST['userid'];
	$new_pass=$_POST['new_pass'];
	$re_pass=$_POST['re_pass'];
	
	$qu="select name from user where user_id=?";
	$stu=$conn->prepare($qu)or die('error in select');
	if($stu)
	{
		$stu->bind_param('i',$userid);
		$stu->execute();
		$stu->bind_result($uname);
		$stu->store_result();
		$stu->fetch();
		$count_user=$stu->num_rows;
		if($count_user==0)
		{
			header("Location:my-account.php?msg=No user find.");
			break;	
		}
		else
		{
			if($new_pass==$re_pass)
			{
				$password = md5($new_pass);
				$q_u="update user set password=? where user_id=?";
				$stmt=$conn->prepare($q_u)or die('error in q_u');
				if($stmt)
				{
					$stmt->bind_param('si',$password,$userid);
					$stmt->execute();
					header("Location:my-account.php?msg=Edit Success");
				}
			}
			else
				header("Location:my-account.php?msg=Password mismatch");
		}
	}
?>