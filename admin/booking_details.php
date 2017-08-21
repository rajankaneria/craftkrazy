<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("connectionpool.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<?php include("head.php"); ?>
<!-- Prerequisites: jQuery and jQuery UI Stylesheet -->
<script type="text/javascript" src="src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/jquery-ui.css" />
<script src="js/jquery.min.js"></script>
    <!-- Plugin files below -->
<link rel="stylesheet" type="text/css" href="src/jquery.ptTimeSelect.css" />
<script type="text/javascript" src="src/jquery.ptTimeSelect.js"></script>

</head>

<body>
    <?php include("header.php"); ?>
    
<div class="ch-container">
    <div class="row">

		<?php include("sidebar.php"); ?>
        
   <div id="content" class="col-lg-10 col-sm-10">
    
   	<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Booking Details</a>
        </li>
         <li> 
			<a href="#" style="color:#F00 !important"> <?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?> </a>
        </li>
    </ul>
	

<?php 
	//include("top.php");
	$bid = $_GET['bid'];	
	
	$query1 = "SELECT booking_id, reference_no, your_space_id, user_id, booking_date, from_time, to_time, repeat_b, base_amount, amount, payment_type, transcation_id, payment_time from booking where booking_id=?";
	//echo $query1;
	$stmt1 = $conn->prepare($query1);
	if ($stmt1) {
		$stmt1->bind_param("i", $bid);
		$stmt1->execute();
	    $stmt1->bind_result($booking_id,$refernce_no,$space_id,$user_id,$booking_date,$from_time,$to_time,$repeat,$base_amount,$amount,$payment_type,$transcation_id,$payment_time);
		$stmt1->store_result();
		$stmt1->fetch(); 
		
		$booking_date=date("d M Y",strtotime($booking_date));
		$from_time=date("h:i A",strtotime($from_time));
		$to_time=date("h:i A",strtotime($to_time));
		$time=$from_time.' TO '.$to_time;
		
		$qsp="select space_type, space_name, email, phone, location from your_space where your_space_id=?";
		$stsp=$conn->prepare($qsp);
		if($stsp)
		{
			$stsp->bind_param('i',$space_id);
			$stsp->execute();
			$stsp->bind_result($space_type,$space_name,$email,$phone,$location);
			$stsp->store_result();
			$stsp->fetch();
		}
		$qtype="select type_name from space_type where space_type_id=?";
		$sttype=$conn->prepare($qtype);
		if($sttype)
		{
			$sttype->bind_param('i',$space_type);
			$sttype->execute();
			$sttype->bind_result($type_name);
			$sttype->store_result();
			$sttype->fetch();
		}
		$qu="select name,phone,email from app_user where app_user_id=?";
		$stu=$conn->prepare($qu);
		if($stu)
		{
			$stu->bind_param('i',$user_id);
			$stu->execute();
			$stu->bind_result($name,$phon,$mail);
			$stu->store_result();
			$stu->fetch();
		}
	}
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Booking Detail</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
           		<div class="row">
                	<div class="col-md-12">
                    	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        	<tr><td colspan="6"><b><h3>Order Detail</h3></b></td></tr>
                        	<tr><td><b>Reference NO : </b></td><td colspan="4"><?php echo $refernce_no; ?></td></tr>
                           	<tr><td><b>Date & Time : </b></td><td colspan="2"><?php echo $booking_date.' , '.$time; ?></td>
                            <td><b><?php if($repeat==0) { echo 'NO Repeat'; } if($repeat==1) { echo 'Every Day'; } if($repeat==2) { echo 'Weekly'; } if($repeat==3) { echo 'Monthly'; } ?></b></td></tr>
                            <tr>
                            <td><b>Base Amount : </b></td><td ><?php echo $base_amount; ?></td>
                            <td><b>Total Payable Amount : </b></td><td ><?php echo $amount; ?></td></tr>
                            <tr>
                            <td><b>Payment Type : </b></td><td><?php if($payment_type==1) { echo 'Cash On Arrival'; } if($payment_type==2) { echo 'VISA'; } ?></td>
							<?php if($payment_type==2) {?>
                            <td><b>Transaction ID : </b></td><td><?php echo $transcation_id; ?></td><?php } ?>
                            </tr>
                        </table>
                    </div>
                 </div>
                 <div class="row">
                 	<div class="col-md-6">       
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        	<tr><td colspan="4"><b><h3>User Detail</h3></b></td></tr>
                            <tr><td><b>Name : </b></td><td colspan="3"><?php echo $name; ?></td></tr>
                            <tr><td><b>Email : </b></td><td><?php echo $mail; ?></td><td><b>Contact No : </b></td><td><?php echo $phon; ?></td></tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                    	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        	<tr><td colspan="4"><b><h3>Space Detail</h3></b></td></tr>
                            <tr><td><b>Name : </b></td><td><?php echo $space_name; ?></td><td><b>Type : </b></td><td><?php echo $type_name; ?></td></tr>
                            <tr><td><b>Email : </b></td><td><?php echo $email; ?></td><td><b>Contact Number : </b></td><td><?php echo $phone; ?></td></tr>
                            <tr><td><b>Location : </b></td><td colspan="3"><?php echo $location; ?></td></tr>
                        </table>
                    </div>
              </div>
              <br><a href="booking.php" class="btn btn-default">BACK</a>
    </div>
 </div>     
<hr>

    <?php include("footer.php"); ?>
<!--/.fluid-container-->
	<?php include("js.php"); ?>
    </div>
  </div>
</div>     

</body>
</html>
<?php
	}
	else
	{
		header("Location:index.php");
	}
?>