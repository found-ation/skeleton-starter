<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-4">404 Error</h1>

        <p>WOW! What happened there! You tried to find a page that doesn't exist!</p>

        <a class="btn btn-primary btn-lg mb-5" href="<?php echo esc_url( home_url( '/' ) ); ?>">Return to Home Page</a>
        
      </div>
    </div>
  </div>

<?php get_footer(); ?>