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
          

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
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
<nav class="white">
  <div class="nav-wrapper container">
    <a href="#!" class="main-logo"><img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy"></a>
     <ul id="slide-out" class="side-nav">
     <li>
        <div class="user-view">
            <div class="background">
                <img src="<?php echo base_url(); ?>html/images/Craftkrazy-logo.png" alt="Craftkrazy" class="responsive-img mobile-log">
            </div>
        </div>
    </li>

      <li><a href="#!">Home</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Products<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">First</a></li>
                <li><a href="#!">Second</a></li>
                <li><a href="#!">Third</a></li>
                <li><a href="#!">Fourth</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="#!">Raw Materials</a></li>
      <li><a href="#!">Contact</a></li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li><a href="#!">Home</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Products<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="#!">Raw Materials</a></li>
      <li><a href="#!">Contact</a></li>
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">First</a></li>
        <li><a href="#!">Second</a></li>
        <li><a href="#!">Third</a></li>
        <li><a href="#!">Fourth</a></li>
      </ul>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  
  </div>
</nav>
</header>