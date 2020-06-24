<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-lg-12 mt-5">

      <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail(); ?></span>
      <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>

        <hr>

        <h1 class="mt-5"><?php the_title(); ?></h1>
        <p class="lead">By <a href="#"><?php echo get_the_author(); ?></a></p>

        <hr>

        <p>Posted on <?php the_date(get_option('date_format')); ?></p>

        <p>
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),40);
          } ?>        	
        </p>
        <a class="btn btn-primary mt-3" href="<?php the_permalink() ?>">Read more</a>       
      </div>
      <hr class="specialHr">
      <?php endwhile;            

      endif; ?> 
    </div>
  </div>

<?php get_footer(); ?>
