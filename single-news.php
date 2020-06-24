<?php get_header(); ?>

	<?php
	while (have_posts()){
		the_post(); 
	?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">

        <span class="img-fluid rounded image-contained"><?php the_post_thumbnail(); ?></span>

        <hr>

        <h1 class="mt-4"><?php the_title(); ?></h1>
        <p class="lead">By <a href="#"><?php echo get_the_author(); ?></a></p>

        <hr>

        <p>Posted: <?php the_date(get_option('date_format')); ?></p>

        <?php 
	    the_content(); 
	       }; 
	    ?>
        
      </div>
    </div>
  </div>

<?php get_footer(); ?>
