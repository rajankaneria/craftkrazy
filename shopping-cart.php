<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart | Craftkrazy</title>
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
	
	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="check-out-title">
						<h1>Shopping Cart</h1>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="checkout-main">
						<div>
						  <div class="shopping-cart-main">
							<div class="confirm-order-tabel">
								<table class="table table-bordered">
									<thead>
									  <tr>
										<th style="width: 100px;" class="product">Product</th>
										<th class="product-name">Product Name</th>
										<th class="product-code">Product Code</th>
										<th style="width: 330px;" class="quantity">Quantity</th>
										<th class="unit-price">Unit Price</th>
										<th class="total">Total</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td class="product"><img src="images/paper-craft.jpg"></td>
										<td class="product-name"><span>Ready-To-Glass-Pint Stencil-fish</span><p>Crafting Credits: Rs. 3.45</p></td>
										<td class="product-code">CG-131</td>
										<td class="quantity">
											<form>
												<input type="text" id="">
												<button type="submit" class="btn btn-default sync"><img src="images/sync.png"></button>
												<button type="submit" class="btn btn-default close02"> <img src="images/icon-close.png"></button>
											</form>
										</td>
										<td class="unit-price">Rs.115.00</td>
										<td class="total">Rs.115.00</td>
									  </tr>
									</tbody>
								  </table>
								  <table class="table table-bordered sub-total-tabel">
									<thead>
										 <tr>
											<td>Sub Total:</td>
											<td>Rs. 860.00</td>
										 </tr>
										 <tr>
											<td>VAT/CST(12.5%) + Surcharge(5%):</td>
											<td>Rs. 112.88</td>
										 </tr>
										 <tr>	
											<td>Standard Shipping:</td>
											<td>Rs. 100.00</td>
										 </tr>
										 <tr>
											<td><b>Total:</b></td>
											<td><b>Rs. 1,072.88</b></td>
										 </tr>
									</thead>
								  </table>
								  <div class="clear"></div>
								  <div class="btn-main">
								  <button type="submit" class="btn btn-default"> << Continue Shopping</button>
								  <a href="checkout.php"><button type="submit" class="btn btn-default">Checkout >></button></a>
								  </div>
							</div>
							<div class="clear"></div>
						  </div>
						</div>
						
					</div>
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