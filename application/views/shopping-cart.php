<div class="main">

<!--  Slider starts here -->
<!-- <div class="row">
      <img src="<?php echo BASE_url();?>html/images/products-banner.jpg" class="responsive-img">
</div>
 -->
<div class="row">
<div class="shopping-cart-area">
  <!-- <h1>Shopping Cart</h1> -->

<div class="shopping-cart">

  <div class="column-labels cartArea-header">
    <label class="product-image">Product</label>
    <label class="product-details">Product Name &  Description</label>
    <label class="product-price" style="text-align: right;">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
  <?php foreach($productList as $key=>$productRow){ ?>
  <?php $this->load->view("product-cart-row",$productRow); ?>
  <?php } ?>
</div>
</div>
</div>

<div class="checkoutArea">
  <div class="checkout-area">
  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">50.00</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">00.00</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total grand-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>

    <div class="row checkout-btn-area">
      <button class="btn waves-effect waves-light checkout-btn" type="submit" name="action"><i class="material-icons left">shopping_basket</i> Procced to Checkout
      <i class="material-icons right">shopping_basket</i>
      </button>
      
    </div>
  </div> 
  </div> 
</div>
</div>