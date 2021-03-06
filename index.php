<?php get_header(); ?>
  
  	<?php
	while (have_posts()){
		the_post(); 
	?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-3">

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
        
      </div>
    </div>
  </div>

<?php get_footer(); ?>
