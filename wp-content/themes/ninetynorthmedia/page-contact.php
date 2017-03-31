<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

<section data-id="contact" id="content" role="main" class="contact">	
	<div class="pageSection contact_info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="pageSection_title">
						Talk to us!
					</h2>
				</div>
				<div class="col-md-6">
					<h2 class="pageSection_title">
						Talk to us!
					</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div id="map" class="contact_map">
	</div>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAESDPCck365ubai4TecQHthLvCFZBX8nM&callback=App.initMap">
  </script>
</section>

<?php get_footer(); ?>