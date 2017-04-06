			</div>
		</div>
		
		<footer id="footer" class="mainFooter">
			<?php if ($pagename != 'contact-us') : ?>
				<?php global $officeInfo; ?>
				<div class="mainFooter_contact">
					<div class="mainFooter_contact_info mainFooter_contact_info_1">
						<i class="fa fa-map-marker fa-lg fa-fw"></i>
						<span><?php echo $officeInfo['address']; ?></span>
					</div>
					<div class="mainFooter_contact_info mainFooter_contact_info_2">
						<i class="fa fa-envelope fa-lg fa-fw"></i>
						<span><?php echo $officeInfo['email']; ?></span>
					</div>
					<div class="mainFooter_contact_info mainFooter_contact_info_3">
						<i class="fa fa-phone fa-lg fa-fw"></i>
						<span><?php echo $officeInfo['phone']; ?></span>
					</div>
				</div>
				<div class="mainFooter_social">
					<div class="mainFooter_social_info">
						<a href="<?php echo '//facebook.com' . $officeInfo['facebook']; ?>" target="_blank">
							<i class="fa fa-facebook fa-lg fa-fw"></i>
							<span><?php echo $officeInfo['facebook']; ?></span>
						</a>
					</div>
					<div class="mainFooter_social_info">
						<a href="<?php echo '//linkedin.com' . $officeInfo['linkedin']; ?>" target="_blank">
							<i class="fa fa-linkedin-square fa-lg fa-fw"></i>
							<span><?php echo $officeInfo['linkedin']; ?></span>
						</a>
					</div>
				</div>
			<?php endif; ?>
			<div 
				id="copyright" 
				class="mainFooter_copy <?php echo ($pagename == 'contact-us') ? "mainFooter_copy-plain" : "" ?>"
			>
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