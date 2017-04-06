<?php

$officeInfo = [
	'address' => '509 Emerald Court Bldg., 54 Road 3, Project 6, QC, PH 1100',
	'email' => 'info@90northmedia.com',
	'phone' => '(02) 959 6837',
	'facebook' => '/90degreesnorth',
	'linkedin' => '/company/90-degrees-north-inc-'
];

function ninetynorthmedia_setup() {
	load_theme_textdomain( 'ninetynorthmedia', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	
	register_nav_menus([
		'main-menu' => __( 'Main Menu', 'ninetynorthmedia' ) 
	]);
}
add_action( 'after_setup_theme', 'ninetynorthmedia_setup' );

function ninetynorthmedia_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { 
		wp_enqueue_script( 'comment-reply' ); 
	}
}
add_action( 'comment_form_before', 'ninetynorthmedia_enqueue_comment_reply_script' );

function ninetynorthmedia_title( $title ) {
	return ( $title == '' ) ? '&rarr;' : $title;
}
add_filter( 'the_title', 'ninetynorthmedia_title' );

function ninetynorthmedia_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_filter( 'wp_title', 'ninetynorthmedia_filter_wp_title' );

function ninetynorthmedia_widgets_init() {
	register_sidebar([
		'name'          => __( 'Sidebar Widget Area', 'ninetynorthmedia' ),
		'id'            => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget'  => "</li>",
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	]);
}
add_action( 'widgets_init', 'ninetynorthmedia_widgets_init' );

function ninetynorthmedia_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;

?>	
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}

function ninetynorthmedia_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		
		return count( $comments_by_type['comment'] );
	}

	return $count;
}
add_filter( 'get_comments_number', 'ninetynorthmedia_comments_number' );

function ninetynorthmedia_add_scripts() {
	// list all scripts here
	$scripts = [
		"jquery"     => '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
		"tether"     => '//cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js',
		"bootstrap4" => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js',
		"focuspoint" => get_template_directory_uri() . '/js/jquery.focuspoint.min.js',
		"wow"        => get_template_directory_uri() . '/js/wow.min.js'
		// "paper"      => get_template_directory_uri() . '/js/paper-full.min.js'
	];

	foreach( $scripts as $scr_handle => $scr_url ) {
		wp_register_script( $scr_handle, $scr_url, null, null, true );
		wp_enqueue_script( $scr_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'ninetynorthmedia_add_scripts' );

function ninetynorthmedia_add_styles() {
	// list all CSS files here
	$styles = [
		"bootstrap4"   => '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css',
		"font-awesome" => get_template_directory_uri() . '/css/lib/font-awesome.css',
		"animate"      => get_template_directory_uri() . '/css/lib/animate.css',
		"focuspoint"   => get_template_directory_uri() . '/css/lib/focuspoint.css'
	];

	foreach( $styles as $style_handle => $style_url ) {
		wp_register_style( $style_handle, $style_url, null, null, null );
		wp_enqueue_style( $style_handle );
	}
}
add_action( 'wp_enqueue_scripts', 'ninetynorthmedia_add_styles' );