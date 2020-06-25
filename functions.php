<?php

function skeleton_scripts() {
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'grid_style', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'reboot_style', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
    wp_enqueue_script( 'bootrap_script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'skeleton_scripts' );

function skeleton_features () {
    add_theme_support ('title-tag');
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'portfilio-thumbnail', 600, 325 );
    add_image_size( 'news-thumbnail', 600, 325 );
    add_image_size( 'marketing-thumbnail', 600, 325 );
    add_image_size( 'documents-thumbnail', 600, 325 );
}
add_action('after_setup_theme','skeleton_features');

function skeleton_custom_logo_setup() {
 $defaults = array(
 'height'      => 107,
 'width'       => 132,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'skeleton_custom_logo_setup' );

function skeleton_menus() {

    $locations = array(
        'primary'  => __( 'Main Menu', 'skeleton-starter' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'skeleton_menus' );

add_action( 'widgets_init', 'skeleton_sidebar' );

function skeleton_sidebar() {
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Main Sidebar' ),
            'description'   => __( 'Place items from the available widgets section to the left.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s mt-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="page-title">',
            'after_title'   => '</h3>',
        )
    );
}

function skeleton_post_query( $args = array() ) {

    $args['post_type'] = 'downloads';
	$args['post_type'] = 'documents';
    $args['post_type'] = 'news';
	$args['post_type'] = 'post';
	$args['post_type'] = 'page';

    return $args;

}

add_filter( 'query_make_posts', 'skeleton_post_query', 12, 1 );

function author_custom_post_types( $query ) {
  if( is_author() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'portfolio',
     'post', 'news',
     'post', 'documents',   
     'post', 'post',
     'post', 'page'
        ));
      return $query;
    }
}
add_filter( 'pre_get_posts', 'author_custom_post_types' );

if ( !function_exists( 'skeleton_pagination' ) ) {
  
  function skeleton_pagination() {
    
    $prev_arrow = is_rtl() ? '>>' : '<<';
    $next_arrow = is_rtl() ? '<<' : '>>';
    
    global $wp_query;
    $total = $wp_query->max_num_pages;
    $big = 999999999;
    if( $total > 1 )  {
       if( !$current_page = get_query_var('paged') )
         $current_page = 1;
       if( get_option('permalink_structure') ) {
         $format = 'page/%#%/';
       } else {
         $format = '&paged=%#%';
       }
      echo paginate_links(array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => $format,
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $total,
        'mid_size'    => 4,
        'type'      => 'list',
        'prev_text'   => $prev_arrow,
        'next_text'   => $next_arrow,
       ) );
    }
  }
  
}

// Profile Image

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://localhost/git/wp-content/uploads/2020/06/profile.jpg';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}



