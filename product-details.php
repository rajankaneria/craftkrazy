<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Detail | Craftkrazy</title>
    <?php 
     session_start(); 
    include('connectionpool.php'); ?>
    <?php include('head.php'); ?>
	  <!-- xzoom plugin here -->
  <script src="js/vendor/jquery.js"></script>
  <script type="text/javascript" src="js/xzoom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/xzoom.css" media="all" /> 
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head><!--/head-->

<body>
	<?php include('header.php'); ?>
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
	
    <?php
		$proid = $_GET['proid'];
		$query_pro = "SELECT `product_id`, `pc_id`, `product_name`, `product_code`, `product_image`, `price`, `discounted_price`, `description`, `quantity` FROM `product_details` WHERE `status`=1 AND `quantity`>0 AND product_id=? order by create_date DESC";
		$stmt_pro = $conn->prepare($query_pro) or die($conn->error);
		if($stmt_pro) 
		{
			$stmt_pro->bind_param('i',$proid);	
			$stmt_pro->execute();
			$stmt_pro->bind_result($pro_id, $pc_id, $pro_name, $pro_code, $pro_image, $pro_price, $pro_dis_price, $description, $quantity);
			$stmt_pro->store_result();
			$stmt_pro->fetch();
    ?>
		<div class="product-details">
			<div class="container">
				<div class="row">								
					<div class="col-md-4">
						 <section id="default" class="product-details-slider">
								  <div class="large-5 column">
									<div class="xzoom-container">
									  <img class="xzoom" id="xzoom-default" src="upload/product/<?php echo $pro_image; ?>" xoriginal="upload/product/<?php echo $pro_image; ?>" />
									  <div class="xzoom-thumbs">
										<a href="upload/product/<?php echo $pro_image; ?>"><img class="xzoom-gallery" width="80" src="upload/product/<?php echo $pro_image; ?>"  xpreview="upload/product/<?php echo $pro_image; ?>"></a>
                                        <?php
											$qimg="select pimage_id, image_name from product_image where product_id=?";
											$stimg=$conn->prepare($qimg);
											if($stimg)
											{
												$stimg->bind_param('i',$pro_id);
												$stimg->execute();
												$stimg->bind_result($pimage_id,$image_name);
												$stimg->store_result();
												while($stimg->fetch())
												{
										?>
									<a href="upload/product/<?php echo $image_name; ?>"><img class="xzoom-gallery" width="80" height="80" src="upload/product/<?php echo $image_name; ?>"></a>
									    <?php
												}
											}
										?>	
									  </div>
									</div>        
								  </div>
						  <div class="large-7 column"></div>
						
						</section>
					</div>
					<div class="col-md-8">
						<div class="product-details-text">
							<h1><?php echo ucfirst($pro_name); ?></h1>
							<p><?php echo $description; ?></p>
							<ul>
								<li>Brand:</li>
								<li>Product Code: <?php echo $pro_code; ?></li>
								<li>Delivery Time: Usually delivered within 7 business days anywhere in India</li>
								<li>Shipping Cost: Free if total order is more than Rs.499, else add Rs.69</li>
								<li>Availability: <?php echo $quantity; ?></li>
							</ul>
							
							<div class="product-details-price">
								<h2>Rs. <?php echo $pro_price;?> <span>Rs. <?php echo $pro_dis_price; ?></span></h2>
							</div>
							<div class="delivery delivery01">
								<div class="delivery-text">
									<p>Delivery</p>
								</div>
								<div class="delivery-code">
									<div><img src="images/map-icon.png">380051<span>Change</span></div>
									<p>FREE Delivery in 11-13 days</p>
								</div>
							</div>
							<!--<div class="delivery delivery02">
								<div class="delivery-text">
									<p>Delivery</p>
								</div>
								<div class="delivery-code">
									<div><img src="images/map-icon02.png">380051<span>Change</span></div>
									<p>No sellers deliver in this area.</p>
								</div>
							</div>-->
							<div class="clear"></div>
							<div class="qty-add-cart">
								<div class="qty">
									<span>Qty</span><input class="form-control" id="" min="1" max="5" type="number">
									<div class="clear"></div>
								</div>
								<div class="checkout-main ">
								<button type="submit" class="btn btn-default">Add To Cart</button>
								</div>
							</div>
							<div class="reviews-stars">
							<div id="stars" class="starrr"></div><span>0 reviews / Write a review</span>
							<div class="clear"></div>
							</div>
							<div class="social-icons">
								<ul>
									<li><a href=""><img src="images/social-icon-01.png"></a></li>
									<li><a href=""><img src="images/social-icon-02.png"></a></li>
									<li><a href=""><img src="images/social-icon-03.png"></a></li>
									<li><a href=""><img src="images/social-icon-04.png"></a></li>
									<li><a href=""><img src="images/social-icon-05.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12">
							<div class="tab-panel-main">
								<ul  class="nav nav-pills">
									<li class="active"><a  href="#1a" data-toggle="tab">Overview</a></li>
									<li><a href="#2a" data-toggle="tab">Reviews(0)</a></li>	
								</ul>

								<div class="tab-content clearfix">
									<div class="tab-pane active" id="1a">
									    <h3>Content's background color is the same for the tab</h3>
									</div>
									<div class="tab-pane" id="2a">
										<div class="reviews-main">
											<form>
												<div class="col-md-12">
													<p>There are no reviews for this product.</p>
													<div class="title">
														<h4>Write a review</h4>
													</div>
													<div class="form-group">
														<label for="">Your Name</label>
														<input class="form-control" id="" type="text">
													</div>
													<div class="form-group">
														<div class="checkout-main ">
														<label for="">Your Review</label>
														<textarea class="form-control hresize"></textarea>
														<p class="note"><span>Note:</span> HTML is not translated!</p>
														</div>
													</div>
													<div class="form-group">
														<label class="Rating">
														  Rating  Bad	
														  <input type="checkbox" name="" value="">
														  <input type="checkbox" name="" value="">
														  <input type="checkbox" name="" value="">
														  <input type="checkbox" name="" value="">
														  <input type="checkbox" name="" value="">
														  Good
														</label>
													</div>
													<div class="form-group">
														<div class="g-recaptcha" data-sitekey="your_site_key"></div>

													</div>
												</div>
												<div class="clear"></div>
												<div class="col-md-12">
													<div class="checkout-main ">
													<button type="submit" class="btn btn-default">Continue</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
					</div>
   <?php 
		} 
	?>	
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="related-accessories-title">
									<h3>Related Accessories or Products</h3>
								</div>
							</div>
							<?php
								$query_recent = "SELECT `product_id`, `product_name`, `product_image`, `price`, `discounted_price` FROM `product_details` WHERE `status`=1 AND `quantity`>0 AND pc_id=? order by create_date DESC limit 4";
								$stmt_recent = $conn->prepare($query_recent) or die($conn->error);
								if($stmt_recent) 
								{
									$stmt_recent->bind_param('i',$pc_id);	
									$stmt_recent->execute();
									$stmt_recent->bind_result($pro_id, $pro_name, $pro_image, $pro_price, $pro_dis_price);
									$stmt_recent->store_result();
									
									while ($stmt_recent->fetch()) 
									{
							?>
                            <div class="col-md-3">
								<div class="product-slider">
									<div>
										<img src="upload/product/<?php echo $pro_image; ?>">
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
							?>	
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
	</script>
	<script>
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