<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<section id="content" role="main" class="home">
	<div class="home_atf">
		<canvas id="myCanvas" resize>
		</canvas>
		<div class="home_atf_header">
			<div class="home_atf_header_logo">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?>" />
			</div>
			<div class="home_atf_header_caption">
				We are a company engaged in TV Production, Film, Rentals, Distributorships / Representatives and System Integration. 
				With Partners and Principals across the USA, Europe and Asia Pacific.
			</div>
		</div>
	</div>

	<div class="home_section home_solutions">
		<h2>End-to-end Solutions</h2>
	</div>

	<div class="home_section home_services">
		<h2>Services</h2>
	</div>

	<div class="home_section home_news">
		<h2>Latest News</h2>
	</div>

	<div class="home_section home_clients">
		<h2>Clients</h2>
	</div>

	<div class="home_section home_partners">
		<h2>Partners</h2>
	</div>

	<div class="home_section home_quote">
		<h2>Request a Quote</h2>
	</div>
</section>

<?php get_footer(); ?>