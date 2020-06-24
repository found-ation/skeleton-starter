<?php

get_header();


$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">   
         <div class="alert alert-dark">
            <h2 class="main-title"><?php echo $curauth->nickname; ?></h2> 
              <div class="author-photo">
                <?php echo get_avatar( $curauth->user_email , '90 '); ?>
              </div>
            <hr>
            <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a>
            <hr>
            <strong>Bio:</strong> <?php echo $curauth->user_description; ?></p>
        </div>     
            <h2 class="main-title">Popular posts:</h2>
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div class="jumbotron-header">
                  <h3><?php the_title(); ?></h3>
                  <p class="posted-on"><small><strong>Posted on: <?php the_time('d M Y'); ?></strong></small></p> 
                  <?php the_excerpt(); ?>
                <a class="btn btn-primary" href="<?php the_permalink() ?>">More <i class="fas fa-angle-double-right"></i></a> 
               </div> 
               <?php endwhile;?>

	       <ul class="pagination pagination-lg"> 
	          <?php echo paginate_links();?>
	       </ul>
 
                <?php else: ?>

                 <p><?php _e('No posts by this author.'); ?></p>
 
         <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
