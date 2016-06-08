			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
					<div class="footer-left">
						Co-Founded and Designed by Alberto Ziveri. <br />
						Co-Founded by Mario Calì & Jacopo Agostini. <br />
						Developed by Matteo Pelosi.
					</div>
					<div class="footer-right">
						Alberto Ziveri, Mario Calì, Jacopo Agostini, Matteo Pelosi...
					</div>
					
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
