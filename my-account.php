<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>My Account | Craftkrazy</title>
     <?php 
	 session_start();
	 include('connectionpool.php'); ?>
     <?php include('head.php'); ?>
     <script type="application/javascript">
	   function	repass(pass,repass)
	   {
		   alert('hi');
		   if(pass!=repass)
		   {
			   document.getElementById('rp').innerHTML='Password Not Match';
		   }
	   }
	 </script>
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


    
	
		<div class="myaccount-main">
			<div class="container">
				<div class="row">								
					<div class="col-md-3">
						 <div class="tab-panel-main">
								<ul class="nav nav-pills">
									<h4>Account</h4>
									<li class="active"><a  href="#1a" data-toggle="tab">My Account</a></li>
									<li><a href="#2a" data-toggle="tab">Edit Address</a></li>	
									<li><a href="#3a" data-toggle="tab">Password</a></li>	
									<li><a href="#4a" data-toggle="tab">Wish List</a></li>	
									<li><a href="#5a" data-toggle="tab">Order History</a></li>	
									<li><a href="logout.php">Sign Out</a></li>	
								</ul>

								
							</div>
					</div>
					<div class="col-md-9">
						<div class="product-details-text">
							<div class="tab-content clearfix">
								<div class="tab-pane active" id="1a">
									<h1>My Account</h1>
                                    <?php
										$uid=$_SESSION['uid'];
										$qu="select user_id,name,email,mobile from user where user_id=?";
										$stu=$conn->prepare($qu);
										if($stu)
										{
											$stu->bind_param('i',$uid);
											$stu->execute();
											$stu->bind_result($userid,$name,$email,$mobile);
											$stu->store_result();
											$stu->fetch();
									?>
									<div class="myaccount-content">
										<form action="edit_user.php" method="post">
                                          <input type="hidden" name="userid" value="<?php echo $userid; ?>">
										  <div class="form-group">
											<label for="">First Name</label>
											<input type="text" class="form-control" id="" name="name" value="<?php echo ucwords($name); ?>">
										  </div>
										  <div class="form-group">
											<label for="">E-Mail</label>
											<input type="text" class="form-control" id="" name="email" value="<?php echo $email; ?>">
										  </div>
										  <div class="form-group">
											<label for="">Telephone</label>
											<input type="text" class="form-control" id="" name="mobile" value="<?php echo $mobile; ?>">
										  </div>
										  <button type="submit" class="btn btn-default">Submit</button> 
										</form> 
									</div>
                                   <?php
										}
									?>	
								</div>
								<div class="tab-pane" id="2a">
									<h1>Edit Address</h1>
                                    <?php
                                   		$qua="select ua_id,address from user_address where user_id=?";
										$stua=$conn->prepare($qua);
										if($stua)
										{
											$stua->bind_param('i',$uid);
											$stua->execute();
											$stua->bind_result($ua_id,$address);
											$stua->store_result();
											$count_address=$stua->num_rows;
											while($stua->fetch())
											{
								    ?>	
                                    <form action="edit_address.php" method="post">		
									<div class="email-account"><br>
                                        <label for="">Edit Address</label>
                                        <input type="hidden" name="uaid" value="<?php echo $ua_id; ?>">
                                        <p align="center"><textarea class="form-control" rows="5" name="address"><?php echo $address; ?></textarea></p>
                                        <div class="email-account-button checkout-main">
                                            <button type="submit" class="btn btn-default">Edit</button>
                                            <a href="delete_address.php?uaid=<?php echo $ua_id; ?>" class="btn btn-default" onClick="confirm('Are you sure to remove address ?');">Delete</a>
                                        </div>
									</div>
                                    </form>
                                   <?php
											}
										}
									?>
                                    <form action="add_address.php" method="post">
                                    	<input type="hidden" name="userid" value="<?php echo $userid; ?>">
                                        <div class="email-account"><br>
                                        		<label for="">Add New Address</label>
                                                <p align="center"><textarea class="form-control" rows="5" name="address"></textarea></p>
                                            <div class="email-account-button checkout-main">
                                               <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
								</div>
								<div class="tab-pane" id="3a">
									<h1>Password</h1>
									<div class="myaccount-content">
										<form action="change_password.php" method="post">
                                          <input type="hidden" name="userid" value="<?php echo $userid; ?>">
										  <div class="form-group">
											<label for="">Password</label>
											<input type="text" class="form-control" id="pass" name="new_pass">
										  </div>
										  <div class="form-group">
											<label for="">Password Confirm</label><span style="color:#F00" id="rp"></span>
											<input type="text" class="form-control" id="repass" name="re_pass" onBlur="repass(pass.value,this.value)">
										  </div>
										  <button type="submit" class="btn btn-default">Submit</button>
										</form> 
									</div>
								</div>
								<div class="tab-pane" id="4a">
									<h1>Wish List</h1>
									<div class="wish-list">
										<table class="table table-bordered">
											<thead>
											  <tr>
												<th style="width: 100px;" class="product">Image</th>
												<th class="product-name">Product Name</th>
												<th class="model">Model</th>

												<th class="stock">Stock</th>
												<th class="unit-price">Unit Price</th>
												<th style="width: 140px;" class="action">Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td class="product"><img src="images/paper-craft.jpg"></td>
												<td class="product-name"><span>Ready-To-Glass-Pint Stencil-fish</span></td>
												<td class="model">CG-131</td>
												<td class="stock">25</td>
												<td class="unit-price">Rs.115.00</td>
												<td class="action"><button type="submit" class="btn btn-default add-to-cart"><img src="images/add-to-cart.png"></button>
												<button type="submit" class="btn btn-default close02"> <img src="images/icon-close.png"></button></td>
											  </tr>
											  <tr>
												<td class="product"><img src="images/paper-craft.jpg"></td>
												<td class="product-name"><span>Ready-To-Glass-Pint Stencil-fish</span></td>
												<td class="model">CG-131</td>
												<td class="stock">25</td>
												<td class="unit-price">Rs.115.00 <del>Rs.115.00</del></td>
												<td class="action"><button type="submit" class="btn btn-default add-to-cart"><img src="images/add-to-cart.png"></button>
												<button type="submit" class="btn btn-default close02"> <img src="images/icon-close.png"></button></td>
											  </tr>
											  <tr>
												<td class="product"><img src="images/paper-craft.jpg"></td>
												<td class="product-name"><span>Ready-To-Glass-Pint Stencil-fish</span></td>
												<td class="model">CG-131</td>
												<td class="stock">25</td>
												<td class="unit-price">Rs.115.00</td>
												<td class="action"><button type="submit" class="btn btn-default add-to-cart"><img src="images/add-to-cart.png"></button>
												<button type="submit" class="btn btn-default close02"> <img src="images/icon-close.png"></button></td>
											  </tr>
											</tbody>
										 </table>
									</div>
									
								</div>
								<div class="tab-pane" id="5a">
									<h1>Order History</h1>
									<div class="order-history-content">
										<div class="order-history-content02">
											<h4>Order ID</h4>
											<table class="table table-bordered">
												<thead>
												  <tr>
													<th class="product-name">Product Name</th>
													<th class="product-code">Product Code</th>
													<th class="quantity">Quantity</th>
													<th class="unit-price">Price</th>
													<th class="total">Total</th>
												  </tr>
												</thead>
												<tbody>
													<tr>
														<td>Product Name</td>
														<td>C001</td>
														<td>01</td>
														<td>196.00</td>
														<td>196.00</td>
													</tr>
													<tr>
														<td colspan="2">Delivery on Fri, September, 2016<button type="submit" class="btn btn-default view">view</button></td>
														<td colspan="3"><b>Total:</b> 196.00</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="order-history-content02">
											<h4>Order ID</h4>
											<table class="table table-bordered">
												<thead>
												  <tr>
													<th class="product-name">Product Name</th>
													<th class="product-code">Product Code</th>
													<th class="quantity">Quantity</th>
													<th class="unit-price">Price</th>
													<th class="total">Total</th>
												  </tr>
												</thead>
												<tbody>
													<tr>
														<td>Product Name</td>
														<td>C001</td>
														<td>01</td>
														<td>196.00</td>
														<td>196.00</td>
													</tr>
													<tr>
														<td colspan="2">Delivery on Fri, September, 2016<button type="submit" class="btn btn-default view">view</button></td>
														<td colspan="3"><b>Total:</b> 196.00</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="order-history-content02">
											<h4>Order ID</h4>
											<table class="table table-bordered">
												<thead>
												  <tr>
													<th class="product-name">Product Name</th>
													<th class="product-code">Product Code</th>
													<th class="quantity">Quantity</th>
													<th class="unit-price">Price</th>
													<th class="total">Total</th>
												  </tr>
												</thead>
												<tbody>
													<tr>
														<td>Product Name</td>
														<td>C001</td>
														<td>01</td>
														<td>196.00</td>
														<td>196.00</td>
													</tr>
													<tr>
														<td colspan="2">Delivery on Fri, September, 2016<button type="submit" class="btn btn-default view">view</button></td>
														<td colspan="3"><b>Total:</b> 196.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="6a">
									<h1>Sign Out</h1>
									<div class="myaccount-content">
										<p>You have been logged off your account it is now safe to leave the computer.</p>
										<p>Your shopping cart has been saved, the items inside it will be restored whenever you log back into your account.</p>
										<div class="logout-btn">
											<button>Continue</button>
										</diV>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include('footer.php'); ?>
    
  <script src="js/foundation.min.js"></script>
    <script src="js/setup.js"></script>
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
	
	var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
	</script>

  	<script src="js/megamenu.js"></script>

</body>

<!-- Mirrored from demo.themeum.com/html/eshopper/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2017 11:40:35 GMT -->
</html>