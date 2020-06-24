<?php

/**
 * Plugin Name: iDevice Toolbar
 * Plugin URI: https://leemiller.club/portfolio/idevice-toolbar/
 * Description: Adds a custom Toolbar extension to the Classic Editor.
 * Version: 1.2.1
 * Author: Lee Miller
 * Author URI: https://leemiller.club
 */

// Add Shortcode
function img_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'width' => '',
            'height' => '',
            'class' => '',
            'style' => '',
        ),
        $atts,
        'img'
    );

    // Return image HTML code
    return '<img src="' . $content . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" class="' . $atts['class'] . '" style="' . $atts['style'] . '"/>';

}
add_shortcode( 'img', 'img_shortcode' );

# Button Shortcode

function button_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
            'link' => '',
            'text' => '',
        ),
        $atts,
        'btn'
    );

    // Return button HTML code
    return '<a href=' . $atts['link'] . '" class="' . $atts['class'] . '" >' . $content . '</a>';

}
add_shortcode( 'btn', 'button_shortcode' );

# Alert Shortcode

function alert_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
        ),
        $atts,
        'alert'
    );

    // Return callout HTML code
    return '<div class="alert alert-' . $atts['class'] . '" >' . $content . '</div>';

}

add_shortcode( 'alert', 'alert_shortcode' );


# Font Awesome Shortcode

function awesome_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
        ),
        $atts,
        'fa'
    );

    // Return callout HTML code
    return '<i class="fa fa-' . $content . '" ></i>';

}

add_shortcode( 'fa', 'awesome_shortcode' );

# Lorum Ipsum filler shortcode 

function lorem_func($attr) {

 $txt = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";

shortcode_atts(
  array(
    'repeat' => 1,
 ), $attr
);

 return str_repeat($txt, $attr['repeat'] );

}

add_shortcode('lorem', 'lorem_func');

# Link Shortcode

function a_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
            'link' => '',
        ),
        $atts,
        'a'
    );

    // Return HTML code
    return '<a target="_blank" href="' . $atts['link'] . '" class="' . $atts['class'] . '" >' . $content . '</a>';

}

add_shortcode( 'a', 'f_shortcode' );


# Common Shortcode

function common_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
            'style' => '',
        ),
        $atts,
        'common'
    );

    // Return common HTML code
    return '<span class="' . $atts['class'] . '" style="' . $atts['style'] . '" >' . $content . '</span>';

}

add_shortcode( 'common', 'common_shortcode' );

// Post link Shortcode
function post_link_shortcode( $atts ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'link-to-post'
    );

    // Return only if has ID attribute
    if ( isset( $atts['id'] ) ) {
        return '<a href="' . get_permalink( $atts['id'] ) . '">' . get_the_title( $atts['id'] ) . '</a>';
    }

}
add_shortcode( 'link-to-post', 'post_link_shortcode' );

// Author link Shortcode

add_shortcode( 'current_author', 'current_author_shortcode' );
function author_init(){
 function current_author_shortcode() {
 return get_the_author_posts_link();
 }
}
add_action('init', 'author_init');


add_shortcode( 'authorlink', 'authorlink_my' );
function authorlink_my() {
$name = get_the_author();
$url = bp_core_get_user_domain( get_the_author_meta( 'Name' ) );
    
    return '<a href="'. $url .'" title="Go to author\'s profile">'. $name .'\'s Profile</a>';
}

// span class

function span_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'class' => '',
        ),
        $atts,
        'span'
    );

    // Return common HTML code
    return '<span class="' . $atts['class'] . '" >' . $content . '</span>';

}

add_shortcode( 'span', 'span_shortcode' );

//Toolbar plugin

// Secure DB submission WP Code
function foundation_toolbar_init()
{    // Form inputs to submit
    register_setting('foundation_toolbar_options', 'toolbar-p' );
    register_setting('foundation_toolbar_options', 'toolbar-hr' );
    register_setting('foundation_toolbar_options', 'toolbar-btn' );
    register_setting('foundation_toolbar_options', 'toolbar-alert' );
    register_setting('foundation_toolbar_options', 'toolbar-fa' );
    register_setting('foundation_toolbar_options', 'toolbar-common' );
    register_setting('foundation_toolbar_options', 'toolbar-clear' );
    register_setting('foundation_toolbar_options', 'toolbar-md' );
    register_setting('foundation_toolbar_options', 'toolbar-lg' );
    register_setting('foundation_toolbar_options', 'toolbar-pre' );
    register_setting('foundation_toolbar_options', 'toolbar-less' );
    register_setting('foundation_toolbar_options', 'toolbar-square' );
    register_setting('foundation_toolbar_options', 'toolbar-container' );
    register_setting('foundation_toolbar_options', 'toolbar-row' );
    register_setting('foundation_toolbar_options', 'toolbar-div' );
    register_setting('foundation_toolbar_options', 'toolbar-lorem' );
    register_setting('foundation_toolbar_options', 'toolbar-img' );
    register_setting('foundation_toolbar_options', 'toolbar-post' );
    register_setting('foundation_toolbar_options', 'toolbar-author' );
    register_setting('foundation_toolbar_options', 'toolbar-span' );
    register_setting('foundation_toolbar_options', 'toolbar-h1' );
    register_setting('foundation_toolbar_options', 'toolbar-h2' );
    register_setting('foundation_toolbar_options', 'toolbar-h3' );
    register_setting('foundation_toolbar_options', 'toolbar-h4' );
}
add_action('admin_init', 'foundation_toolbar_init');


// Show link message upon activation
function foundation_plugin_admin_notices() {
    if (!get_option('foundation_plugin_notice_shown') && !is_plugin_active('plugin-directory/tags.php')) {
    echo '<div class="updated"><p>Go to the <a href="options-general.php?page=toolbar">Toolbar Settings</a> page to choose which Tags you would like to add to the Text (HTML) mode of the WordPress editor.</p></div>';
    update_option('foundation_plugin_notice_shown', 'true');
    }
}
add_action('admin_notices', 'foundation_plugin_admin_notices');


// Add settings link on plugin page
function foundation_plugin_settings_link($links) { 
  $settings_link = '<a href="options-general.php?page=toolbar">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'foundation_plugin_settings_link' );

// Toolbar Options Page Content
function foundation_toolbar_options()
{
    
?>
<div class="wrap">
<alert>Toolbar Options</alert>
<p>Use the options below to choose which shortcodes and classes to use with the WordPress editor.</p>
<form action="options.php" method="post" id="toolbar-options-form">
<?php settings_fields('foundation_toolbar_options'); ?>
<input type="checkbox" id="toolbar-p" name="toolbar-p" value="1"<?php checked( 1, get_option('toolbar-p'));?> >
<label for="toolbar-p"><strong>Paragraph Tag:</strong> "<span><</span><span>p</span><span>></span><span><</span><span>/p</span><span>></span>"</label><hr />
<input type="checkbox" id="toolbar-hr" name="toolbar-hr" value="1"<?php checked( 1, get_option('toolbar-hr'));?> >
<label for="toolbar-hr"><strong>HR Tag:</strong> "<span><</span><span>hr</span><span>></span>"</label><hr />
<input type="checkbox" id="toolbar-btn" name="toolbar-btn" value="1"<?php checked( 1, get_option('toolbar-btn'));?> >
<label for="toolbar-btn"><strong>Button</strong></label><hr />
<input type="checkbox" id="toolbar-alert" name="toolbar-alert" value="1"<?php checked( 1, get_option('toolbar-alert'));?> >
<label for="toolbar-alert"><strong>alert</strong></label><hr />
<input type="checkbox" id="toolbar-fa" name="toolbar-fa" value="1"<?php checked( 1, get_option('toolbar-fa'));?> >
<label for="toolbar-fa"><strong>Font Awesome</strong></label><hr />
<input type="checkbox" id="toolbar-common" name="toolbar-common" value="1"<?php checked( 1, get_option('toolbar-common'));?> >
<label for="toolbar-common"><strong>Common</strong></label><hr />
<input type="checkbox" id="toolbar-clear" name="toolbar-clear" value="1"<?php checked( 1, get_option('toolbar-clear'));?> >
<label for="toolbar-clear"><strong>Clear</strong></label><hr />
<input type="checkbox" id="toolbar-md" name="toolbar-md" value="1"<?php checked( 1, get_option('toolbar-md'));?> >
<label for="toolbar-md"><strong>Medium Title</strong></label><hr />
<input type="checkbox" id="toolbar-lg" name="toolbar-lg" value="1"<?php checked( 1, get_option('toolbar-lg'));?> >
<label for="toolbar-lg"><strong>Large Title</strong></label><hr />
<input type="checkbox" id="toolbar-pre" name="toolbar-pre" value="1"<?php checked( 1, get_option('toolbar-pre'));?> >
<label for="toolbar-lg"><strong>Pre</strong></label><hr />
<input type="checkbox" id="toolbar-less" name="toolbar-less" value="1"<?php checked( 1, get_option('toolbar-less'));?> >
<label for="toolbar-less"><strong>&#60;</strong> - Can probably deselect this item, it's used with pre to display code.</label><hr />
<input type="checkbox" id="toolbar-square" name="toolbar-square" value="1"<?php checked( 1, get_option('toolbar-square'));?> >
<label for="toolbar-square"><strong>&#91;</strong> - Can probably deselect this item, it's used with pre to display code.</label><hr />
<input type="checkbox" id="toolbar-container" name="toolbar-container" value="1"<?php checked( 1, get_option('toolbar-container'));?> >
<label for="toolbar-container"><strong>Container</strong></label><hr />
<input type="checkbox" id="toolbar-row" name="toolbar-row" value="1"<?php checked( 1, get_option('toolbar-row'));?> >
<label for="toolbar-row"><strong>Row</strong></label><hr />
<input type="checkbox" id="toolbar-div" name="toolbar-div" value="1"<?php checked( 1, get_option('toolbar-div'));?> >
<label for="toolbar-div"><strong>Div</strong></label><hr />
<input type="checkbox" id="toolbar-lorem" name="toolbar-lorem" value="1"<?php checked( 1, get_option('toolbar-lorem'));?> >
<label for="toolbar-lorem"><strong>Lorum Filler</strong></label><hr />
<input type="checkbox" id="toolbar-img" name="toolbar-img" value="1"<?php checked( 1, get_option('toolbar-img'));?> >
<label for="toolbar-img"><strong>Image Shortcode</strong></label><hr />
<input type="checkbox" id="toolbar-post" name="toolbar-post" value="1"<?php checked( 1, get_option('toolbar-post'));?> >
<label for="toolbar-post"><strong>Post Link</strong></label><hr />
<input type="checkbox" id="toolbar-author" name="toolbar-author" value="1"<?php checked( 1, get_option('toolbar-author'));?> >
<label for="toolbar-author"><strong>Author Link</strong></label><hr />
<input type="checkbox" id="toolbar-span" name="toolbar-span" value="1"<?php checked( 1, get_option('toolbar-span'));?> >
<label for="toolbar-span"><strong>Span</strong></label><hr />
<input type="checkbox" id="toolbar-h1" name="toolbar-h1" value="1"<?php checked( 1, get_option('toolbar-h1'));?> >
<label for="toolbar-h1"><strong>h1</strong></label><hr />
<input type="checkbox" id="toolbar-h2" name="toolbar-h2" value="1"<?php checked( 1, get_option('toolbar-h2'));?> >
<label for="toolbar-h2"><strong>h2</strong></label><hr />
<input type="checkbox" id="toolbar-h3" name="toolbar-h3" value="1"<?php checked( 1, get_option('toolbar-h3'));?> >
<label for="toolbar-h3"><strong>h3</strong></label><hr />
<input type="checkbox" id="toolbar-h4" name="toolbar-h4" value="1"<?php checked( 1, get_option('toolbar-h4'));?> >
<label for="toolbar-h4"><strong>h4</strong></label><hr />



<p><input type="submit" name="submit" value="Save Settings" /></p>
</form>

</div>
<?php
}

// Add admin menu item for Toolbar Options Page
function foundation_toolbar_plugin_menu()
{
    add_options_page('Toolbar Settings', 'Foundation Toolbar', 'manage_options', 'toolbar', 'foundation_toolbar_options');
}
add_action('admin_menu','foundation_toolbar_plugin_menu');


// Extra Tags for the WP Text Editor
function foundation_toolbar_activate() {
    
// Get DB Info and set it to a variable 
    global $wpdb;

$table_name = $wpdb->base_prefix . 'options';

$toolbar_p_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-p'");
$toolbar_hr_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-hr'");
$toolbar_btn_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-btn'");
$toolbar_alert_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-alert'");
$toolbar_fa_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-fa'");
$toolbar_common_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-common'");
$toolbar_clear_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-clear'");
$toolbar_md_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-md'");
$toolbar_lg_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-lg'");
$toolbar_pre_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-pre'");
$toolbar_less_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-less'");
$toolbar_square_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-square'");
$toolbar_container_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-container'");
$toolbar_row_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-row'");
$toolbar_div_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-div'");
$toolbar_lorem_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-lorem'");
$toolbar_img_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-img'");
$toolbar_post_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-post'");
$toolbar_author_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-author'");
$toolbar_span_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-span'");
$toolbar_h1_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-h1'");
$toolbar_h2_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-h2'");
$toolbar_h3_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-h3'");
$toolbar_h4_value = $wpdb->get_var("SELECT option_value FROM $table_name WHERE option_name = 'toolbar-h4'");

    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript"> 
    <?php if ($toolbar_p_value == 1) {?>
    QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1 );
    <?php }
    if ($toolbar_hr_value == 1) {?>
    QTags.addButton( 'eg_hr', 'hr', '<hr class="specialHr">', '', '', 'hr tag', 21 );
    <?php }
    if ($toolbar_btn_value == 1) {?>
    QTags.addButton( 'eg_btn', 'button', '<a class="btn btn-primary" href="">', '</a>', '', 'button', 22 );
    <?php }
    if ($toolbar_alert_value == 1) {?>
    QTags.addButton( 'eg_alert', 'alert', '[alert class="red"]Alert Text[/alert]', '', '', 'alert', 23 );
    <?php }
    if ($toolbar_fa_value == 1) {?>
    QTags.addButton( 'eg_fa', 'fa', '[fa][/fa]', '', '', 'fa', 24 );
    <?php }
    if ($toolbar_common_value == 1) {?>
    QTags.addButton( 'eg_common', 'text', '<p class="text-">', '</p>', '', 'text', 25 );
    <?php }
    if ($toolbar_clear_value == 1) {?>
    QTags.addButton( 'eg_clear', 'Clear', '<div class="clearfix"></div>', '', '', 'Clear Fix', 26 );
    <?php }
    if ($toolbar_md_value == 1) {?>
    QTags.addButton( 'eg_md', 'h2 Title', '<h2 class="main-title">', '</h2>', '', 'H3 Title', 26 );
    <?php }
    if ($toolbar_lg_value == 1) {?>
    QTags.addButton( 'eg_lg', 'Sub Title', '<h3 class="sub-title">', '</h3>', '', 'Sub Title', 27 );
    <?php }
    if ($toolbar_lg_value == 1) {?>
    QTags.addButton( 'eg_pre', 'pre', '<pre class="black">', '</pre>', '', 'pre', 28 );
    <?php }
    if ($toolbar_less_value == 1) {?>
    QTags.addButton( 'eg_less', '<', '&#60;', '', '', '<', 29 );
    <?php }
    if ($toolbar_square_value == 1) {?>
    QTags.addButton( 'eg_square', '[', '&#91;', '', '', '[', 30 );
    <?php }
    if ($toolbar_container_value == 1) {?>
    QTags.addButton( 'eg_container', 'container', '<div class="container">', '</div>', '', 'container', 31 );
    <?php }
    if ($toolbar_row_value == 1) {?>
    QTags.addButton( 'eg_row', 'row', '<div class="row">', '</div>', '', 'row', 32 );
    <?php }
    if ($toolbar_div_value == 1) {?>
    QTags.addButton( 'eg_div', 'div', '<div class="">', '</div>', '', 'div', 33 );
    <?php }
    if ($toolbar_lorem_value == 1) {?>
    QTags.addButton( 'eg_lorem', 'Lorem', '[lorem repeat="2"]', '', '', 'Lorem Filler', 34 );
    <?php }
    if ($toolbar_img_value == 1) {?>
    QTags.addButton( 'eg_img', 'img', '[img width="" height="" class="" style=""]src[/img]', '', '', 'Image Shortcode', 35 );
    <?php }
    if ($toolbar_post_value == 1) {?>
    QTags.addButton( 'eg_post', 'Post', '[link-to-post id=""]', '', '', 'Post Link by ID', 36 );
    <?php }
    if ($toolbar_author_value == 1) {?>
    QTags.addButton( 'eg_author', 'Author', '[current_author]', '', '', 'Link to Current Author Profile', 37 );
    <?php }
    if ($toolbar_span_value == 1) {?>
    QTags.addButton( 'eg_span', 'span', '<span class="">', '</span>', '', 'span', 38 );
    <?php }
    if ($toolbar_h1_value == 1) {?>
    QTags.addButton( 'eg_h1', 'h1', '<h1>', '</h1>', '', 'h1', 39 );
    <?php }
    if ($toolbar_h2_value == 1) {?>
    QTags.addButton( 'eg_h2', 'h2', '<h2>', '</h2>', '', 'h2', 40 );
    <?php }
    if ($toolbar_h3_value == 1) {?>
    QTags.addButton( 'eg_h3', 'h3', '<h3>', '</h3>', '', 'h3', 41 );
    <?php }
    if ($toolbar_h4_value == 1) {?>
    QTags.addButton( 'eg_h4', 'h4', '<h4>', '</h4>', '', 'h4', 42 );




    <?php } ?>


    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'foundation_toolbar_activate' );
