<?php
	ob_start();
	include("connectionpool.php");
	session_start();

 	$ysid=$_GET['id'];
	
	$qy="select your_space_id from your_space where your_space_id=?";
	$sty=$conn->prepare($qy);
	if($sty)
	{
		$sty->bind_param('i',$ysid);
		$sty->execute();
		$sty->bind_param($ys_id);
		$sty->store_result();
		$sty->fetch();
		$count_ys=$sty->num_rows;
		
		if($count_ys != 0)
		{
			$qu="update your_space set status=1 where your_space_id=?";
			$stu=$conn->prepare($qu);
			if($stu)
			{
				$stu->bind_param('i',$ysid);
				$stu->execute();
				header("Location:old_spaces.php?msg=Approved Success...");
			}
		}
		else
			header("Location:admin_home?msg=No space found.");
	}
	
?>