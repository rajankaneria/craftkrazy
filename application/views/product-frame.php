      <script type="text/javascript">
   $('.tooltipped').tooltip({delay: 50});
</script>
      <?php /*
      <div class="item pro-item-new">
        <div class="product-item">
          <div class="pic-wrapper pro-wrapper">
                <a href="javascript:void(0)" class="inner">
                  <img src="<?php echo base_url(); ?>html/images/products/<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="pic">
                </a>
                <!-- <div class="pic-color">
                  <a href="javascript:void(0)" class="pick active" style="background-color:#000"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#FFFFFF;"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#323A45"></a>
                </div> -->
              </div>
              <div class="product-desc">
                <h2 class="name"><a href="<?php echo base_url(); ?>product/productDetails/<?php echo $product_id; ?>"><?php echo $product_name; ?></a></h2>
                <div class="price">INR <?php echo $discounted_price; ?></div>
                <div class="old-price">INR <?php echo $price; ?></div>
                <button class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
               <button  class="btn-floating waves-effect waves-light red wishlist-btn">
                  <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
              <span class="sale">sale</span>
              <!-- <i class="fa fa-shopping-cart btn btn-add-cart" aria-hidden="true"></i>
              <a href="javascript:void(0)" class="btn btn-wishlist">Wishlist</a> -->
            </div>
          </div>

           */ ?>

<div class="product-frame">
  <div class="product-image-container">
    <img src="<?php echo base_url(); ?>html/images/products/<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="pic">
  </div>
  <div class="product-desc-container">
    <div class="product-name"><a href="<?php echo base_url(); ?>product/productDetails/<?php echo $product_id; ?>"><?php echo $product_name; ?></a></div>
    <div class="product-price-container">
      <div class="price">
       <span class="original-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $price; ?></span>
        <span class="discounted-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $discounted_price; ?></span>
       
      </div>      
      <div class="discount-percent"><span class="label">Off</span><span class="value"><?php echo round(100*($price - $discounted_price)/$price); ?>%</span></div>
    </div>
    <div class="product-action">
      <div class="product-cart-btn">
                <button data-product-id="<?php echo $product_id; ?>" class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
                <button  data-product-id="<?php echo $product_id; ?>"  class="btn-floating waves-effect waves-light red wishlist-btn">
                <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button></div>
    </div>
  </div>
</div>