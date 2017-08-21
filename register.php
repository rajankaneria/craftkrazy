<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product | Craftkrazy</title>
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
                                <h2>Register Account</h2>
                                <p>If you already have an account with us, please login at the <a href="login.php">login page</a>.</p> <br>
                            </div>
                            <form action="register_code.php" method="post" id="registrationform">
								<div class="row">
                                	<div class="col-md-3">
                                    	<div class="form-group">
											<label>Company Name</label>
									 		<input type="text" name="company_name" placeholder="Company Name" id="input-firstname" class="form-control" required />
										</div>
									</div>
					 				<div class="col-md-3">
                                    	<div class="form-group">
									    	<label>Contact Person Name</label>
											<input type="text" name="contact_person" placeholder="Contact Person Name" id="input-lastname" class="form-control" required />
										</div>
									</div>
                                </div> 
                                <div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
											<label>Address</label>
											<textarea cols="25" rows="5" name="address" class="form-control"></textarea>
										</div>
									</div>
                                </div> 
								<div class="row">
									<div class="col-md-3">
                                    	<div class="form-group">
											<label>E-Mail</label>
											<input type="email" name="email" placeholder="E-Mail" id="input-email" class="form-control" required />
										</div>
									</div>
									<div class="col-md-3">
                                    	<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" placeholder="Password " id="input-confirm" class="form-control" required />
										</div>
									</div>
									<div class="col-md-3">
                                    	<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" name="con_pass" placeholder="Password " id="input-confirm" class="form-control" required />
										</div>
									</div>
                                </div>    
								<div class="row">
                                	<div class="col-md-3">
                                    	<div class="form-group">
											<label>Mobile No</label>
											<input type="tel" name="mobile" placeholder="Mobile No" id="input-telephone" class="form-control" required />
										</div>
									</div>
									<div class="col-md-3">
                                    	<div class="form-group">
											<label>Landline</label>
											<input type="tel" name="landline" placeholder="Landline No" id="input-telephone" class="form-control" />
										</div>
									</div>
								</div>
					          <div class="row">
                                	<div class="col-md-3">
                                    	<div class="form-group">
											<input type="submit" value="Register >>" class="btn btn-primary" name="registration" />
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

    <script type="text/javascript">
    $('.regular').slick({
	  slidesToShow: 3,
	   dots: true,
	   infinite: true,
	  slidesToScroll: 3,
	  autoplay: true,
	  autoplaySpeed: 6000,
	});	
  	</script>

  	<script src="js/megamenu.js"></script>
</body>

<!-- Mirrored from demo.themeum.com/html/eshopper/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2017 11:40:35 GMT -->
</html>