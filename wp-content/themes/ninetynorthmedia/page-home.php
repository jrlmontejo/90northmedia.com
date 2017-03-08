<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<section id="content" role="main" class="home">	
	<div class="home_atf home_atf-js">
		<!-- <canvas id="myCanvas" resize></canvas> -->
		<!-- <div class='home_atf_pulse'> -->
		 <!--  <svg class="pulse pulse_out_1" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_2" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_3" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_4" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg> -->

		  <!-- <svg class="pulse pulse_out_5" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_6" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_7" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg>

		  <svg class="pulse pulse_out_8" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg> -->

		  <!-- <svg class="pulse pulse_out_5" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="450" cy="450" r="440"/>
		    <circle class="front" cx="450" cy="450" r="440"/>
		  </svg> -->

		  <!-- <svg class="pulse pulse_out_6" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="200" cy="200" r="190"/>
		    <circle class="front" cx="200" cy="200" r="190"/>
		  </svg>

		  <svg class="pulse pulse_out_7" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="200" cy="200" r="190"/>
		    <circle class="front" cx="200" cy="200" r="190"/>
		  </svg>

		  <svg class="pulse pulse_out_8" xmlns="http://www.w3.org/2000/svg">
		    <circle class="back" cx="200" cy="200" r="190"/>
		    <circle class="front" cx="200" cy="200" r="190"/>
		  </svg> -->
		<!-- </div> -->
		<div class="home_atf_header wow fadeInUp">
			<div class="home_atf_header_logo">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?>" />
			</div>
			<div class="home_atf_header_caption">
				We are a company engaged in <span>TV Production</span>, <span>Film</span>, <span>Rentals</span>, 
				<span>Distributorships / Representatives</span> and <span>System Integration</span>. 
				With Partners and Principals across the USA, Europe and Asia Pacific.
			</div>
		</div>
	</div>

	<div class="home_section home_solutions">
		<h2 class="home_section_title">End-to-end Solutions</h2>
		<?php
			$solutions = [[
				'title' => 'Production',
				'image' => 'production.jpg',
				'desc' => [
					'Studio/Remote Solutions',
					'Production System',
					'Processing/Editing',
					'Playback/Playout',
					'Lighting System'
				]
			], [
				'title' => 'Content Distribution',
				'image' => 'content-distribution.jpg',
				'desc' => [
					'Satellite/DSNG',
					'Microwave Link',
					'Fiber Optic Cable',
					'Open Internet'
				]
			], [
				'title' => 'Transmission',
				'image' => 'transmission.jpg',
				'desc' => [
					'Free TV (Transmitter/Antenna)',
					'Cable TV',
					'DTH (Satellite)',
					'IPTV',
					'Livestreaming'
				]
			]];
		?>
		<div class="container">
			<div class="row decPadding">
				<?php 
					$delay = 0;
					foreach($solutions as $solution) : 
				?>
					<div class="col-xs-12 col-md-4 wow fadeInLeft" data-wow-delay="<?php echo $delay . "s"; ?>">
						<div class="solution">
							<div 
								class="solution_image focuspoint"
								data-focus-x="0"
								data-focus-y="0"
							>
								<img src="<?php echo get_template_directory_uri() . "/assets/images/" . $solution['image']; ?>" />
							</div>
							<div class="solution_title">
								<?php echo $solution['title']; ?>
							</div>
							<div class="solution_desc">
								<ul>
									<?php foreach($solution['desc'] as $desc) : ?>
										<li><?php echo $desc; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				<?php 
						$delay += 0.1;
					endforeach; 
				?>
			</div>
		</div>

	</div>

	<div class="home_section home_products">
		<h2 class="home_section_title">Featured Products</h2>
		<div class="container">
			<div class="row decPadding">
				<?php
					$products = [[
						'name' => 'Spectra T-Series Mid-Range/Enterprise Tape Libraries',
						'src' => 'storage2.png',
						'desc' => 'Designed for Growth and Scalability'
					], [
						'name' => 'Hitachi EC700-HP LPTV Transmitter',
						'src' => 'transmitter2.jpg',
						'desc' => 'High efficiency Doherty, rugged, air cooled platform for broadcast requirements'
					], [
						'name' => 'Wohler iAM-VIDEO-2 Multichannel Audio Video Monitor',
						'src' => 'audio monitor2.jpg',
						'desc' => 'Easy Operation with High-Quality, Intuitive Monitoring'
					]];

					$delay = 0;
					foreach($products as $i => $product) :
						$photoOverlayBg = "linear-gradient(rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1))";
						$photoUrl = get_template_directory_uri() . "/assets/images/sample-products/" . $product['src'];
						if($i == 0) :
				?>
					<div class="col-xs-12 decPadding">
						<div 
							class="product product-first"
							style="<?php echo "background-image: " . $photoOverlayBg . ", url('" . $photoUrl . "')" ?>"
						>
							<div class="product_overlay product-first_overlay wow fadeInDown" data-wow-delay="<?php echo $delay . "s"; ?>">
								<div class="product_name">
									<?php echo $product['name']; ?>	
								</div>
								<div class="product_desc">
									<?php echo $product['desc']; ?>	
								</div>
							</div>
						</div>
					</div>
				<?php else : ?>
					<div class="col-xs-12 col-sm-6 decPadding">
						<div 
							class="product"
							style="<?php echo "background-image: " . $photoOverlayBg . ", url('" . $photoUrl . "')" ?>"
						>
							<div class="product_overlay wow fadeInDown" data-wow-delay="<?php echo $delay . "s"; ?>">
								<div class="product_name">
									<?php echo $product['name']; ?>	
								</div>
								<div class="product_desc">
									<?php echo $product['desc']; ?>	
								</div>
							</div>
						</div>
					</div>
				<?php 
						endif;
						$delay += 0.2;
					endforeach; 
				?>
			</div>
			<div class="row decPadding">
				<div class="col-xs-12 decPadding">
					<div class="home_moreLink">
						<a href="#">
							View More Products <i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home_section home_news">
		<h2 class="home_section_title">Latest News</h2>
		<div class="container-fluid">
			<div class="row">
				<?php
					$args = [
						'post_type'      => 'post',
						'nopaging'       => true,
						'posts_per_page' => 4
					];

					$delay = 0;
					$news = new WP_Query($args);
				?>
				<?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post(); ?>
					<div class="col-md-4">
						<div class="news wow fadeIn" data-wow-delay="<?php echo $delay . "s"; ?>">
							<div 
								class="news_thumb focuspoint"
								data-focus-x="0"
								data-focus-y="0"
							>
								<?php $featureImage = get_the_post_thumbnail_url(); ?>
								<img src="<?php echo $featureImage; ?>" />
							</div>
							<div class="news_title">
								<?php the_title(); ?>	
							</div>
							<div class="news_date">
								<?php echo get_the_date(); ?>
							</div>
							<div class="news_excerpt">
								<?php the_excerpt(); ?>
							</div>
							<div class="news_readMore">
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
				<?php 
							$delay += 0.1;
						endwhile; 
					endif; 
				?>
			</div>
		</div>
	</div>
	<div class="home_newsFooter">
		<div class="container-fluid">
			<div class="row decPadding">
				<div class="col-xs-12 decPadding">
					<div class="home_moreLink">
						<a href="#">
							View More Articles <i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home_section home_partners">
		<h2 class="home_section_title">Partners</h2>
		<div class="container-fluid">
			<div class="row">
				<?php
					$partnerList = [
						'hitachi',
						'dielectric',
						'transradio',
						'advantech',
						'spectra',
						'sennheiser'
					];

					foreach($partnerList as $partner) :
				?>
					<div class="col-xs-6 col-sm-4 col-lg-2">
						<a href="#" class="partner">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/partners/" . $partner . ".png" ?>" />
						</a>
					</div>
				<?php
					endforeach; 
				?>
			</div>
		</div>
	</div>

	<div class="home_section home_clients">
		<h2 class="home_section_title">Clients</h2>
		<div class="container-fluid">
			<div class="row">
				<?php
					$clientList = [
						'cnn',
						'ptv',
						'gma',
						'dziq',
						'rpn',
						'smni'
					];

					foreach($clientList as $client) :
				?>
					<div class="col-xs-6 col-sm-4 col-lg-2">
						<a href="#" class="client">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/clients/" . $client . ".png" ?>" />
						</a>
					</div>
				<?php 
					endforeach; 
				?>
			</div>
		</div>
	</div>

	<div class="home_newsFooter">
		<div class="container-fluid">
			<div class="row decPadding">
				<div class="col-xs-12 decPadding">
					<div class="home_moreLink">
						<a href="#">
							Learn More <i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="home_quote">
		<div class="home_quote_btn wow fadeInDown">
			<a href="#">
				Request a Quote
			</a>
		</div>
	</div> -->
</section>

<?php get_footer(); ?>