<div class="main">
	
<div class="row myAccount-Area">
	<ul id="tabs-swipe-demo" class="tabs tab-header">
	    <li class="tab col m3">
	    	<a href="#test-swipe-1" class="tooltipped active"  data-position="bottom" data-delay="50" data-tooltip="User Account">
	    	<span class="fa fa-user-circle-o fa-2x" aria-hidden="true"></span></a>
	    </li>
	    <li class="tab col m3">
	     	<a href="#test-swipe-2" class="tooltipped"  data-position="bottom" data-delay="50" data-tooltip="My Order List">
	     	<span class="material-icons">format_list_numbered</span></a>
	   	</li>
	    <li class="tab col m3">
	    	<a href="#test-swipe-3" class="tooltipped"  data-position="bottom" data-delay="50" data-tooltip="My Wishlist">
	    	<span class="fa fa fa-heart" aria-hidden="true"></span></a>
	    </li>
	    <li class="tab col m3">
	    	<a href="#test-swipe-4" class="tooltipped"  data-position="bottom" data-delay="50" data-tooltip="Manage Account">
	    	<span class="fa fa-cogs" aria-hidden="true"></span></a>
	    </li>
	</ul>
<!-- User Account -->
	  <div id="test-swipe-1" class="col s12 myAccount-content-Area">
	  	<div class="user-Profile">
	  		<div class="user-profile-area">
	  		<h5>Craft Profile</h5>
	  			<div class="row">
	  			  <div class="col s12 m2">
	  				<div class="user-photo">
	  					<a href="#"><img src="<?php base_url(); ?>html/images/user-placeholder.jpg"></a>
	  			  	</div>
	  			  </div>
	  			<div class="col s12 m8">	
	  				<div class="col s4 m3"><strong> Name </strong></div>
	  				<div class="col s8 m9">: &nbsp; Mr. Craft User</div>
	  			
	  				<div class="col s4 m3"><strong> Gender </strong></div>
	  				<div class="col s8 m9">: &nbsp; Male</div>
	  			
	  				<div class="col s4 m3"><strong> Date Of Birth </strong></div>
	  				<div class="col s8 m9">: &nbsp; 04 / 01 / 1995</div>
	  			
	  				<div class="col s4 m3"><strong> Mobile </strong></div>
	  				<div class="col s8 m9">: &nbsp; (91+) 99099 99099</div>
	  			
	  				<div class="col s4 m3"><strong> E-mail </strong></div>
	  				<div class="col s8 m9">: &nbsp; myCraftkrazy@hmail.com</div>
	  			
	  				<div class="col s4 m3"><strong> Locations </strong></div>
	  				<div class="col s8 m9">: &nbsp; Ahmadabad</div>

	  				<!-- 	<li><strong> Name </strong></li>
	  				<li>Mr. Craft User</li>
	  			
	  				<li><strong> Gender </strong></li>
	  				<li>Male</li>
	  			
	  				<li><strong> Date Of Birth </strong></li>
	  				<li> 04 / 01 / 1995</li>
	  			
	  				<li><strong> Mobile </strong></li>
	  				<li> (91+) 99099 99099</li>
	  			
	  				<li><strong> E-mail </strong></li>
	  				<li>myCraftkrazy@hmail.com</li>
	  			
	  				<li><strong> Locations </strong></li>
	  				<li>Ahmadabad</li> -->
	  			</div>
	  		</div>
	  	</div>	
	  </div>
	  </div>
<!-- Order List -->
	  <div id="test-swipe-2" class="col s12 myAccount-content-Area OrderReturns-area">
	  		<div class="row">
				<ul id="tabs-swipe-demo" class="tabs">
				    <li class="tab col m3 orderReturns-area-tabs">
				    	<a href="#OrderList" class="tooltipped active"  data-position="bottom" data-delay="50" data-tooltip="User Account">Order</a>
				    </li>
				    <li class="tab col m3 orderReturns-area-tabs">
				    	<a href="#OrderReturns" class="tooltipped"  data-position="bottom" data-delay="50" data-tooltip="User Account">Return</a>
				    </li>
				</ul>
			</div>	
			<div id="OrderList" class="col s12 myAccount-content-Area OrderList-Area">
				<h5>Order List</h5>
				<div class="row product-content-area">
					<div class="orderList-image col s12 m3">
						<img src="<?php base_url(); ?>html/images/shop-placeholder.png">
					</div>
					<div class="col s12 m7">
						<p class="productName">Product name</p>
						<p class="productPrice"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.
						<span class="Off-price"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.</span>
						</p>
						<p class="product-quantity"><strong>Quantity : </strong><span class="badge"> 2</span></p>
						<p  class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla dapibus aliquet. Phasellus dignissim consequat augue, at commodo arcu cursus et. Morbi faucibus purus odio, non interdum mi eleifend sit amet. In ornare tellus in erat sollicitudin venenatis. </p>
					</div>
					<div class="col s12 m2">
					    <div>
						<a class="btn-floating btn waves-effect waves-light btn-remove-order"><i class="material-icons">clear</i></a>
						<a class="btn-floating btn waves-effect waves-light btn-add-to-whishlist"><i class="material-icons">favorite</i></a>
						</div>
					</div>
				</div>

				<div class="grand-total row">
					<li><strong>Sub-total</strong> <span>: Rs. 550</span></li>
					<li><strong>Tex</strong> <span>: Rs. 50</span></li>
					<li><strong>Shipping Charges</strong> <span>: Rs. 50</span></li><hr>
					<li><strong>Grand-total</strong> <span>: Rs. 600</span></li>
				</div>

			</div>
			<div id="OrderReturns" class="col s12 myAccount-content-Area Return-Area"> Returns</div>   
	  </div>
	  <div id="test-swipe-3" class="col s12 myAccount-content-Area">My Wish List</div>
	  <div id="test-swipe-4" class="col s12 myAccount-content-Area">Account MAnage</div>
</div>

</div>