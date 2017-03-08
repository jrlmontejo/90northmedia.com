			</div>
		</div>
		
		<footer id="footer" class="mainFooter">
			<div class="mainFooter_contact">
				<div class="mainFooter_contact_info mainFooter_contact_info_1">
					<i class="fa fa-map-marker fa-lg fa-fw"></i>
					<span>509 Emerald Court Bldg., 54 Road 3, QC, PH 1100</span>
				</div>
				<div class="mainFooter_contact_info mainFooter_contact_info_2">
					<i class="fa fa-envelope fa-lg fa-fw"></i>
					<span>info@90northmedia.com</span>
				</div>
				<div class="mainFooter_contact_info mainFooter_contact_info_3">
					<i class="fa fa-phone fa-lg fa-fw"></i>
					<span>(02) 959 6837</span>
				</div>
			</div>
			<div class="mainFooter_social">
				<a href="//www.facebook.com/90degreesnorth/" target="_blank">
					<i class="fa fa-facebook fa-lg fa-fw"></i>
				</a>
				<a href="//www.linkedin.com/company/90-degrees-north-inc-" target="_blank">
					<i class="fa fa-linkedin-square fa-lg fa-fw"></i>
				</a>
			</div>
			<div id="copyright" class="mainFooter_copy">
				<?php echo sprintf( __( 'Copyright %1$s %2$s | %3$s | All Rights Reserved.', 'ninetynorthmedia' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri() . '/app.js' ?>"></script>
		<!-- <script type="text/paperscript" canvas="myCanvas">
			// Create a Paper.js Path to draw a line into it:
			var path = new Path();
			// Give the stroke a color
			path.strokeColor = 'black';
			var start = new Point(100, 100);
			// Move to start and draw a line from there
			path.moveTo(start);
			// Note the plus operator on Point objects.
			// PaperScript does that for us, and much more!
			path.lineTo(start + [ 100, -50 ]);
		</script> -->
	</body>
</html>