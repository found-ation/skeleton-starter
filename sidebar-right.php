<?php
/*
Template Name: Sidebar Right
Template Post Type: post, page, portfolio, news, documents
*/

  get_header();

  while (have_posts()){
    the_post(); 
  ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 mt-5">

      <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail(); ?></span>
      <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>        

        <h1 class="mt-4"><?php the_title(); ?></h1>

        <p class="lead">By <a href="#"><?php echo get_the_author(); ?></a></p>

        <hr>

        <p>Posted: <?php the_date(get_option('date_format')); ?></p>

        <hr>

        <?php 
        the_content(); 
         }; 
        ?>

        <hr class="specialHr">

        <?php comment_form(); ?>

      </div>

      <div class="col-md-2">
      <?php dynamic_sidebar( 'primary' ); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>