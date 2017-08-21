<!DOCTYPE html>
<html lang="en">
<head>
     <title>Home | Craftkrazy</title>
     <?php
      session_start();
      include('connectionpool.php'); ?>
     <?php include('head.php'); ?>
</head><!--/head-->

<body>
	<?php include_once("header.php"); ?>
	<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>						
                        <div class="carousel-inner">
                            <div class="item active">		
                                <img src="images/banner/banner01.jpg" class="img-responsive" alt="" />									                       
                            </div>
                            <div class="item">							
                                <img src="images/banner/banner02.jpg" class="img-responsive" alt="" />																	
                            </div>							
                            <div class="item">						
                                <img src="images/banner/banner03.jpg" class="img-responsive" alt="" />									
                            </div>
                        </div>
                        
                        <!--<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>-->
                    </div>					
                </div>
            </div>
        </div>
    </section><!--/slider-->


    <div class="container">
		<div class="shop-now-img"><!--shop-now-img-->
			<div class="banner-mid-1">
				<ul>
					<li><a title="Static Image" href=""><img src="images/m1.jpg"></a></li>
					<li><a title="Static Image" href=""><img src="images/m2.jpg"></a></li>
					<li><a title="Static Image" href=""><img src="images/m3.jpg"></a></li>
					<li><a title="Static Image" href=""><img src="images/m4.jpg"></a></li>
				</ul>
			</div>
		</div><!--/shop-now-img-->
	</div>
	
	<section class="home-middel-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="recent-posts">
							<h2>Recent Posts</h2>
							<div class="left-slider-product">
                            <?php
								$query_recent = "SELECT `product_id`, `product_name`, `product_image`, `price`, `discounted_price` FROM `product_details` WHERE `status`=1 AND `quantity`>0 order by create_date DESC limit 4";
								$stmt_recent = $conn->prepare($query_recent) or die($conn->error);
								if($stmt_recent) 
								{	
									$stmt_recent->execute();
									$stmt_recent->bind_result($pro_id, $pro_name, $pro_image, $pro_price, $pro_dis_price);
									$stmt_recent->store_result();
									
									while ($stmt_recent->fetch()) 
									{	
								?>
								<div class="left-slider-product-box">
									<div class="left-slider-product-box-img">
										<a href="product-details.php?proid=<?php echo $pro_id; ?>"><img src="upload/product/<?php echo $pro_image; ?>"></a>
									</div>
									<div class="left-slider-product-box-text">
										<div class="title">
											<a href="product-details.php?proid=<?php echo $pro_id; ?>"><h4> <?php
											if(strlen($pro_name)>15)
											{
												echo substr($pro_name,0,15);
											}
											else
											{
												echo $pro_name; 
											}
										?></h4></a>
										</div>
										<div class="price">
											<span>Rs. <?php echo floatval($pro_dis_price); ?></span> <del>Rs. <?php echo floatval($pro_price); ?></del>
										</div>
										<div class="offer">
                                         <?php
											$diff=$pro_price-$pro_dis_price;
											$per=number_format(($diff*100)/$pro_price,2);				
										?>
											<h5><?php echo $per; ?>% off</h5>
										</div>
									</div>
								</div>
                                <?php
										}
									}
									$stmt_recent->close();
								?>
							</div>
						</div>
						
					
						<div class="brands_products"><!--brands_products-->
							<h2>Top Sellers</h2>
							<div class="left-slider-product">
                            	<?php
								$query_recent = "SELECT `product_id`, `product_name`, `product_image`, `price`, `discounted_price` FROM `product_details` WHERE `status`=1 AND `quantity`>0 order by create_date DESC limit 4";
								$stmt_recent = $conn->prepare($query_recent) or die($conn->error);
								if($stmt_recent) 
								{	
									$stmt_recent->execute();
									$stmt_recent->bind_result($pro_id, $pro_name, $pro_image, $pro_price, $pro_dis_price);
									$stmt_recent->store_result();
									
									while ($stmt_recent->fetch()) 
									{	
								?>
								<div class="left-slider-product-box">
									<div class="left-slider-product-box-img">
										<a href="product-details.php?proid=<?php echo $pro_id; ?>"><img src="upload/product/<?php echo $pro_image; ?>"></a>
									</div>
									<div class="left-slider-product-box-text">
										<div class="title">
											<a href="product-details.php?proid=<?php echo $pro_id; ?>"><h4><?php
											if(strlen($pro_name)>15)
											{
												echo substr($pro_name,0,15);
											}
											else
											{
												echo $pro_name; 
											}
										?></h4></a>
										</div>
										<div class="price">
											<span>Rs. <?php echo floatval($pro_dis_price); ?></span> <del>Rs. <?php echo floatval($pro_price); ?></del>
										</div>
									</div>
								</div>
                                <?php
										}
									}
									$stmt_recent->close();
								?>
							</div>
						</div><!--/brands_products-->
						
						<div class="sign-up-for-newsletter"><!--sign-up-for-newsletter-->
							<div class="sign-up-for-newsletter-text">
								<h4>sign up for newsletter</h4>
								<p>Get our updates on new arrivals and discount</p>
							</div>
							<form action="" method="post" class="">
      							<input type="email" name="email"  placeholder="Email address">
      							<div class="clear"></div>
					            <button type="submit">Subscribe</button>
					   		</form>
						</div><!--/sign-up-for-newsletter-->
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="product-slider paper-craft"><!--paper-craft-->
                    <?php
						$query_mc = "SELECT `mc_id`, `mc_name` FROM `main_category` WHERE `mc_status`=1 limit 5";
						$stmt_mc = $conn->prepare($query_mc) or die($conn->error);
						if($stmt_mc) 
						{	
							$stmt_mc->execute();
							$stmt_mc->bind_result($mc_id, $mc_name);
							$stmt_mc->store_result();
							//$count_mc=$stmt_mc->num_rows;

							while ($stmt_mc->fetch()) 
							{
					?>
						<h2 class="title"><?php echo $mc_name; ?></h2>
						<section class="regular responsive  slider">
                        	<?php
								$query_paper = "SELECT `product_id`, `product_name`, `product_image`, `price`, `discounted_price` FROM `product_details` WHERE `status`=1 AND `quantity`>0 AND `mc_id`=".$mc_id." order by create_date DESC limit 12";
								$stmt_paper = $conn->prepare($query_paper) or die($conn->error);
								if($stmt_paper) 
								{	
									$stmt_paper->execute();
									$stmt_paper->bind_result($pro_id, $pro_name, $pro_image, $pro_price, $pro_dis_price);
									$stmt_paper->store_result();
									$count_paper=$stmt_paper->num_rows;
									
									$i=0;
									while ($stmt_paper->fetch()) 
									{
							?>			
						    <div>
						      	<a href="product-details.php?proid=<?php echo $pro_id; ?>"><img src="upload/product/<?php echo $pro_image; ?>" height="248" width="248"></a>
						      	<div class="product-name">
                               		 		<a href="product-details.php?proid=<?php echo $pro_id; ?>"><h4><?php
										if(strlen($pro_name)>50)
										{
											echo substr($pro_name,0,50);
										}
										else
										{
											echo $pro_name; 
										}
									?></h4></a>
						      	</div>
						      	<div class="price">
									<span>Rs. <?php echo floatval($pro_dis_price); ?></span> <del>Rs. <?php echo floatval($pro_price); ?></del>
								</div>
                                <?php
									$diff=$pro_price-$pro_dis_price;
									$per=number_format(($diff*100)/$pro_price,2);				
								?>
								<div class="offer">
									<h4><?php echo $per; ?>% off</h4>
								</div>
								<div class="add-to-cart-btn">
									<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
								</div>
								<div class="wishlist-comparison">
									<ul>
										<li><a href=""><img style="width: 17px" src="images/wishlist.jpg"></a></li>
										<li><a href=""><img style="width: 33px" src="images/comparison.jpg"></a></li>
									</ul>
								</div>
						    </div>
                            <?php
							$i++;
									}
								}
								
								$stmt_paper->close();
							?>
					     </section>
                          <?php				
								}
							}

							$stmt_mc->close();
						?>      
					</div><!--paper-craft-->
				</div>
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>


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