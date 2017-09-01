      <div class="item">
        <div class="product-item">
          <div class="pic-wrapper">
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
                <h2 class="name"><a href="javascript:void(0)"><?php echo $product_name; ?></a></h2>
                <div class="price">INR <?php echo $discounted_price; ?></div>
                <div class="old-price">INR <?php echo $price; ?></div>
                <button class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
               <button class="btn-floating waves-effect waves-light red">
                  <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
              <span class="sale">sale</span>
              <!-- <i class="fa fa-shopping-cart btn btn-add-cart" aria-hidden="true"></i>
              <a href="javascript:void(0)" class="btn btn-wishlist">Wishlist</a> -->
            </div>
          </div>