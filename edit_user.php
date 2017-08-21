<?php
	include("connectionpool.php");
	session_start();
	
	$userid=$_POST['userid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	
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
			$q_u="update user set name=?,email=?,mobile=? where user_id=?";
			$stmt=$conn->prepare($q_u)or die('error in q_u');
			if($stmt)
			{
				$stmt->bind_param('sssi',$name,$email,$mobile,$userid);
				$stmt->execute();
				header("Location:my-account.php?msg=Edit Success");
			}
		}
	}
?>