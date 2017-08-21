<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register User | Craftkrazy</title>
    <?php include('connectionpool.php'); ?>
    <?php include_once("head.php"); ?>
</head><!--/head-->

<body>
	<?php include_once("header.php"); ?>
	
	<section class="pages-banner"><!--pages-banner-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-img">
						<img src="images/checkout-banner.jpg">
					</div>
                </div>
            </div>
        </div>
    </section><!--/pages-banner-->
	
		<div class="product-main">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
                        <div class="categories">
                            <div class="categories-title">
                                <h2>Registered Users Login Here</h2>
                                <p>If you are not registered click here<a href="registeruser.php"> Register</a>.</p> <br>
                            </div>
                            <form action="loginuser_code.php" method="post" id="registrationform">
								<div class="row">
					 				<div class="col-md-3">
                                    	<div class="form-group">
									    	<label for="email">E-Mail</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
									</div>
                                    <div class="col-md-3">
                                    	<div class="form-group">
											<label for="pwd">Password</label>
											<input type="password" class="form-control" id="pwd" name="password">
										</div>
									</div>
                                </div>
					          <div class="row">
                                	<div class="col-md-3">
                                    	<div class="form-group">
											<input type="submit" value="Login >>" class="btn btn-primary" name="login" />
										</div>
								   </div>
                             </div>   
						</form>		
                    </div>
                </div>
            </div>        
        </div>
    </div>
	<br>
	<?php include('footer.php'); ?>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
	    $( function() {
			$( "#accordion" ).accordion({
			  heightStyle: "content"
			});
		  } );
	</script>

  	<script src="js/megamenu.js"></script>

</body>

<!-- Mirrored from demo.themeum.com/html/eshopper/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2017 11:40:35 GMT -->
</html>