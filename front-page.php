<?php get_header(); ?>

    <?php 
    $homepageContent = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'post'
    ));
    while($homepageContent->have_posts()) {
    $homepageContent->the_post(); ?>
  <div class="container">
    <header class="jumbotron my-4">
      <h1 class="display-3"><?php the_title(); ?></h1>
      <p class="lead">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),33);
          } ?>      
      </p>
      <a href="<?php the_permalink() ?>" class="btn btn-primary btn-lg">Read more!</a>
    </header>
    <?php } ?>

    <div class="row text-center">
    <?php 
    $homepageContent = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => 'portfolio'
    ));
    while($homepageContent->have_posts()) {
    $homepageContent->the_post(); ?>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail( 'medium', array( 'class' => 'medium', 'data-id' => 1000 ) ); ?></span>
            <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
          <div class="card-body">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text text-left">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),45);
          } ?>
            </p>
          </div>
          <div class="card-footer">
            <a href="<?php the_permalink() ?>" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    
  <hr class="specialHr">
  <h1 class="content-header mt-4">Latest News</h1>
    <?php 
    $homepageContent = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'news'
    ));
    while($homepageContent->have_posts()) {
    $homepageContent->the_post(); ?>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php the_title(); ?></h2>
        <p class="lead">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),50);
          } ?>
     <p>
      <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More!</a>
      </p>
      </p>
      </div>
      <div class="col-md-5">
            <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail( 'news-thumbnail' ); ?></span>
            <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
      </div>
  <?php } ?>
    </div>

  <hr class="specialHr">

    <h1 class="content-header mt-4">Latest Docs</h1>
    <?php 
    $homepageContent = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'documents'
    ));
    while($homepageContent->have_posts()) {
    $homepageContent->the_post(); ?>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php the_title(); ?></h2>
        <p class="lead">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),50);
          } ?>
     <p>
      <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More!</a>
      </p>
      </p>
      </div>
      <div class="col-md-5">
            <span class="img-fluid rounded image-contained mb-3"><?php the_post_thumbnail( 'news-thumbnail' ); ?></span>
            <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
      </div>
  <?php } ?>
    </div>

  <hr class="specialHr">

        <div class="container">
          <div class="row gap-y">
                <?php 
                  $homepageContent = new WP_Query(array(
                  'posts_per_page' => 6,
                  'post_type' => 'articles'
                  ));
                  while($homepageContent->have_posts()) {
                  $homepageContent->the_post(); ?>
            <div class="col-md-6 col-lg-4">
              <div class="card d-block border hover-shadow-6 mb-6">
                <span class="card-img-top image-contained mb-3"><?php the_post_thumbnail( 'news-thumbnail' ); ?></span>
                <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
                <div class="p-6 text-center">
                  <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">News</a></p>
                  <h5 class="mb-0"><a class="text-dark" href="#">
                    <?php if (has_excerpt()) {
                    the_excerpt();
                    } else {
                    echo wp_trim_words(get_the_content(),50);
                    } ?>                  
                  </a>
                </h5>
                </div>
              </div>

            </div>
           <?php } ?>
          </div>
        </div>

         <div class="card text-white bg-success my-5 py-4 text-center">
            <div class="card-body">
              <p class="lead text-white m-0">This is a perfect eye catching box to market your product or services.</p>
            </div>
         </div>

    <hr class="featurette-divider">
    
    <?php 
    $homepageContent = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'marketing'
    ));
    while($homepageContent->have_posts()) {
    $homepageContent->the_post(); ?>
    <div class="text-center">
    <h2><?php the_title(); ?></h2>
    <p class="col-md-10 mx-auto lead font-weight-normal">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),45);
          } ?>    
    </p>
    <a href="<?php the_permalink() ?>" class="btn btn-lg btn-outline-primary mb-3">Browse themes</a>
  </div>
  <?php } ?>
  </div>

</div>

<?php get_footer(); ?>