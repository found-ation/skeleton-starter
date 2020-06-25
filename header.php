<!DOCTYPE html>
<html>
<head>
   <meta charset="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php wp_head();?>
</head>

<body>
  <?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <span class="navbar-brand">
      <?php if( has_custom_logo() ) { 
      the_custom_logo();
      } else { ?>
      <li class="menu-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
    <?php } ?>
      </span>
      <button id="site-navigation" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>     
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
          <?php
    if ( has_nav_menu( 'primary' ) ) {

      wp_nav_menu(
        array(
          'container'  => '',
          'items_wrap' => '%3$s',
          'theme_location' => 'primary',
          )
        );

      } elseif ( ! has_nav_menu( 'expanded' ) ) {

        wp_list_pages(
          array(
          'match_menu_classes' => true,
          'show_sub_menu_icons' => true,
            'title_li' => false,
          )
        );

      }
    ?> 
  </ul>
      </div>
    </div>
  </nav>
