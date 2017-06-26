<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

<section data-id="contact" id="content" role="main" class="contact">
	<div id="map" class="contact_map">
	</div>

	<div class="pageSection contact_info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="pageSection_title">
						Leave Us A Message
					</h2>
					<div class="contact_form">
						<?php echo do_shortcode('[contact-form-7 id="88" title="Contact Us"]'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="pageSection_title">
						Other Ways Of Reaching Us
					</h2>
					<?php global $officeInfo; ?>
					<div class="contact_other contact_other-address">
						<i class="fa fa-map-marker fa-lg fa-fw"></i>
						<?php echo $officeInfo['address'] ?>
					</div>
					<div class="contact_other contact_other-email">
						<i class="fa fa-envelope fa-lg fa-fw"></i>
						<?php echo $officeInfo['email'] ?>
					</div>
					<div class="contact_other contact_other-phone">
						<i class="fa fa-phone fa-lg fa-fw"></i>
						<?php echo $officeInfo['phone'] ?>
					</div>
					<div class="contact_other contact_other-social">
						<div class="social_fb">
							<a href="<?php echo '//facebook.com' . $officeInfo['facebook']; ?>" target="_blank">
								<i class="fa fa-facebook-square fa-lg fa-fw"></i>
								<?php echo $officeInfo['facebook']; ?>
							</a>
						</div>
						<div class="social_linkedin">
							<a href="<?php echo '//linkedin.com' . $officeInfo['linkedin']; ?>" target="_blank">
								<i class="fa fa-linkedin-square fa-lg fa-fw"></i>
								<?php echo $officeInfo['linkedin']; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script
		async
		defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAESDPCck365ubai4TecQHthLvCFZBX8nM&callback=App.initMap">
  </script>
</section>

<?php get_footer(); ?>