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

    <!-- Plugin files below -->
<link rel="stylesheet" type="text/css" href="src/jquery.ptTimeSelect.css" />
<script type="text/javascript" src="src/jquery.ptTimeSelect.js"></script>

<script type="text/javascript">

	   function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pic1')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	
	 function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pic2')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	
	 function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pic3')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }	
	
	 function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pic4')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }	
</script>
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
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add Space Detail</h2>

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
            <form method="post" action="add_space_code.php" enctype="multipart/form-data">
                <table class="table table-striped table-bordered responsive">
                	<tr height="10">
                    	<td width="100" colspan="1"><b>Name :-</b></td>
                        <td colspan="5"><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr height="10">
                    	<td width="100"><b>Type :-</b></td>
                        <td>
                        <div class="col-md-9">
                            <select class="form-control" name="type">
                            	<option>Select</option>
                                <?php
										$qtype="select space_type_id, type_name from space_type";
										$sttype=$conn->prepare($qtype);
										if($sttype)
										{ 
											$sttype->execute();
											$sttype->bind_result($space_type_id,$type_name);
											$sttype->store_result();
											while($sttype->fetch())
											{
								?>
                                	<option value="<?php echo $space_type_id; ?>"><?php echo $type_name; ?></option>
                                <?php
											}
										}
								?>		
                            </select>
                          </div>  
                        </td>
                   
                    	<td width="100"><b>Email :-<b></td>
                        <td><input type="text" class="form-control" name="email"></td>
                    
                    	<td><b>Mobile :-<b></td>
                        <td><input type="text" class="form-control" name="mobile"></td>
                    </tr>
                    <tr height="10">
                    	<td colspan="1"><b>Location :-</b></td>
                        <td colspan="3"><input type="text" class="form-control" name="location"></td>
                        <td width="100"><b>Area :-</b></td>
                        <td>
                        <div class="col-md-10">
                            <select class="form-control" name="city">
                            	<option>Select</option>
                                <?php
										$qcity="select city_id, city_name from tbl_city";
										$stcity=$conn->prepare($qcity);
										if($stcity)
										{ 
											$stcity->execute();
											$stcity->bind_result($city_id,$city_name);
											$stcity->store_result();
											while($stcity->fetch())
											{
								?>
                                	<option value="<?php echo $city_id; ?>"><?php echo $city_name; ?></option>
                                <?php
											}
										}
								?>		
                            </select>
                          </div>  
                        </td>
                    </tr>
                    <tr height="10">
                    	<td width="100"><b>Latitude :-<b></td>
                        <td><input type="text" class="form-control" name="lat"></td>
                    
                    	<td><b>Longitude :-<b></td>
                        <td><input type="text" class="form-control" name="log"></td>
                    </tr>
                   </table><br>
                   <table class="table table-striped table-bordered responsive"> 
                    <tr align="center">
                    	<td align="right"><b>Projector</b>
                       	<input type="checkbox" class="form-control" name="projector" value="1"></td>
                    
                    	<td align="right"><b>Scanner</b>
                        <input type="checkbox" class="form-control" name="scanner" value="1"></td>
                    
                    	<td align="right"><b>Parking</b>
                        <input type="checkbox" class="form-control" name="parking" value="1"></td>
                    
                    	<td align="right"><b>A/C</b>
                        <input type="checkbox" class="form-control" name="ac" value="1"></td>
                    
                    	<td align="right"><b>Locker</b>
                        <input type="checkbox" class="form-control" name="locker" value="1"></td>
                    
                    	<td align="right"><b>Phone</b>
                        <input type="checkbox" class="form-control" name="phone" value="1"></td>
                    
                    	<td align="right"><b>Mail Service</b>
                        <input type="checkbox" class="form-control" name="mail" value="1"></td>
                   
                    	<td align="right"><b>Wifi</b>
                        <input type="checkbox" class="form-control" name="wifi" value="1"></td>
                    
                    	<td align="right"><b>Work 24 hours</b>
                        <input type="checkbox" class="form-control" name="work" value="1"></td>
                    </tr>
                </table>
               <br>
                <div class="row">  
                    <div class="col-md-8">
                    	<div class="form-group">
                        	<label>Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                    	<div class="form-group"> 
                        	<label>Price</label> 
                            <input type="text" class="form-control" name="price" >
                        </div>
                    </div>
                </div>
                
                <div class="row">  
                    <div class="col-md-8">
                    	<div class="form-group">
                        	<table class="table table-striped table-bordered responsive"> 
                              <tr><th> Day </th><th> Start Time </th><th> End Time </th></tr>
							
                              <tr id="sample1" class="ui-widget-content" style="padding: .5em;">
                                	<td>Monday <input type="hidden" value="monday" name="d1"></td>
                                    <td><input name="dstrt1" /></td>
                                    <td><input name="dend1" /></td>
                                </tr>
                               
                                <tr id="sample2" class="ui-widget-content" style="padding: .5em;">
                                	<td>Tuesday <input type="hidden" value="tuesday" name="d2"></td>
                                    <td><input name="dstrt2" /></td>
                                    <td><input name="dend2" /></td>
                                </tr>
								
                                <tr id="sample3" class="ui-widget-content" style="padding: .5em;">
                                	<td>Wednesday <input type="hidden" value="wednesday" name="d3"></td>
                                    <td><input name="dstrt3"  /></td>
                                    <td><input name="dend3" /></td>
                                </tr>
                               
                                 <tr id="sample4" class="ui-widget-content" style="padding: .5em;">
                                	<td>Thursday <input type="hidden" value="thursday" name="d4"></td>
                                    <td><input name="dstrt4"/></td>
                                    <td><input name="dend4"  /></td>
                                </tr>
                                
                                <tr id="sample5" class="ui-widget-content" style="padding: .5em;">
                                	<td>Friday <input type="hidden" value="friday" name="d5"></td>
                                    <td><input name="dstrt5"  /></td>
                                    <td><input name="dend5" /></td>
                                </tr>
                                
                                <tr id="sample6" class="ui-widget-content" style="padding: .5em;">
                                	<td>Saturday <input type="hidden" value="saturday" name="d6"></td>
                                    <td><input name="dstrt6"/></td>
                                    <td><input name="dend6"  /></td>
                                </tr>
                                
                                <tr id="sample7" class="ui-widget-content" style="padding: .5em;">
                                	<td>Sunday <input type="hidden" value="sunday" name="d7"></td>
                                    <td><input name="dstrt7" /></td>
                                    <td><input name="dend7" /></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Capacity 1</label>
                            <select class="form-control" name="capacity1">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>    
                     <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Available 2</label>
                            <select class="form-control" name="avail1">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Capacity 2</label>
                            <select class="form-control" name="capacity2">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>    
                     <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Available 2</label>
                            <select class="form-control" name="avail2">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Capacity 3</label>
                            <select class="form-control" name="capacity3">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>    
                     <div class="col-md-2">
                    	<div class="form-group"> 
                            <label>Available 3</label>
                            <select class="form-control" name="avail3">
                                <option selected="selected" disabled="disabled" >Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>       
                    
                </div>
                <div class="row">  
                    <div class="col-md-4">
                    	<div class="form-group"> 
                        	<label>Image 1</label>
                            <input id='upload' name="image1" type="file" class="form-control" onChange="readURL1(this);"/><br>
                            <img alt="" id="pic1">
                         </div>
                     </div> 
                     <div class="col-md-4">
                    	<div class="form-group"> 
                        	<label>Image 2</label>
                            <input id='upload' name="image2" type="file" class="form-control" onChange="readURL2(this);"/><br>
                            <img alt="" id="pic2">
                         </div>
                     </div> 
                     <div class="col-md-4">
                    	<div class="form-group"> 
                        	<label>Image 3</label>
                            <input id='upload' name="image3" type="file" class="form-control" onChange="readURL3(this);"/><br>
                            <img alt="" id="pic3">
                         </div>
                     </div>        
                </div><br>
                <div class="row"> 
                	<div class="col-md-4">
                    	<div class="form-group"> 
                        	<label>Upload Logo</label> 
                            <input type="file" class="form-control" name="logo" onChange="readURL4(this);">
                        </div>
                    </div>
                    <div class="col-md-4">
                            <img alt="" id="pic4">
                     </div>   
                </div><br>
                <div class="row">  
                    <div class="col-md-4">
                    	<div class="form-group"> 
                        	<input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </div> 
               </form> 
            </div>
        </div>
    </div>
</div>

   <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample1 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample2 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample3 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample4 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample5 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample6 input').ptTimeSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample7 input').ptTimeSelect();
        });
    </script>

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>


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