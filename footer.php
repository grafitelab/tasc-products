			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		
		<!-- Unslider -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/unslider.js"></script> <!-- but with the right path! -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/unslider/unslider.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/unslider/unslider-dots.css">
		<script>
			jQuery(document).ready(function($) {
				$('.entry-slider').unslider();
			});
		</script>

	</body>

</html> <!-- end page. what a ride! -->
