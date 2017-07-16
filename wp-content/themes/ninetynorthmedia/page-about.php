<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<section data-id="about" id="content" role="main" class="about">

	<div class="pageSection about_whatWeDo">
		<h2 class="pageSection_title">What We Do</h2>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="about_fade">
						<div id="aboutGallery">
							<?php
								$args = [
									'post_type' => 'attachment',
									'post_mime_type' => 'image',
									'post_status' => 'inherit',
									'posts_per_page' => -1,
									'category_name' => 'company-photos'
								];

								$images = new WP_Query($args);
							?>
							<?php if($images->have_posts()) : while($images->have_posts()) : $images->the_post(); ?>
								<img data-src="<?php echo wp_get_attachment_url($images->ID); ?>" />
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="about_whatWeDoText">
						<p>
							We are a company engaged in <span>TV Production</span>, <span>Film</span>, <span>Rentals</span>,
							<span>Distributorships / Representatives</span> and <span>System Integration</span>.
							With Partners and Principals across the USA, Europe and Asia Pacific.
						</p>
						<p>
							By providing tailored solutions, supplying standard and state-of-the-art equipment, design &amp; engineering services,
							we have become a strategic supplier, business partner, and technical reference in the Philippine market for all major
							customers in the field of <span>Film</span>, <span>Broadcasting</span>, <span>Telecommunications</span>,
							<span>Government</span>, <span>Education</span>, <span>Medical</span>, <span>Industrial</span>, <span>Testing</span>,
							and <span>Security</span>.
						</p>
						<p>
							We successfully distribute and represent many of the renowned global brands. Our dynamic, experienced and highly
							professional <span>engineering and production team</span> provides application technical support, project management and design
							in solutions for their customers including start-ups.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pageSection about_info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="about_infoTitle">Core Values</h2>
					<?php
						$values = [
							'Non-discriminating',
							'Organized',
							'Reliable',
							'Technologically Equipped / Transparent',
							'Hardworking',
							'Morally Upright',
							'Excellent',
							'Diligent',
							'Innovative',
							'Accountable'
						];
					?>
					<div class="about_infoCoreValues">
						<?php
							$delay = 0;
							foreach($values as $v) :
						?>
							<div class="wow fadeInRight" data-wow-delay="<?php echo $delay . "s"; ?>">
								<span><?php echo substr($v, 0, 1); ?></span><?php echo substr($v, 1); ?>
							</div>
						<?php
								$delay += 0.1;
							endforeach;
						?>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="about_infoTitle">Mission</h2>
					<div class="about_infoDesc wow fadeInRight">
						To be the industry’s benchmark of content building and technology provider
						that offers adaptive and cost-effective solutions to bring out the potentials
						of the consumers and together, build value.
					</div>
					<h2 class="about_infoTitle">Vision</h2>
					<div class="about_infoDesc wow fadeInRight">
						Bridging technological advancement to meet the demands of its clientele who
						desire limitless information possibilities.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pageSection about_team">
		<h2 class="pageSection_title">Team</h2>
		<div class="container">
			<div class="row">
				<?
					$args = [
						'post_type' => 'people',
						'nopaging' => true
					];

					$people = new WP_Query($args);
				?>
				<?php if($people->have_posts()) : while($people->have_posts()) : $people->the_post(); ?>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="box people wow fadeInUp">
							<div
								class="people_photo focuspoint"
								data-focus-x="0"
								data-focus-y="0"
							>
								<?php if (has_post_thumbnail()) : ?>
									<?php $featureImage = get_the_post_thumbnail_url(); ?>
									<img src="<?php echo $featureImage; ?>" />
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri() . "/assets/images/default-photo.jpg"; ?>" />
								<?php endif; ?>
							</div>
							<div class="people_desc">
								<div class="people_name">
									<?php the_title(); ?>
								</div>
								<div class="people_position">
									<?php the_field('position'); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>