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
 

<!--================================= TOP SELLERS ============================-->
	
	<!--<div class="card-panel blue top-panel">
      <h5 class="recent-post-title">Top Sellers</h5>
	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/products/glass-art-22.jpg" class="responsive-img" width="200"></div>  
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">INR 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>

	      <div class="recentPost-box row">
	      	<div class="col s6 m6"><img src="<?php echo base_url(); ?>html/images/products/glass painting.jpg" class="responsive-img" width="200"></div>
	      	<div class="col s6 m6">
	      	<h5 class="product_name">Product Name</h5>
	      	<p class="product-price">INR 135</p>
	      	<p class="left productBadge"><span class="new badge white blue-text z-depth-2">25% off</span></p>
	      	</div>
	      </div>

	</div>-->

  

<div class="col s12 m12 hide-on-med-and-down">

<?php foreach ($catList as $key => $catData) { ?>

<div class="row product-area card-panel hide-on-med-and-down pro-panel">
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

  </div>

<!-- Mobile view Product -->
<div class="row show-on-small show-on-medium hide-on-med-and-up">
  <div class="main-cat"><h5>Paper Craft</h5></div>
  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6 main-product-box">
    <div class="product-frame">
      <div class="product-image-container">
        <img src="http://localhost/craftkrazy/html/images/products/1_product.jpg" alt="Green Earrings" class="pic">
      </div>
      <div class="product-desc-container">
        <div class="product-name"><a href="http://localhost/craftkrazy/product/productDetails/1">Green Earrings</a></div>
        <div class="product-price-container">
          <div class="price">
           <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i>75</span>
            <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i>50</span>
          </div>      
          <div class="discount-percent"><span class="label">Off</span><span class="value">33%</span></div>
        </div>
        <div class="product-action">
          <div class="product-cart-btn">
            <button data-product-id="1" class="btn blue white-text add-to-cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
            <button data-product-id="1" class="btn-floating waves-effect waves-light red wishlist-btn">
              <i class="fa fa fa-heart" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</div>
</div>