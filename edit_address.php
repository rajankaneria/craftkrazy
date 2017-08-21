<?php
	include("connectionpool.php");
	session_start();
	
	$uaid=$_POST['uaid'];
	$address=$_POST['address'];
		
	$q_u="update user_address set address=? where ua_id=?";
	$stmt=$conn->prepare($q_u)or die('error in q_u');
	if($stmt)
	{
		$stmt->bind_param('si',$address,$uaid);
		$stmt->execute();
		header("Location:my-account.php?msg=Edit Success");
	}
		
?>