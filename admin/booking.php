<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("connectionpool.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<script src="js/squel.min.js" type="text/javascript"></script>
    <?php include("head.php"); ?>
</head>
<body>

	<?php include("header.php"); ?>
    
<div class="ch-container">
	
    <div class="row">

		<?php include("sidebar.php"); ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li> 
                    <a href="#" style="color:#F00 !important"> <?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?> </a>
                </li>
            </ul>
        </div>

	<?php //include("top.php"); ?>
 
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Booking List</h2>

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
            
                <table id="txtHint" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                	<thead>
                        <tr>
                            <th>Number</th>
                            <th>User Name</th>
                            <th>Space Name</th>
                            <th>Space Type</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Price</th>
                            <th>Payment Type</th>
                            <th>Repeat Booking</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
						$i=1;
						$query = "SELECT booking_id, your_space_id, user_id, booking_date, from_time, to_time, repeat_b, amount, payment_type from booking order by booking_id desc";
						//echo $query;
						$stmt = $conn->prepare($query);
						if ($stmt) {
							$stmt->execute();
							$stmt->bind_result($booking_id,$space_id,$user_id,$booking_date,$from_time,$to_time,$repeat,$amount,$payment_type);
							$stmt->store_result();
							while ($stmt->fetch()) 
							{	
								$from_time=date("h:i A",strtotime($from_time));
								$to_time=date("h:i A",strtotime($to_time));
								$time=$from_time.' TO '.$to_time;
								
								$qsp="select space_type, space_name, location from your_space where your_space_id=?";
								$stsp=$conn->prepare($qsp);
								if($stsp)
								{
									$stsp->bind_param('i',$space_id);
									$stsp->execute();
									$stsp->bind_result($space_type,$space_name,$location);
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
								$qu="select name from app_user where app_user_id=?";
								$stu=$conn->prepare($qu);
								if($stu)
								{
									$stu->bind_param('i',$user_id);
									$stu->execute();
									$stu->bind_result($name);
									$stu->store_result();
									$stu->fetch();
								}
					     ?>
                            <tr>
                            
                            <td><?php echo $i; ?> </td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $space_name; ?></td>
                            <td><?php echo $type_name; ?></td>
			                <td><?php echo $booking_date; ?></td>
                            <td><?php echo $time; ?></td>
                            <td><?php echo $amount; ?></td>
                            <td><?php if($payment_type==1) { echo 'Cash On Arrival'; } if($payment_type==2) { echo 'VISA'; } ?></td>
                            <td><?php if($repeat==0) { echo 'NO Repeat'; } if($repeat==1) { echo 'Every Day'; } if($repeat==2) { echo 'Weekly'; } if($repeat==3) { echo 'Monthly'; } ?></td>
                           	<td class="center">
								<a class="btn btn-info" href="booking_details.php?bid=<?php echo $booking_id; ?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    View Details
                                </a>
                             </td>   
                            </tr>
                            <?php
                            	$i++;
								}
							}
							?>	
                    </tbody>
            	</table>
			</div><!--/box-->
		</div>
	</div>	
</div><!--/row-->

</div><!--/fluid-row-->

    <hr>
    
   	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
     
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

</div><!--/.fluid-container-->

	<?php include("js.php"); ?>
	<script type="text/javascript">
		/*$(document).ready(function() {
			$('#txtHint').DataTable( {
				aaSorting : [[0, 'desc']]
			} );
		} );*/
	</script>
</body>
</html>
<?php
	}
	else
	{
		header("Location:index.php");
	}
?>