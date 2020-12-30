<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Paradise Fitness Club</title>

  <link rel="shortcut icon" href="img/logo-red.jpg" type="image/x-icon">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- STYLESHEET -->
  <!-- <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css"> -->
  <?php wp_head(); ?>

  <!-- ICON LIBRARY -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">

  <!-- SLICK JS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <!-- ANIMATE STYLE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- AOS SCROLL -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




</head>



<header class='row header'>

  <div class="col-md-3 col-sm-4">
    <div class="logo">
      <a href='index.php'>
        <img src="<?php echo get_theme_mod('logo'); ?>" alt="main-logo">
      </a>
    </div>
  </div>

  <div class="col-md-3  navbar-cta">
    <div class="locate locate-header">
      <i class="fi-xnluxl-map-marker"></i>
      Locate us : <a href="<?php echo get_theme_mod('header_address_link'); ?>"><?php echo get_theme_mod('header_address'); ?></a>
    </div>
    <div class="call">
      <i class="fi-xnsuxl-smartphone-solid"></i>
      <span>Call :</span><a href="tel:<?php echo get_theme_mod('header_number'); ?>"><?php echo get_theme_mod('header_number'); ?></a>

    </div>
  </div>



  <nav class="col-md-6 navbar">

<div class="hamburgers">
  <div class="ham ham-open animate__animated animate__fadeIn" id="ham-open">
    <i class="fi-xwluxl-three-bars-wide"></i>
  </div>
  <div class="ham ham-close animate__animated animate__rotateIn" id="ham-close">
    <i class="fi-xtluxl-times-thin"></i>
  </div>
</div>
<div class="nav-links" id="nav-links">
  <ul>
  <?php wp_nav_menu( array( 'theme_location' => 'Main_menu' ) ); ?>
      <!-- <ul class="animate__animated animate__fadeIn">
       <?php wp_nav_menu( array( 'theme_location' => 'Dropdown_menu' ) ); ?> 
      </ul> -->
    
  </ul>
</div>
</nav>

 

</header>

<div class="mob-nav-links">
<?php wp_nav_menu( array( 'theme_location' => 'Main_menu' ) ); ?>
    <ul class="animate__animated animate__fadeDown">
    <?php wp_nav_menu( array( 'theme_location' => 'Dropdown_menu' ) ); ?>
    </ul>
  </ul>
</div>



<body>