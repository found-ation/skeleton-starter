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
          <ul class="pagination pagination-lg"> 
            <?php echo paginate_links();?>
         </ul>
    </div>
  </div>
            

<?php get_footer(); ?>