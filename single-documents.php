<?php

/*
Template Name: Full Width
Template Post Type: documents
*/

get_header(); ?>

	<?php
	while (have_posts()){
		the_post(); 
	?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">

      <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail(); ?></span>
      <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>

        <hr>

        <h1 class="content-header mt-4"><?php the_title(); ?></h1>
        <p class="lead">By <a href="#"><?php echo get_the_author(); ?></a></p>

        <hr>

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
        
        <?php
        if (comments_open()){
           comments_template();
        }

        if (have_comments()) :

        endif;?>

        <hr class="specialHr">

    <?php function comment_form_tweaks ($fields) {
    //add placeholders and remove labels
    $fields['author'] = '<input id="author" name="author" value="" placeholder="Name*" size="30" maxlength="245" required="required" type="text">';

    $fields['email'] = '<input id="email" name="email" type="email" value="" placeholder="Email*" size="30" maxlength="100" aria-describedby="email-notes" required="required">'; 

    //unset comment so we can recreate it at the bottom
    unset($fields['comment']);

    $fields['comment'] = '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Comment*" required="required"></textarea>';

    //remove website
    unset($fields['url']);

    return $fields;
    }

     ?>

      </div>
    </div>
  </div>


<?php get_footer(); ?>