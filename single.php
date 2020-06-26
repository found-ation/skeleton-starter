<?php

/*
Template Name: Full Width
Template Post Type: post
*/

get_header();

	while (have_posts()){
		the_post(); 
	?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">

      <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail(); ?></span>
      <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>

        <hr>

        <h1 class="mt-4"><?php the_title(); ?></h1>
        <p class="lead">By <a href="#"><?php echo get_the_author(); ?></a></p>

        <hr>

        <p>Posted: <?php the_date(get_option('date_format')); ?></p>

        <?php 
	       the_content(); 
	       }; 
	      ?>

      <hr class="specialHr">
        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 blurb-margin">

      <?php dynamic_sidebar( 'blurb' ); ?>

      </div>
    </div>
  </div>

    <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <hr class="specialHr">

      <?php comment_form(); ?>

      <?php
        $args = array(
            'date_query' => array(
                'after' => '26 weeks ago',
                'before' => 'tomorrow',
                'inclusive' => true,
        $comments_args = array(
        'label_submit' => __( 'Send', 'skeleton-starter' ),
        'title_reply' => __( 'Write a Reply or Comment', 'skeleton-starter' ),
            ),
        ));
         
        $comments = get_comments( $args );
        foreach ( $comments as $comment ) {
        }
      ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>