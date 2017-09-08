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

<nav class="white hide-on-med-and-down" style="border-bottom:2px solid #0b99dd;">
  <div class="row top-nav-container">


  <div class="nav-wrapper" style="overflow: hidden;">
    <div class="col m9 logo-area">
    <a href="#!" class="main-logo"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>    
    </div>
    <?php if($this->session->userdata('admin')) { ?>
  echo ' <div class="col m3 logo-area">
    <a href="<?php echo base_url(); ?>seller/logout"> <i class="fa fa-power-off logout" aria-hidden="true"></i></a>   
    </div>';

    <?php } ?>
  </div>   
  </div>
</nav>


</header>

