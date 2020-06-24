<?php wp_footer(); ?>


                <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
                    <div class="container">
                    	<hr class="footerHr">
                        <div class="row mt-5">
                            <div class="col-lg-3">
                                <div class="footer-brand lead">iDevice</div>
                                <div class="mb-3">Build better websites</div>
                                <div class="icon-list-social mb-5">
                                  <a target="_blank" href="https://github.com/found-ation"><i class="fab fa-github-alt text-white fa-7x"></i></a>  
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Posts</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'post'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>                                         
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Portfolio</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'portfolio'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Docs</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'news'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Pages</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'document'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5">
                            <div class="container">
						      <p class="m-0 text-center text-white">Copyright &copy; <?php bloginfo( 'name' ); ?> 2019 - <?php the_time('Y'); ?></p>
						    </div>
                        </div>
                    </div>
                </footer>
</body>
</html>
