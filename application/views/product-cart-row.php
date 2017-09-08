<div class="product" id="product-<?php echo $product_id; ?>">
    <div class="product-image">
      <img src="<?php echo base_url(); ?>html/images/products/<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="pic">
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $product_name; ?></div>
      <p class="product-description"><?php echo $description; ?></p>
    </div>
    <div class="product-price"><?php echo $discounted_price; ?></div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button data-product-id='<?php echo $product_id; ?>' class="remove-product">
        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
      </button>
    </div>
    <div class="product-line-price"><?php echo $discounted_price; ?></div>
  </div>