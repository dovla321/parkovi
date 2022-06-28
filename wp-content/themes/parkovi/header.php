<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">  
<head>

  <meta charset="<?php bloginfo('charset');?>">
  <title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>


  <!---owle courasel---->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!---------------------->
 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <?php wp_head() ?>


 </head>
 

 <body id="page-top" <?php body_class();?> >
  
  
  <div class="page-wrap">
    
    <nav class="navbar navbar-expand-lg navbar-default fixed-top " id="mainNav">
        <div class="container">
          
           <div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
            <div class="logo animsition-link "><a href="<?php echo home_url(); ?>"><img class="animate__animated animate__backInDown" src="<?php echo get_template_directory_uri(); ?>/images/JP_Parkovi_Mostar_d.o.o__4_-removebg-preview" alt="Parkovi Mostar"></a></div>
              
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <?php
                      wp_nav_menu( array(
                          'theme_location'  => 'primary',
                          'depth'           => 2,
                          'container'       => 'div',
                          'container_class' => 'collapse navbar-collapse',
                          'container_id'    => 'bs-example-navbar-collapse-1',
                          'menu_class'      => 'navbar-nav ml-auto animsition-link',
                          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'          => new WP_Bootstrap_Navwalker(),
                      ) );
                ?>

                

                <div class="logo2-header animate__animated animate__backInDown">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/Logo-Mostar.png" alt="Parkovi Mostar">
                </div>
            </div>

            
            
        </div>
    </nav>
  


 
