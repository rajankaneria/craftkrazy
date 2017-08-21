<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Photo in Gallery</h2>

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
                <form role="form" action="photo_add_code.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                    	<div class="col-md-4">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Select Gallery:- </label>
            
                                <div class="controls">
                                    <select id="select" data-rel="chosen" name="gallery">
                                        <?php
											$query1="select * from tbl_g_type";
											$sql1=mysql_query($query1) or die("Error in Query1");
											
											while($row1=mysql_fetch_array($sql1))
											{
										 ?>
												<option value="<?php echo $row1['gt_id']; ?>"><?php echo $row1['gt_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>	
										<?php    			
									 
											}
										?>
                                    </select>
                                </div>
			                </div>
                        </div>
  
                        <div class="col-md-4">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Design No:- </label>
            
                                <div class="controls">
                                    <input type="text" name="p_no" class="form-control" placeholder="Enter Design Number" /> 
                                </div>
			                </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Design Name:- </label>
            
                                <div class="controls">
                                    <input type="text" name="p_name" class="form-control" placeholder="Enter Design name" /> 
                                </div>
			                </div>
                        </div>
                        
                    </div>
                    
                    <br />
                    
                    <div class="row">
                    	<div class="col-md-3">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Range:- </label>
            
                                <div class="controls">
                                    <input type="text" name="range" class="form-control"  /> 
                                </div>
			                </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Color:- </label>
            
                                <div class="controls">
                                    <input type="text" name="color" class="form-control"  /> 
                                </div>
			                </div>
                        </div>
  
                        <div class="col-md-3">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Finish:- </label>
            
                                <div class="controls">
                                    <input type="text" name="finish" class="form-control" /> 
                                </div>
			                </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="control-group">
                                <label class="control-label" for="selectError">Size:- </label>
            
                                <div class="controls">
                                    <input type="text" name="size" class="form-control" /> 
                                </div>
			                </div>
                        </div>
                        
                    </div>
                    
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Discription:-</label>
                                <div class="controls">
                                    <textarea class="form-control" name="desc"></textarea> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Upload Photo:-</label>
                                <div class="controls"> 
                                
                                	<input type="file" name="photo" class="form-control" id="exampleInputEmail1" >
                            	</div>
                            </div>
                        </div>
                    </div>
                    
                    <br />
                    
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
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


</body>
</html>
<?php
	}
	else
	{
		header("Location:index.php");
	}
?>