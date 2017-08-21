<?php
	ob_start();
	include("connectionpool.php");
	session_start();

 	$ysid=$_POST['ysid'];
	$city=$_POST['city'];
	$projector=$_POST['projector'];
	$scanner=$_POST['scanner'];
	$parking=$_POST['parking'];
	$ac=$_POST['ac'];
	$locker=$_POST['locker'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];
	$wifi=$_POST['wifi'];
	$work=$_POST['work'];
	
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	if($price=='' && $desc=='')
	{
		header("Location:space_details.php?msg=Please fill all fields.&id=$ysid");
		exit();
	}
	if($_POST['dstrt1']=='' && $_POST['dend1']=='')
	{
		header("Location:space_details.php?msg=Please fill timings&id=$ysid");
		exit();
	}
	
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
			$qu="update your_space set city_id=?, projector=?, scanner_printer=?, parking=?, ac=?, locker=?, ph=?, mail=?, wifi=?, work_24=?, description=?, price=?, data_status=1, status=1 where your_space_id=?";
			$stu=$conn->prepare($qu);
			if($stu)
			{
				$stu->bind_param('iiiiiiiiiissi',$city,$projector,$scanner,$parking,$ac,$locker,$phone,$mail,$wifi,$work,$desc,$price,$ysid);
				$stu->execute();
				
				if(!empty($_FILES['logo']['name']))
				{
					$lname=$_FILES['logo']['name'];
					$ftype=$_FILES['logo']['type'];
					$tmp_name=$_FILES['logo']['tmp_name'];
					if(($_FILES["logo"]["type"]=="image/jpeg" || $_FILES["logo"]["type"]=="image/jpg" || $_FILES["logo"]["type"]=="image/png" || $_FILES["logo"]["type"]=="image/gif"))
					{
						if(move_uploaded_file($tmp_name,"upload/logo/".$lname))
						{
							$qimg="update your_space set logo=? where your_space_id=?";
							$stimg=$conn->prepare($qimg);
							$stimg->bind_param('si',$lname,$ysid);
							$stimg->execute();
						}
						else
							header("Location:space_details.php?msg=Logo not upload&id=$ysid");
					}
					else
						header("Location:space_details.php?msg=Not an image&id=$ysid");
				}
				
				$qdelete="delete from open_close_hour where your_space_id=?";
				$stde=$conn->prepare($qdelete);
				$stde->bind_param('i',$ysid);
				$stde->execute();
				
				$flag=0;
				for($i=1;$i<8;$i++)
				{
					$day=$_POST['d'.$i];
					$start=$_POST['dstrt'.$i];
					$close=$_POST['dend'.$i];
			
					$qd="insert into open_close_hour (your_space_id,day,open_time,close_time) values (?,?,?,?)";
					$std=$conn->prepare($qd);
					if($std)
					{
						$std->bind_param('isss',$ysid,$day,$start,$close);
						$std->execute();
						$flag=1;
					}
					else
					{
						$flag=0;
					}
			
				}
				if($flag==1)
				{
					header("Location:admin_home.php?msg=Success...");
				}
			}
		}
		else
			header("Location:admin_home?msg=No space found.");
	}
	
?>