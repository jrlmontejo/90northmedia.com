<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />

		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		<script>
		  WebFont.load({
		    google: {
		      families: ['Raleway']
		    }
		  });
		</script>

		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	</head>
	
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header id="header" role="banner">
				<div class="mobileHeader">
					<input id="navbarCheck" type="checkbox" class="mobileHeader_check">
					<div class="mobileHeader_navbar">
						<label for="navbarCheck" class="mobileHeader_navbar_toggle">
							<div class="mobileHeader_navbar_toggle_bar"></div>
						</label>
						<div class="mobileHeader_navbar_active">
							<?php echo get_the_title(); ?>
						</div>
					</div>
					<?php 
						wp_nav_menu([
							'theme_location' => 'main-menu',
							'container_class' => 'mobileHeader_menu'
						]); ?>
				</div>

				<div id="branding" class="mainHeader">
					<div id="site-title" class="mainHeader_logo mainHeader_logo-js">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?>" />
						</a>
					</div>
				
					<?php 
						wp_nav_menu([
							'theme_location' => 'main-menu',
							'container_class' => 'mainHeader_menu'
						]); 
					?>
				</div>
			</header>
		
			<div id="container" class="mainContent mainContent-js">