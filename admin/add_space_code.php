<?php
	
	include("connectionpool.php");
	
	$name=$_POST['name'];
	$type=$_POST['type'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$location=$_POST['location'];
	$city=$_POST['city'];
	
	if(!isset($_POST['projector']))
	{
		$projector=0;
	}
	else
	{
		$projector=$_POST['projector'];
	}
	if(!isset($_POST['scanner']))
	{
		$scanner=0;
	}
	else
	{
		$scanner=$_POST['scanner'];
	}
	if(!isset($_POST['parking']))
	{
		$parking=0;
	}
	else
	{
		$scanner=$_POST['parking'];
	}
	
	if(!isset($_POST['ac']))
	{
		$ac=0;
	}
	else
	{
		$ac=$_POST['ac'];
	}
	
	if(!isset($_POST['locker']))
	{
		$locker=0;
	}
	else
	{
		$locker=$_POST['locker'];
	}
	
	if(!isset($_POST['phone']))
	{
		$phone=0;
	}
	else
	{
		$phone=$_POST['phone'];
	}
	
	if(!isset($_POST['mail']))
	{
		$mail=0;
	}
	else
	{
		$mail=$_POST['mail'];
	}
	
	if(!isset($_POST['wifi']))
	{
		$wifi=0;
	}
	else
	{
		$wifi=$_POST['wifi'];
	}
	
	if(!isset($_POST['work']))
	{
		$work=0;
	}
	else
	{
		$work=$_POST['work'];
	}
	
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$lat=$_POST['lat'];
	$log=$_POST['log'];
	
	$lname=$_FILES['logo']['name'];
	$ftype=$_FILES['logo']['type'];
	$tmp_name=$_FILES['logo']['tmp_name'];
	
	if($price=='' && $desc=='')
	{
		header("Location:add_space_details.php?msg=Please fill all fields.");
		exit();
	}
	if($_POST['dstrt1']=='' && $_POST['dend1']=='')
	{
		header("Location:add_space_details.php?msg=Please fill timings.");
		exit();
	}
	$qselect="select space_user_id, email from space_user where email=?";
	$stsel=$conn->prepare($qselect);
	if($stsel)
	{
		$stsel->bind_param('s',$email);
		$stsel->execute();
		$stsel->bind_result($space_user_id,$s_email);
		$stsel->store_result();
		$stsel->fetch();
		$count_user=$stsel->num_rows;
	}
	if($count_user ==0)
	{
		$q_space_user="insert into space_user (email, phone) values (?, ?)";
		$st_space_user=$conn->prepare($q_space_user);
		if($st_space_user)
		{
			$st_space_user->bind_param('ss',$email,$phone);
			$st_space_user->execute();
			$space_user_id=$st_space_user->insert_id;
			
			function rand_password($length){
			 
			  $chars = '123456789' ;
			  $str = '';
			  $max = strlen($chars) - 1;
			
			  for ($i=0; $i < $length; $i++)
				$str .= $chars[rand(0, $max)];
			
			  return $str;
			}
	
			$num = rand_password(3);
			
			$opassword = 'upscale'.$num.$space_user_id;
			$password = md5($opassword);
			
			$qsu="update space_user set password=? where space_user_id=?";
			$stu=$conn->prepare($qsu);
			$stu->bind_param('si',$password,$space_user_id);
			$stu->execute();
			
			$email_to = $email;
			$sub = "Upscale Userid and Password";
			$body = "Your userid and password to handle your space listed in upscale through the Admin panel. ";
			$body.= "Link for login in adminpanel :- http://businessline.co/client/upscale_user  ";
			$body.= "Username :- ".$email;
			$body.= "Password :- ".$opassword;
			$from = "info@businessline.co"; 
			$headers = "From:" . $from ."\r\n";
			
			mail($email_to,$sub,$body,$headers);
		}
	}
	if(($_FILES["logo"]["type"]=="image/jpeg" || $_FILES["logo"]["type"]=="image/jpg" || $_FILES["logo"]["type"]=="image/png" || $_FILES["logo"]["type"]=="image/gif"))
	{
		if(move_uploaded_file($tmp_name,"upload/logo/".$lname))
		{
			$qu="insert into your_space (space_user_id,city_id,space_type,space_name,email,phone,projector,scanner_printer,parking,ac,locker,ph,mail,wifi,work_24,location,lat,lon,description,logo,price,data_status,status) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,1,1)";
			//echo $qu;
			$stu=$conn->prepare($qu)or die('error in qu');
			if($stu)
			{
				$stu->bind_param('iiisssiiiiiiiiissssss',$space_user_id,$city,$type,$name,$email,$mobile,$projector,$scanner,$parking,$ac,$locker,$phone,$mail,$wifi,$work,$location,$lat,$log,$desc,$lname,$price);
				$stu->execute();
				$space_id=$stu->insert_id;
				
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
						$std->bind_param('isss',$space_id,$day,$start,$close);
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
					$f=0;
					for($j=1;$j<4;$j++)
					{
						
						if($_FILES['image'.$j]['name'] !='')
						{
							$pname=$_FILES['image'.$j]['name'];
							$ftype=$_FILES['image'.$j]['type'];
							$tmp_name=$_FILES['image'.$j]['tmp_name'];
							
							if(($_FILES["image".$j]["type"]=="image/jpeg" || $_FILES["image".$j]["type"]=="image/jpg" || $_FILES["image".$j]["type"]=="image/png" || $_FILES["image".$j]["type"]=="image/gif"))
							{
								if(move_uploaded_file($tmp_name,"upload/space/".$pname))
								{
									$query= "insert into space_img(your_space_id,img) values(?,?)";
									$st_scat=$conn->prepare($query)or die('error in insert product');	
									$st_scat->bind_param('is',$space_id,$pname);
									$st_scat->execute();	
									if($st_scat)
									{
										$f=1;
									}
									else
									{
										$f=0;
									}
								 }
								 else
									header("Location:add_space_details.php?msg=SpaceImage no upload");
							 }
							 else
								header("Location:add_space_details.php?msg=Not a space image");
						  }
					  }
			      }/* end */
				  if($f==1)
				 {	
					$flg=0;							
					for($k=1;$k<4;$k++)
					{
						$capacity=$_POST['capacity'.$k];
						$avail=$_POST['avail'.$k];
						
						if(isset($capacity) && !empty($capacity) && isset($avail) && !empty($avail))
						{
						
							$qa="insert into capacity_availability (your_space_id,capacity,availability) values (?,?,?)";
							$sta=$conn->prepare($qa);
							if($sta)
							{
								$sta->bind_param('iss',$space_id,$capacity,$avail);
								$sta->execute();
								$flg=1;
							}
							else
							{
								$flg=0;
							}
						}
					}
					
					if($flg==1)
						header("Location:old_spaces.php?msg=Successfully Added...");
						
					else
						header("Location:add_space_details.php?msg=Data Not Added");
				}
				
			}/*end*/
		}
		else
			header("Location:add_space_details.php?msg=Image no upload");
	}
	else
		header("Location:add_space_details.php?msg=Not an image");