<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product | Craftkrazy</title>
    <?php 
    session_start(); 
    include('connectionpool.php'); ?>
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
					<div class="col-md-3">
					<div class="categories">
						<div class="categories-title">
							<h2>categories</h2>
						</div>
                         <?php
							$query_mc = "SELECT `mc_id`, `mc_name` FROM `main_category` WHERE `mc_status`=1";
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
                                <h4 class="categories-toggle"><?php echo ucfirst($mc_name); ?></h4>
                                <div class="categories-content">
                                    <ul>
                                    <?php
										$query_pc = "SELECT `pc_id`, `pc_name` FROM `parent_category` WHERE mc_id=?";
										$stmt_pc = $conn->prepare($query_pc) or die($conn->error);
										if($stmt_pc) 
										{	
											$stmt_pc->bind_param('i',$mc_id);
											$stmt_pc->execute();
											$stmt_pc->bind_result($pc_id, $pc_name);
											$stmt_pc->store_result();
											//$count_mc=$stmt_mc->num_rows;
											
											while ($stmt_pc->fetch()) 
											{
									?>
                                        <li><a href="product.php?pid=<?php echo $pc_id; ?>"><?php echo ucfirst($pc_name); ?></a></li>
								   <?php
											}
										}
									?>	
                                    </ul>
                                </div>
				 		<?php
                                }
                            }
                       ?>
					</div>
                    </div>
					<div class="col-md-9">
						<div class="product-header-main">
							<ul>
								<li>
								<a href=""><img style="width: 18px" src="images/grid-view.png"></a>
								<a href=""><img style="width: 22px" src="images/list-view.png"></a>
								<a href=""><img style="width: 33px" src="images/comparison.jpg"></a>Product Compare (4)</li>
								<li>Sort By:  
								<select style="width: 65%;">
								  <option value="">Default</option>
								  <option value="">Name (A - Z)</option>
								  <option value="">Name (Z - A)</option>
								  <option value="">Price (Low > High)</option>
								  <option value="">Price (High < Low)</option>
								  <option value="">Rating (Highest)</option>
								  <option value="">Rating (Lowest)</option>
								  <option value="">Model (A - Z)</option>
								  <option value="">Model (Z - A)</option>
								</select> </li>
								<li>Show: 
								<select style="width: 55%;">
								  <option value="">15</option>
								  <option value="">20</option>
								  <option value="">25</option>
								  <option value="">30</option>
								  <option value="">40</option>
								  <option value="">50</option>
								</select></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						<div class="row">
                        <?php
							$pid = $_GET['pid'];
							$query_recent = "SELECT `product_id`, `product_name`, `product_image`, `price`, `discounted_price` FROM `product_details` WHERE `status`=1 AND `quantity`>0 AND pc_id=? order by create_date DESC";
							$stmt_recent = $conn->prepare($query_recent) or die($conn->error);
							if($stmt_recent) 
							{
								$stmt_recent->bind_param('i',$pid);	
								$stmt_recent->execute();
								$stmt_recent->bind_result($pro_id, $pro_name, $pro_image, $pro_price, $pro_dis_price);
								$stmt_recent->store_result();
								
								while ($stmt_recent->fetch()) 
								{
                        ?>						
							<div class="col-md-4">
								<div class="product-slider">
									<div>
										<a href="product-details.php?proid=<?php echo $pro_id; ?>"><img src="upload/product/<?php echo $pro_image; ?>"></a>
										<div class="product-name">
											<h4><?php
											if(strlen($pro_name)>15)
											{
												echo substr($pro_name,0,15);
											}
											else
											{
												echo $pro_name; 
											}
										?></h4>
										</div>
										<div class="price">
											<span>Rs. <?php echo floatval($pro_dis_price); ?></span> <del>Rs. <?php echo floatval($pro_price); ?></del>
										</div>
										<div class="offer">
                                        	<?php
												$diff=$pro_price-$pro_dis_price;
												$per=number_format(($diff*100)/$pro_price,2);				
											?>
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
								</div>
							</div>
							<?php
									}
								}
								$stmt_recent->close();
							?>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</section>
	
	
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  
		  <div class="modal-body">
			<form>
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" id="" placeholder="Enter Your Name" type="text">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" id="" placeholder="Enter Your Email" type="text">
					</div>
				</div>
				<div class="clear"></div>
				<div class="col-md-12">
					<div class="checkout-main ">
					<button type="submit" class="btn btn-default">Continue</button>
					</div>
				</div>
				<div class="clear"></div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
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
	<script>
		$(document).ready(function() {
			$('.categories').find('.categories-toggle').click(function() {
				$(this).next().slideToggle('600');
				$(".categories-content").not($(this).next()).slideUp('600');
			});
			$('.categories-toggle').on('click', function() {
				$(this).toggleClass('active').siblings().removeClass('active');
			});
		});
	</script>

  	<script src="js/megamenu.js"></script>


</body>

<!-- Mirrored from demo.themeum.com/html/eshopper/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2017 11:40:35 GMT -->
</html>