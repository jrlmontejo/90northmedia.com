<?php
add_action( 'after_setup_theme', 'wwboilerplate_setup' );
function wwboilerplate_setup()
{
load_theme_textdomain( 'wwboilerplate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'wwboilerplate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'wwboilerplate_load_scripts' );
function wwboilerplate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'wwboilerplate_enqueue_comment_reply_script' );
function wwboilerplate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'wwboilerplate_title' );
function wwboilerplate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'wwboilerplate_filter_wp_title' );
function wwboilerplate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'wwboilerplate_widgets_init' );
function wwboilerplate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'wwboilerplate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function wwboilerplate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'wwboilerplate_comments_number' );
function wwboilerplate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


function wwbp_add_scripts() {
	// list all scripts here
	$scripts = [
		"jquery"     => '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
		"tether"     => "//cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js",
		"bootstrap4" => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js'
	];

	foreach( $scripts as $scr_handle => $scr_url ) {
		wp_register_script( $scr_handle, $scr_url, null, null, true );
		wp_enqueue_script( $scr_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'wwbp_add_scripts' );

function wwbp_add_styles() {
	// list all CSS files here
	$styles = [
		"bootstrap4" => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'
	];

	foreach( $styles as $style_handle => $style_url ) {
		wp_register_style( $style_handle, $style_url, null, null, null );
		wp_enqueue_style( $style_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'wwbp_add_styles' );