<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout | Craftkrazy</title>
    <?php 
	 session_start();
	 include('connectionpool.php'); ?>
     <?php include('head.php'); ?>
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
						<h1>Checkout</h1>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="checkout-main">
						<div id="accordion">
						  <h3>Step 1: Check Options</h3>
						  <div>
								<div class="col-md-6">
									<div class="new-customer-main">
										<div class="title">
											<h4>New Customer</h4>
										</div>
										<p>Checkout Options:</p>
										<form>
											<label class="radio-inline">
											  <input type="radio" name="optradio">Register Account
											</label>
											<div class="clear"></div>
											<label class="radio-inline">
											  <input type="radio" name="optradio">Guest Checkout
											</label>
											<div class="clear"></div>
											<b>By creating an account, you:</b>
											<ol>
												<li>Get Crafting Credits (Cashback) every time you shop</li>
												<li>Can keep track of your Order History</li>
												<li>Have a more personalised shopping experience on CraftGully</li>
											</ol>
											<button type="submit" class="btn btn-default">Continue</button>
										</form>
									</div>
								</div>
								<div class="col-md-6">
									<div class="registered-users-login-here-main">
										<div class="title">
											<h4>Registered Users Login Here</h4>
										</div>
										<p>If you have an account, login to get Crafting Credits (Cashback) every time you shop</p>
										 <form>
										  <div class="form-group">
											<label for="email">E-Mail</label>
											<input type="email" class="form-control" id="email">
										  </div>
										  <div class="form-group">
											<label for="pwd">Password:</label>
											<input type="password" class="form-control" id="pwd">
										  </div>
										  <div class="forgot-password">
											<a href="">Forgot password</a>
										  </div>
										  <button type="submit" class="btn btn-default">Login</button>
										</form> 
									</div>
								</div>
								<div class="clear"></div>
						  </div>
						  <h3>Step 2: Account & Billing Details</h3>
						  <div>
							<div class="account-billing-details">
							<form>
								<div class="col-md-6">
									<div class="title">
										<h4>Your Personal Details</h4>
									</div>
									<div class="form-group">
										<label for="">First Name</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="form-group">
										<label for="">Last Name</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="form-group">
										<label for="">E-Mail</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="form-group">
										<label for="">Telephone</label>
										<input type="text" class="form-control" id="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="title">
										<h4>Your Address</h4>
									</div>
									<div class="form-group">
										<label for="">Company</label>
										<input type="text" class="form-control">
									  </div>
									  <div class="form-group">
										<label for="">Address 1</label>
										<input type="text" class="form-control">
									  </div>
									  <div class="form-group">
										<label for="">Address 2</label>
										<input type="text" class="form-control">
									  </div>
									   <div class="form-group">
										<label for="">City</label>
										<input type="text" class="form-control">
									  </div>
									   <div class="form-group">
										<label for="">Post Code</label>
										<input type="text" class="form-control">
									  </div>
									   <div class="form-group">
										<label for="">Country</label>
										<select class="selectpicker">
										  <option>Mustard</option>
										  <option>Ketchup</option>
										  <option>Relish</option>
										</select>
									  </div>
									   <div class="form-group">
										<label for="">Region / State</label>
										<select class="selectpicker">
										  <option>Mustard</option>
										  <option>Ketchup</option>
										  <option>Relish</option>
										</select>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="title">
										<h4>Your Password</h4>
									</div>
									<div class="form-group">
										<label for="">Password</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Password Confirm</label>
										<input type="text" class="form-control">
									</div>
									<div class="check-box">
										<input type="checkbox" name="" value="">I wish to Subscribe to the CraftGully.com Newsletter.<br>
										<input type="checkbox" name="" value="" checked>My delivery and billing addresses the same.<br>
									</div>
								</div>
								<div class="clear"></div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-default">Continue</button>
									<div class="check-box">
									<input type="checkbox" name="" value="" checked>I have read agree to the privacy policy
									</div>
								</div>
							</form> 
							</div>
							<div class="clear"></div>
						  </div>
						  <h3>Step 3: Delivery Details</h3>
						  <div>
							<div class="col-md-12">
							<form>
							  <div class="form-group">
								<label for="email">First Name</label>
								<input type="text" class="form-control">
							  </div>
							  <div class="form-group">
								<label for="pwd">Last Name</label>
								<input type="text" class="form-control">
							  </div>
							  <div class="form-group">
								<label for="pwd">Company</label>
								<input type="text" class="form-control">
							  </div>
							  <div class="form-group">
								<label for="pwd">Address 1</label>
								<input type="text" class="form-control">
							  </div>
							  <div class="form-group">
								<label for="pwd">Address 2</label>
								<input type="text" class="form-control">
							  </div>
							   <div class="form-group">
								<label for="pwd">City</label>
								<input type="text" class="form-control">
							  </div>
							   <div class="form-group">
								<label for="pwd">Post Code</label>
								<input type="text" class="form-control">
							  </div>
							   <div class="form-group">
								<label for="pwd">Post Code</label>
								<select class="selectpicker">
								  <option>Mustard</option>
								  <option>Ketchup</option>
								  <option>Relish</option>
								</select>
							  </div>
							   <div class="form-group">
								<label for="pwd">Post Code</label>
								<select class="selectpicker">
								  <option>Mustard</option>
								  <option>Ketchup</option>
								  <option>Relish</option>
								</select>
							  </div>
							  
							  <button type="submit" class="btn btn-default">Submit</button>
							</form> 
							</div>
							<div class="clear"></div>
						  </div>
						  <h3>Step 4: Delivery Method</h3>
						  <div>
							<div class="col-md-12">
								<div class="delivery-method">
									<p>Select the preferred shipping method to use on this order.</p>
									<form>
										<b>Shipping options</b>
										<div class="clear"></div>
										<label class="radio-inline">
										  <input type="radio" name="optradio">Register Account
										</label>
										<label class="radio-inline">
										  <input type="radio" name="optradio">Guest Checkout
										</label>
										<div class="clear"></div>
										<b>Add Comments About Your Order</b>
										<div class="form-group">
										<textarea class="form-control hresize"></textarea>
										</div>
										<button type="submit" class="btn btn-default">Continue</button>
									</form>
								</div>
							</div>
							<div class="clear"></div>
						  </div>
						  <h3>Step 5: Payment Method</h3>
						  <div>
							<div class="col-md-12">
								<div class="payment-method">
									
									<form>
										<b>SELECT YOUR MODE OF PAYMENT, you can review your order in the next step before proceeding for payment.</b>
										<div class="clear"></div>
										<label class="radio-inline">
										  <input type="radio" name="optradio">Credit Card / Debit Card / Netbanking using CCAvenue
										</label>
										<div class="clear"></div>
										<label class="radio-inline">
										  <input type="radio" name="optradio">Paytm Wallet
										</label>
										<div class="clear"></div>
										<b>Add Comments About Your Order</b>
										<div class="form-group">
										<textarea class="form-control hresize"></textarea>
										</div>
										<button type="submit" class="btn btn-default">Continue</button>
									</form>
								</div>
							</div>
							<div class="clear"></div>
						  </div>
						  <h3>Step 6: Confirm Order</h3>
						  <div>
							<div class="col-md-12">
								<div class="confirm-order-tabel">
									<table class="table table-bordered">
										<thead>
										  <tr>
											<th class="product-name">Product Name</th>
											<th class="model">Model</th>
											<th class="quantity">Quantity</th>
											<th class="unit-price">Unit Price</th>
											<th class="total">Total</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td class="product-name">Ready-TO-Glass-Paint Stencil - Fish</td>
											<td class="model">CG-131</td>
											<td class="quantity">1</td>
											<td class="unit-price">Rs.115.00</td>
											<td class="total">Rs.115.00</td>
										  </tr>
										  
										</tbody>
										<tfoot>
											<tr>
												<td colspan="4"><b>Sub-Total:</b></td>
												<td class="total">Rs.115.00</td>
											</tr>
											<tr>
												<td colspan="4"><b>Standard Shipping:</b></td>
												<td class="total">Rs.69.00</td>
											</tr>
											<tr>
												<td colspan="4"><b>Total:</b></td>
												<td class="total">Rs.184.00</td>
											</tr>
										</tfoot>
									  </table>
									  <button type="submit" class="btn btn-default">Continue</button>
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