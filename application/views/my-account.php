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
				<div class="product-content-area">
					<div class="row">
					<div class="orderList-image col s12 m3">
						<img src="<?php base_url(); ?>html/images/shop-placeholder.png">
					</div>
					<div class="col s12 m7">
						<p class="productName">Product name</p>
						<p class="productPrice"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.
						<span class="old-price"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.</span>
						<span class="Off-price"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 20% Off.</span>
						</p>
					</div>

					<div class="col s12 m2">	
							<a class="btn btn-remove-order">REMOVE</a>
						<!-- <a class="waves-effect waves-light btn"><i class="material-icons right">clear</i>Remove</a>	 -->
					</div>
					<div class="row">
						<p class="left">Oredered on <strong> Sun, Jun 19th '2017</strong></p>
						<p class="right"> Order Amount <strong>Rs. 550</strong></p>
					</div>
					</div>
					
				</div>
			</div>
			<div id="OrderReturns" class="col s12 myAccount-content-Area Return-Area"> Returns</div>   
	  </div>
	  <div id="test-swipe-3" class="col s12 myAccount-content-Area">
	  <h5>MY Wishlist</h5>
	  <div class="product-content-area">
					<div class="row">
					<div class="orderList-image col s12 m3">
						<img src="<?php base_url(); ?>html/images/shop-placeholder.png">
					</div>
					<div class="col s12 m7">
						<p class="productName">Product name</p>
						<p class="productPrice"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.
						<span class="old-price"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 550.</span>
						<span class="Off-price"><i class="fa fa-inr" aria-hidden="true">&nbsp;</i> 20% Off.</span>
						</p>
					</div>

					<div class="col s12 m2">	
							<a class="btn btn-remove-order">REMOVE</a>
						<!-- <a class="waves-effect waves-light btn"><i class="material-icons right">clear</i>Remove</a>	 -->
					</div>
					<div class="row">
						<p class="left">Oredered on <strong> Sun, Jun 19th '2017</strong></p>
						<p class="right"> Order Amount <strong>Rs. 550</strong></p>
					</div>
					</div>
					
				</div>
	  </div>
	  <div id="test-swipe-4" class="col s12 myAccount-content-Area">Account MAnage</div>
</div>

</div>