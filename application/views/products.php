<div class="main">

<!--  Slider starts here -->
<div class="row">
  <div class="productBanner">
      <img src="<?php echo BASE_url();?>html/images/category/<?php echo $categoryData["mc_image"]; ?>" class="responsive-img" width="100%"/>
  </div>    
</div>      
<!--  Slider Over here -->

<!--  categoriy starts here -->
<!-- <div class="row cat-img-box">
	<img src="<?php // echo base_url(); ?>html/images/m1.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m2.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m3.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m4.jpg" class="col s6 m3 home-cat-box">
</div> -->

<!--  categoriy Over here -->

<!--==========  Satrt Products Area  Here  =============-->
<div class="row productDisplay-area">
  <div class="col m3">
    <div class="white categories-area">
      <div>
        <h5>Main Categories</h5>
      </div>
      <div class="categories-view">
      <ul class="accordion-menu">
        <li>
          <?php foreach ($categoryList["catList"] as $key => $mainCatRow) { ?>
          <li class="nav-bar-dropdown single-category-item" data-target="category-<?php echo $mainCatRow['mc_id']; ?>">
            <div class="dropdown-menu-container single-category z-depth-2" id="category-<?php echo $mainCatRow['mc_id']; ?>"></div>
              <?php $this->load->view("subCatBox",$mainCatRow); ?>
          </li>
          <?php } ?>

          <?php foreach($categoryList["moreList"] as $key => $mainCatRow){ ?>
          <?php $this->load->view("subCatBox",$mainCatRow); ?>
          <?php } ?>
        </li> 
        </ul>
      </div>
    </div>
  </div>

  <div class="col m9">
    <div class="product-view">
      <div class="filter-area">
        this is for filter area.
      </div>
      <div class="product-content-area">
        
  <div class="uimax-block-section-26 pdt-80 pdb-80">
    <div class="row">
        <div class="product-list">
           <?php foreach ($productList as $productKey => $productRow) { ?>
              <?php $this->load->view("product-frame",$productRow); ?>
              <?php } ?>        
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Over Main Class here-->
</div>