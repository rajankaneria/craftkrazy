<div class="main">

<!--  Slider starts here -->
<div id="mainSlider" class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-item red white-text" href="#one!">
      <img src="<?php echo BASE_url();?>html/images/banner01.jpg">
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?php echo BASE_url();?>html/images/banner02.jpg">
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <img src="<?php echo BASE_url();?>html/images/banner03.jpg">
    </div>
</div>	
<!--  Slider Over here -->

<!--  categoriy starts here -->
<div class="row cat-img-box">
	<img src="<?php echo base_url(); ?>html/images/m1.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php echo base_url(); ?>html/images/m2.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php echo base_url(); ?>html/images/m3.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php echo base_url(); ?>html/images/m4.jpg" class="col s6 m3 home-cat-box">
</div>

<!--  categoriy Over here -->

<!--==========  Satrt Products Area  Here  =============-->
<div class="row recent-post-box">
  <div class="col s4 m3 hide-on-med-and-down">
    <div class="card-panel side-bar-card white" style="margin-left: 10px;">
      <h5 class="recent-post-title blue-text">Recent Post</h5>
	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/image_placeholder.png" class="responsive-img" width="200"></div>
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">Rs. 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>

	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/image_placeholder.png" class="responsive-img" width="200"></div>
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">Rs. 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>
	</div>

<!--================================= TOP SELLERS ============================-->
	
	<div class="card-panel blue" style="margin-left: 10px;">
      <h5 class="recent-post-title">Top Sellers</h5>
	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/image_placeholder.png" class="responsive-img" width="200"></div>
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">Rs. 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>

	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/image_placeholder.png" class="responsive-img" width="200"></div>
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">Rs. 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>

	</div>

  </div>


<?php foreach ($catList as $key => $catData) { ?>
<div class="col s8 m9 container product-area card-panel hide-on-med-and-down">
  <div class="product-area-title">
    <h5><?php echo $catData["mc_name"]; ?></h5>
    <div class="right arrowButtons">
      <button class="next btn btn-prev white center prevProduct_paperCraft"><i class="fa fa-chevron-left fa-lg"></i></button>
      <button class="next btn btn-next white center nextProduct_paperCraft"><i class="fa fa-chevron-right fa-lg "></i></button>
    </div>
  </div>
  <div class="carousel carousel-slider center product-area" data-indicators="true" style="height: 400px !important;">
    <div class="carousel-item white-text row" href="#one!">
      <div class="uimax-block-section-26 pdt-80 pdb-80">
        <div class="row">
          <div class="product-list">
              <!-- product List for specifict Category : start -->
              <?php foreach ($catData["product_list"] as $productKey => $productRow) { ?>
              <?php $this->load->view("product-frame",$productRow); ?>
              <?php } ?>
              <!-- product List for specifict Category : end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>



   

  <div class="col s12 container product-area card-panel show-on-medium-and-down product-area-mobile hide-on-large-only">
  <div id="PaperCraft-Slider" class="show-on-medium-and-down carousel carousel-slider center product-area" data-indicators="true">
    <div class="carousel-item white-text row" href="#one!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
    <div class="carousel-item white-text row" href="#two!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
    <div class="carousel-item white-text row" href="#three!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
   </div>
  </div>

  <div class="col s12 container product-area card-panel show-on-medium-and-down product-area-mobile hide-on-large-only">
  <div id="MixedMedia-Slider" class="carousel carousel-slider center product-area" data-indicators="true">
    <div class="carousel-item white-text row" href="#one!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
    <div class="carousel-item white-text row" href="#two!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
    <div class="carousel-item white-text row" href="#three!">
      <div class="col s12 productBox">
        <div class="prodcut-image col s12">
        <img src="http://lorempixel.com/250/250/nature/2"></div>
        <span class="col s12"><div class="prodcut-name">hellow</div>
        <div class="prodcut-price">256</div>
      </div>
    </div>
   </div>
  </div>
</div>



</div>