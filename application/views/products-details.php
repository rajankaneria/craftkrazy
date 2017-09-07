<div class="main">
<!-- <script type="text/javascript" src="https://cdn.rawgit.com/jackmoore/zoom/master/jquery.zoom.min.js"></script> -->


<!--  categoriy starts here -->
<!-- <div class="row cat-img-box">
	<img src="<?php // echo base_url(); ?>html/images/m1.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m2.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m3.jpg" class="col s6 m3 home-cat-box">
	<img src="<?php // echo base_url(); ?>html/images/m4.jpg" class="col s6 m3 home-cat-box">
</div> -->

<!--  categoriy Over here -->

<!--==========  Satrt Products Area  Here  =============-->
<div class="product-details"> 
  <div class="row">
    <div class="col m4">
    <div class="row">
      <div class="col m12">
         <span class='zoom' id='zoom1' style="min-width: 420px;padding: 15px;">
      <img  id="mainProductImage"  src='<?php echo  base_url(); ?>html/images/products/<?php echo $productData["product_image"]; ?>' class="responsive-img" alt='Baby Wallper' style="height: 340px !important"/>
      </span>
      </div>
      <div class="col m12" style="padding: 0px;">
      
     <?php  foreach ($productData["productImageArray"] as $pro_image) {
      ?>
        <div class="col m4">
            <span class='zoom inner-zoom' id='zoom1'>
        <img  src='<?php echo  base_url(); ?>html/images/products/<?php echo $pro_image["image_name"]; ?>' class="responsive-img product-thumbnail" alt='Baby Wallper' style="cursor: pointer;"/>
        </span>
        </div>

      <?php     
     }?>
     


      </div>
    </div>
     
    </div>
    <div class="col m8 mainPoduct-area">
      <div class="productDescription-area">
        <div class="productName">
          <div class="product-main-detail">
          <span class="signle-product-name"><div class="product-text"><?php echo $productData["product_name"]; ?></div></span>
          <div class="product-seller"><div class="label">Seller</div><div class="seller-name"><?php echo $productData["contact_person"]; ?></div></div>  
          </div>
         <div class="product-category-list">Paper Craft > Quilling > Earings</div>
          <div class="row" style="margin-bottom: 0px; margin-top: 10px;">
            <div class="left">
              <p class="produce-price">Price</p><p class="price-amount"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $productData["discounted_price"]; ?></p>
            </div>
            <div class="left">
              <p class="product-original-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $productData["price"]; ?></p>
            </div>

            <div class="left">
              <p class="product-discount">%<?php echo round(100*($productData["price"] - $productData["discounted_price"])/$productData["price"]) ; ?> off</p>
            </div>
            
          </div>
        </div>

     
        <div class="product-description-content row">
          <div class="description-label">Description</div>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<?php echo $productData["description"]; ?></p>
        </div>
        <div class="product-highlight-details">
          
        </div>
        <div>
          
          <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="number"  class="validate" style="line-height: 3rem;">
                <label for="first_name">Qty</label>
              </div>
              <div class="col m4">
                <button class="btn blue" style="height: 60px;">Add to Cart</button>
              </div>
             </div>
            </form>
           <div class="col m12">
             <div ng-app="ratingsExample" ng-controller="ratingsCtrl as rc">
              <div ng-repeat="rating in rc.ratings">
                <label><span ng-bind="rating.label"></span> (<span ng-bind="rating.value"></span>/<span ng-bind="rating.max"></span>)</label>
                <!-- Star Rating Directive -->
                <star-rating ng-model="rating.value" max="rating.max" on-rating-select="rating.onSelect(selected)" read-only="rating.readOnly"></star-rating>   
              </div>
              
            </div>

           </div> 
           </div>   

        </div>
      </div>
      
    </div>  
  </div> 
  

  <div class="row review-container">
    <div class="col s12 review-tabs">
      <ul class="tabs">
        <li class="tab col s3 m2"><a class="active" href="#test1">Overview</a></li>
        <li class="tab col s3 m1"><a  href="#test2">Review</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12 m12 overview-content">
      <h5>OVERVIEW PRODUCT</h5>
      <p>This is a Product Overview conten area.</p>
    </div>
    <div id="test2" class="col s12 m12 review-content">
    <div class="review-heading">
    <h5>Give a Review </h5>
      
    </div>
      <div class="review-form">
            <form class="form-review">
             <div class="row">
                <div class="input-field">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Full Name</label>
                </div>
                <div class="input-field">
                      <div class="input-field">
                          <textarea id="textarea" class="materialize-textarea"></textarea>
                          <label for="textarea1"><wbr>Write Your Review</label>
                      </div>
                </div>
              </div>
                <div class="row">
                  <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
            </form>
          </div>
      </div>
    </div>
  </div>
  

 <!-- Related Products -->       

<div class="row">
<div class="col m12">
  <h4 class="related-product">Related Products :</h4>
</div>
<div><div class="row">
  <div class="uimax-block-section-26 pdt-80 pdb-80 related-product">
    
        <div class="product-list">
          <div class="item">
            <div class="product-item">
              <div class="pic-wrapper">
                <a href="javascript:void(0)" class="inner">
                  <img src="https://res.cloudinary.com/vuvit03/image/upload/v1477590599/product/fashion-1636868_1280.jpg" alt="" class="pic" />
                </a>
                <!-- <div class="pic-color">
                  <a href="javascript:void(0)" class="pick active" style="background-color:#000"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#FFFFFF;"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#323A45"></a>
                </div> -->
              </div>
              <div class="product-desc">
                <h2 class="name"><a href="javascript:void(0)">Product Name</a></h2>
                <div class="price">$40.05</div>
                <div class="old-price">$45.06</div>
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
          <div class="item">
            <div class="product-item">
              <div class="pic-wrapper">
                <a href="javascript:void(0)" class="inner">
                  <img src="https://res.cloudinary.com/vuvit03/image/upload/v1477770452/watch-1592164_1280_chinyq.jpg" alt="" class="pic" />
                </a>
                <!-- <div class="pic-color">
                  <a href="javascript:void(0)" class="pick active" style="background-color:#2196F3"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#FFFFFF;"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#323A45"></a>
                </div> -->
              </div>
              <div class="product-desc">
                <h2 class="name"><a href="javascript:void(0)">Slouchy Pullover Sweatshirt</a></h2>
                <div class="price">$40.05</div>
                <div class="old-price">$45.06</div>
                <button class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
               <button class="btn-floating waves-effect waves-light red">
                  <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
              <span class="sale">sale</span>
              <!-- <a href="javascript:void(0)" class="btn btn-add-cart">addcart</a>
              <a href="javascript:void(0)" class="btn btn-wishlist">Wishlist</a> -->
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="pic-wrapper">
                <a href="javascript:void(0)" class="inner">
                  <img src="https://res.cloudinary.com/vuvit03/image/upload/v1477770452/necktie-1209416_1280_k8hmwv.jpg" alt="" class="pic" />
                </a>
                <!-- <div class="pic-color">
                  <a href="javascript:void(0)" class="pick active" style="background-color:#2196F3"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#FFFFFF;"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#323A45"></a>
                </div> -->
              </div>
              <div class="product-desc">
                <h2 class="name"><a href="javascript:void(0)">Slouchy Pullover Sweatshirt</a></h2>
                <div class="price">$40.05</div>
                <div class="old-price">$45.06</div>
                <button class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
               <button class="btn-floating waves-effect waves-light red">
                  <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
              <span class="new">sale</span>
              <!-- <a href="javascript:void(0)" class="btn btn-add-cart">addcart</a>
              <a href="javascript:void(0)" class="btn btn-wishlist">Wishlist</a> -->
            </div>
          </div>
          
          <div class="item">
            <div class="product-item">
              <div class="pic-wrapper">
                <a href="javascript:void(0)" class="inner">
                  <img src="https://res.cloudinary.com/vuvit03/image/upload/v1477593286/product/beauty-725094_1280.jpg" alt="" class="pic" />
                </a>
                <!-- <div class="pic-color">
                  <a href="javascript:void(0)" class="pick active" style="background-color:#2196F3"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#FFFFFF;"></a>
                  <a href="javascript:void(0)" class="pick" style="background-color:#323A45"></a>
                </div> -->
              </div>
              <div class="product-desc">
                <h2 class="name"><a href="javascript:void(0)">Slouchy Pullover Sweatshirt</a></h2>
                <div class="price">$40.05</div>
                <div class="old-price">$45.06</div>
                <button class="btn blue white-text add-to-cart">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
               <button class="btn-floating waves-effect waves-light red">
                  <i class="fa fa fa-heart" aria-hidden="true"></i>
                </button>
              </div>
              <span class="new z-depth-3">sale</span>
              <!-- <a href="javascript:void(0)" class="btn btn-add-cart">addcart</a>
              <a href="javascript:void(0)" class="btn btn-wishlist">Wishlist</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div> 
<!-- Over Main Class here-->
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#zoom1').zoom();
});

/*====== star rating ======*/
(function() {
  'use strict';
  
  /**************************
   Star Ratings Directive JS
  **************************/
  function starRating() {
    return {
      restrict: 'EA',
      template:
        '<ul class="star-rating" ng-class="{readonly: readOnly}">' +
        '  <li ng-repeat="star in stars" class="star" ng-class="{filled: star.filled}" ng-click="toggle($index)" ng-mouseenter="paintStars($index)" ng-mouseleave="unpaintStars($index)">' +
        '  </li>' +
        '</ul>',
      scope: {
        ratingValue: '=ngModel',
        max: '=?', // optional (default is 5)
        onRatingSelect: '&?',
        readOnly: '=?'
      },
      link: function(scope, element, attributes) {
        if (scope.max == undefined) {
          scope.max = 5;
        }
        function updateStars() {
          scope.stars = [];
          for (var i = 0; i < scope.max; i++) {
            scope.stars.push({
              filled: i < scope.ratingValue
            });
          }
        };
        scope.toggle = function(index) {
          if (scope.readOnly == undefined || scope.readOnly === false){
            scope.ratingValue = index + 1;
            try {
              scope.onRatingSelect({selected: scope.ratingValue});
            } catch(e) {
              console.log(e); 
            }
          }
        };
        scope.unpaintStars = function ($index) {
            var items = element.find('li');
            items.removeClass('hoverFill').removeClass('hoverEmpty');
        };
        scope.paintStars = function ($index) {
            var items = element.find('li');
            for (var index = 0; index < items.length; index++) {
                var $star = angular.element(items[index]);
                if ($index >= index) {
                    $star.addClass('hoverFill');
                } else {
                    $star.addClass('hoverEmpty');
                }
            }
        };
        scope.$watch('ratingValue', function(oldValue, newValue) {
          if (newValue >= 0) {
            updateStars();
          }
        });
      }
    };
  }

  /****************************
   Additional Code For Example
  ****************************/
  var app = angular.module('ratingsExample', []);
  app.controller('ratingsCtrl', function() {
    var vm = this;
    vm.onSelect = function(selected) {
      console.log(selected);
      alert("You've select " + selected + '!');
    };
    vm.ratings = [
      {'label': 'Rate Your Start',
      'value': 0,
      'max': 5,
      'onSelect': false,
      'readOnly': false},
      /*{'label': 'Filled Example',
      'value': 2,
      'max': 5,
      'onSelect': false,
      'readOnly': false},
      {'label': 'More Stars Example',
      'value': 5,
      'max': 10,
      'onSelect': false,
      'readOnly': false},
      {'label': 'On Select Fn Example',
      'value': 0,
      'max': 5,
      'onSelect': vm.onSelect,
      'readOnly': false},*/
      /*{'label': 'Read Only Example',
      'value': 3,
      'max': 5,
      'onSelect': false,
      'readOnly': true},*/
    ];
  });
  
  app.directive('starRating', starRating);
  
 })();


</script>