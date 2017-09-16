<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Craftkrazy - <?php echo $pageTitle; ?></title>
    
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
          
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Muli|Lora|Raleway" rel="stylesheet">
    
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>
<body>
<header>
  
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content mega">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<nav class="white hide-on-med-and-down show-on-medium-and-down">
  <div class="row top-nav-container">

  <div class="top-nav-links">
    <div class="top-nav-item"><a href="<?php base_url(); ?>home">Home</a></div>
    <div class="top-nav-item"><a href="#">Contact</a></div>
    <div class="top-nav-item"><a href="#">Sell on Craftkrazy</a></div>
    <?php if(!$this->session->userdata('user')){?>
    <div class="top-nav-item"><a href="#" id="userBtn-mobile">Login</a></div>
    <?php } ?>
     
   
  </div>

<!-- USER PRODILE AREA START HERE -->
<?php if($this->session->userdata('user')){?>
  <div id="profile-area" class="userProfile-area">
    <ul>
      <li class="UserName"><a href="#!" readonly="true"><?php echo $this->session->userdata('user')?></a></li>
      <li><a href="<?php echo base_url(); ?>myAccount">My Account <span class="fa fa-user right" aria-hidden="true"></span></a></li>
      <li><a href="<?php echo base_url(); ?>user/logout">Logout <span class="fa fa-sign-out right" aria-hidden="true"></span></a></li>
    </ul>
  </div>
  <?php } ?>
<!-- USER PRODILE AREA OVER HERE -->
  <div class="nav-wrapper" style="overflow: hidden;">
    <div class="col m3 logo-area">
    <a href="<?php echo base_url(); ?>home" class="main-logo"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>
    </div>

    <div class="search-area col m4 hide-on-med-and-down container-box-search">
   <!--  <form>
      <input type="search" name="Search" placeholder="Search" class="search-box">
    </form> -->
    <div class="ui-widget">
    <form class="search" action="#!" method="post" name="form">  
      <div class="field" >
        <input type="text" class="input-search" id="input-search" name="input-search" required>
        
        <label for="input-search">Search</label>
        <span class="fa fa-search search-icon" aria-hidden="true"></span>
      </div> <!-- /field -->
      <div id="searchData" class="searchResult-area"></div>
    </form>
    </div>
    </div>
    
    <div class="cart-area col m5">
    <?php if($this->session->userdata('user')){ ?>
        <span class="user right col m2 hide-on-med-and-down">
        <a href="#!"><i id="userBtn1" class="fa fa-user-circle-o fa-2x userProfile" aria-hidden="true"></i></a>
        </span>
        <?php } ?>
        <span class="right cart-bag col m2">
        <a href="<?php echo base_url() ?>shoppingCart"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i><span class="cart-bedge"><?php if($this->session->userdata("shoppingCart")){ echo sizeof($this->session->userdata("shoppingCart")); }else{ echo 0; } ?></span></a></span>
    </div>
  </div>

     <ul id="slide-out" class="side-nav">
      <li>
        <div class="user-view">
          <div class="user-area-background">
          <div class="row user-area">
            <div class="user left col m4">
            <?php if($this->session->userdata('user')){ ?>          
              <a href="#!"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i><?php echo $this->session->userdata('user');?></a>
              <?php } ?>
            </div>
            <div class="col m8 left">
              <p style="color: #848688;line-height: 2rem;">Mr. Craft User</p>
            </div>
          </div>  
            <div class="row searbar-area">
            <div class="search-area">
              <form>
                <input type="search" name="Search" placeholder="Search" class="mobile-search-box">
              </form>
            </div>
            </div>
          </div>
        </div>
    </li>
    <li>
    </li>
      <li><a href="<?php echo base_url(); ?>home">Home</a></li>
      <li><a href="#!">Products</a></li>
      <li><a href="#!">Raw Materials</a></li>
      <li><a href="#!">Contact</a></li>
    </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</nav>

<nav class="navigation-menu-area hide-on-med-and-down z-depth-1">
  <div class="nav-wrapper container">

  <a href="<?php echo base_url(); ?>home" class="main-logo hide-on-med-and-up"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>
 
    <ul id="slide-out" class="side-nav">
      <li>
        <div class="user-view">
            <div class="background">
                <img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy" class="responsive-img mobile-log">
            </div>
        </div>

    </li>
      <li><a href="<?php echo base_url(); ?>home">Home</a></li>
      <li><a href="#!">Products</a></li>
      <li><a href="#!">Raw Materials</a></li>
      <li><a href="#!">Contact</a></li>
    </ul>
    
    <ul class="left hide-on-med-and-down desktop-menu">

      <?php foreach ($categoryList["catList"] as $key => $mainCatRow) { ?>
      <li class="nav-bar-dropdown single-category-item" data-target="category-<?php echo $mainCatRow['mc_id']; ?>">
        <a href="#!"><?php echo $mainCatRow["mc_name"]; ?></a>
        <div class="dropdown-menu-container single-category z-depth-2" id="category-<?php echo $mainCatRow['mc_id']; ?>">
        
          <?php $this->load->view("mainCatBox",$mainCatRow); ?>
        </div>
      </li>
      <?php } ?>
      
      <li class="nav-bar-dropdown" data-target="moreCategories">
        <a href="#!">More<i class="material-icons right">expand_more</i></a>
        <div class="dropdown-menu-container z-depth-2" id="moreCategories">
          <?php foreach($categoryList["moreList"] as $key => $mainCatRow){ ?>
          <?php $this->load->view("mainCatBox",$mainCatRow); ?>
          <?php } ?>
        </div>
      </li>
      <!--
      <li><a href="#!">Home</a></li>
      <li class="nav-bar-dropdown" data-target="productCategories">
        <a href="#!">Products<i class="material-icons right">expand_more</i></a>
        <div class="dropdown-menu-container z-depth-2" id="productCategories">
          <?php echo $productNav; ?>
        </div>
      </li>
      <li><a href="#!">Raw Materials</a></li>
      <li><a href="#!">Contact</a></li>
      -->
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
</header>
