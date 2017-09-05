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

<!-- 
<div class="blue top-header">
  <div class="container">
    <ul>
      <li><a href="#!"><span class="fa fa-facebook-square" aria-hidden="true"></span></a></li>
      <li><a href="#!"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
      <li><a href="#!"><span class="fa fa-youtube-play" aria-hidden="true"></span></a></li>
      <li><a href="#!"><span class="fa fa-pinterest-square" aria-hidden="true"></span></a></li>
      <li class="right">
      <span class="search-area">
          <form action="" class="search">
            <div class="field">
              <input type="text" class="input-search" id="input-search" name="input-search" required>
              <label for="input-search"><span class="fa fa-search"></span>&nbsp;Search</label>
            </div> <!-- /field -->
         <!-- </form>
      </span>
      </li>
    </ul>
  </div>
</div> -->

<header>
  
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content mega">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<nav class="white hide-on-med-and-down">
  <div class="row top-nav-container">

  <div class="top-nav-links">
    <div class="top-nav-item"><a href="#">Home</a></div>
    <div class="top-nav-item"><a href="#">Contact</a></div>
    <div class="top-nav-item"><a href="#">Sell on Craftkrazy</a></div>
    <div class="top-nav-item"><a href="#">Contact</a></div>
  </div>

  <div class="nav-wrapper" style="overflow: hidden;">
    <div class="col m3 logo-area">
    <a href="#!" class="main-logo"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>
    </div>

    <div class="search-area col m5">
    <form>
      <input type="search" name="Search" placeholder="Search" class="search-box">
    </form>
    </div>
    
    <div class="cart-area col m4">
        <span class="user right col m2">
        <a href="#!"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></span></a>
        </span>
        <span class="right cart-bag col m2">
        <a href="#!"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i><span class="cart-bedge">1</span></a></span>
    </div>
   
  </div>
</nav>

<nav class="navigation-menu-area  z-depth-1">
  <div class="nav-wrapper container">

  <a href="#!" class="main-logo hide-on-med-and-up"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>
 
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

