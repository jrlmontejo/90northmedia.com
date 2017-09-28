<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<section data-id="home" id="content" role="main" class="home">
	<div class="home_atf home_atf-js">
		<div class="home_atfHeader wow fadeInUp">
			<div class="home_atfHeaderLogo">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?>" />
			</div>
			<div class="home_atfHeaderCaption">
				We are a company engaged in <span>TV Production</span>, <span>Film</span>, <span>Rentals</span>,
				<span>Distributorships / Representatives</span> and <span>System Integration</span>.
				With Partners and Principals across the USA, Europe and Asia Pacific.
			</div>
			<div class="home_atfHeaderMore">
				<a href="#welcome">
					<span class="fa fa-angle-down fa-4x"></span>
				</a>
			</div>
		</div>
	</div>

	<div id="welcome"></div>

	<div class="pageSection home_products">
		<h2 class="pageSection_title">Featured Products</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul id="lightSlider">
						<?php
							$args = [
				        'post_type' => 'featured_products',
				        'posts_per_page' => 10
				      ];

							$products = new WP_Query($args);
						?>
						<?php if($products->have_posts()) : while($products->have_posts()) : $products->the_post(); ?>
							<li>
                <div class="box wow fadeInUp featuredProduct">
                	<a href="<?php echo get_field('product_link'); ?>" target="_blank">
                    <?php $productPhoto = get_field('photo'); ?>
                    <div
                      class="box_content"
                      style="background-image: url(<?php echo $productPhoto['sizes']['medium']; ?>)">
                    </div>
                    <div class="box_info">
                      <div class="box_title"><?php the_title(); ?></div>
                      <div id="box1" class="box_desc"><?php echo get_field('description'); ?></div>
                      <div class="box_link">
                      	Visit Product Link
                      	<i class="fa fa-external-link" aria-hidden="true"></i>
                    	</div>
                    </div>
                  </a>
                </div>
							</li>
						<?php endwhile; endif; ?>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pageSection home_services">
		<h2 class="pageSection_title">Services</h2>
		<div class="container">
			<div class="row decPadding">
				<?php
          $args = [
            'post_type' => 'service_categories',
            'posts_per_page' => 3,
            'post__not_in' => [135]
          ];

          $delay = 0;
          $service_categories = new WP_Query($args);
        ?>
        <?php if($service_categories->have_posts()) : while($service_categories->have_posts()) : $service_categories->the_post(); ?>
					<div class="col-md-4 wow fadeInLeft" data-wow-delay="<?php echo $delay . "s"; ?>">
            <?php $serviceBg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
            <div class="box home_service">
            	<a href="/services#<?php echo get_post_field('post_name', get_post()); ?>">
	              <div
	              	class="box_content"
	              	style="background-image: url(<?php echo $serviceBg[0]; ?>)"
	            	>
	              </div>
	              <div class="box_info">
	              	<div class="box_title">
	                  <?php the_title(); ?>
	                </div>
	              </div>
              </a>
            </div>
          </div>
				<?php $delay += 0.1; endwhile; endif; ?>
			</div>
		</div>
	</div>

	<div class="pageSection home_solutions">
		<h2 class="pageSection_title">Products &amp; Solutions</h2>
		<div class="container">
			<div class="row decPadding">
				<?php
					$args = [
		        'post_type' => 'solution_categories',
		        'posts_per_page' => 3,
		        'post__not_in' => [135]
		      ];

		      $delay = 0;
		      $solution_categories = new WP_Query($args);
				?>
				<?php if($solution_categories->have_posts()) : while($solution_categories->have_posts()) : $solution_categories->the_post(); ?>
					<?php $colClass = ($delay == 0) ? "col-md-6 offset-lg-2 col-lg-4 wow fadeInLeft" : "col-md-6 col-lg-4 wow fadeInLeft"; ?>
					<div class="col-md-4 wow fadeInLeft" data-wow-delay="<?php echo $delay . "s"; ?>">
            <?php $serviceBg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
            <div class="box home_solution">
            	<a href="/products-solutions#<?php echo get_post_field('post_name', get_post()); ?>">
	              <div
	              	class="box_content"
	              	style="background-image: url(<?php echo $serviceBg[0]; ?>)"
	            	>
	              </div>
	              <div class="box_info">
	              	<div class="box_title">
	                  <?php the_title(); ?>
	                </div>
	                <div class="box_desc">
	                	<?php the_content(); ?>
	                </div>
	              </div>
              </a>
            </div>
          </div>
				<?php $delay += 0.1; endwhile; endif; ?>
			</div>
		</div>
	</div>

	<?php
		$args = [
			'post_type'      => 'post',
			'nopaging'       => true,
			'posts_per_page' => 4
		];

		$delay = 0;
		$news = new WP_Query($args);

		if($news->have_posts()) :
	?>
		<div class="pageSection home_news">
			<h2 class="pageSection_title">Latest News</h2>
			<div class="container-fluid">
				<div class="row">
					<?php while($news->have_posts()) : $news->the_post(); ?>
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
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>
						</div>
					<?php
							$delay += 0.1;
						endwhile;
					?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="pageSection home_partners">
		<h2 class="pageSection_title">Major Partners</h2>
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

	<div class="pageSection home_clients">
		<h2 class="pageSection_title">Clients</h2>
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

	<!-- <div class="home_quote">
		<div class="home_quote_btn wow fadeInDown">
			<a href="#">
				Request a Quote
			</a>
		</div>
	</div> -->
</section>

<?php get_footer(); ?>