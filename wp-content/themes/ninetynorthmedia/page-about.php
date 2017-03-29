<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<section data-id="about" id="content" role="main" class="about">	
	<div class="pageSection about_whatWeDo">
		<h2 class="pageSection_title">What We Do</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/tower-bg2.jpg" ?>" />
				</div>
				<div class="col-md-7">
					<div class="about_whatWeDo_text">
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

	<div class="pageSection about_team">
		<h2 class="pageSection_title">Team</h2>
		<?php 
			$people = [[
				'name'     => 'Mark Vincent Limchoa',
				'position' => 'CEO / President',
				'src'      => '1.jpg'
			], [
				'name'     => 'Abram Eustaquio',
				'position' => 'TV / Film Production',
				'src'      => '1.jpg'
			], [
				'name'     => 'John Achilles Denna',
				'position' => 'COO',
				'src'      => '1.jpg'
			], [
				'name'     => 'Ariel Agni',
				'position' => 'CFO',
				'src'      => '1.jpg'
			]];
		?>
		<div class="container">
			<div class="row">
				<?
					foreach($people as $p) :
				?>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="people">
							<div 
								class="people_photo focuspoint"
								data-focus-x="0"
								data-focus-y="0"
							>
								<img src="<?php echo get_template_directory_uri() . "/assets/images/default-photo.jpg"; ?>" />
							</div>
							<div class="people_desc">
								<div class="people_desc_name">
									<?php echo $p['name']; ?>
								</div>
								<div class="people_desc_position">
									<?php echo $p['position']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php
					endforeach;
				?>
			</div>
		</div>
	</div>

	<div class="pageSection about_missionVision">
		<h2 class="pageSection_title">Mission &amp; Vision</h2>
	</div>

	<div class="pageSection about_coreValues">
		<h2 class="pageSection_title">Core Values</h2>
	</div>

	<div class="pageSection about_partners">
		<h2 class="pageSection_title">Partners</h2>
	</div>

	<div class="pageSection about_clients">
		<h2 class="pageSection_title">Clients</h2>
	</div>
</section>

<?php get_footer(); ?>