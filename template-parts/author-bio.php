<?php

<div class="media author-box">

    <div class="media-figure">
    <a href="<?php the_author_meta('user_image'); ?>" class="author-image">
       <img src="/wp-content/uploads/author-image.png" alt="Author Image" />
    </a>
    </div>

    <div class="media-body">
        <h2><?php the_author_posts_link(); ?></h2>
        <p><?php the_author_meta('description'); ?></p>
        <div class="author-icons">
            <a href="<?php the_author_meta('user_url'); ?>" class="author-website">
                <img src="/wp-content/uploads/icon-link.png" alt="Website" />
            </a>
            <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter">
                <img src="/wp-content/uploads/icon-twitter.png" alt="Twitter" />
            </a>
            <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook">
                <img src="/wp-content/uploads/icon-facebook.png" alt="Facebook" />
            </a>
        </div>
    </div>

</div>