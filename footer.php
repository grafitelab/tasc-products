			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
					<!-- Slider main container -->
						<div class="footer-slider-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
							    
					<div class="footer-left swiper-slide">
						Co-Founded and Designed by Alberto Ziveri. <br />
						Co-Founded by Mario Calì & Jacopo Agostini. <br />
						Developed by Matteo Pelosi.
					</div>
					<div class="footer-right swiper-slide">
						Il Cast è il nostro gruppo, composto da Alberto Gerin, Roberto Collorafi, Ugo Possenti, Alessio Romaniello, Luca Toscano, Giorgio Coltella, Gioele Citton, Lorenzo Berni, Lavinia Maisto e Patrizio Stella.
					</div>
					
					</div>
					<!-- end slider -->
					
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		
		<!-- Swiper Gallery and Slider -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
		
		
		<script>        
		  var mySwiper = new Swiper ('.gallery-container', {
		    // Optional parameters
		    direction: 'horizontal',
		    loop: true,
		    
		    // If we need pagination
		    pagination: '.swiper-pagination',
		    paginationClickable: 'true',
		    
		  })        
		</script>
		
		<script>        
		  var myHeaderSwiper = new Swiper ('.header-slider-container', {
		    // Optional parameters
		    direction: 'horizontal',
		    loop: false,
		    
		  })        
		</script>
		
		<script>        
		  var myFooterSwiper = new Swiper ('.footer-slider-container', {
		    // Optional parameters
		    direction: 'horizontal',
		    loop: false,
		    
		  })        
		</script>
		
		<!-- Custom loading scripts -->
		
		<?php if ( is_single() ) {?>	
		<script  type="text/javascript">	
			jQuery(document).ready(function($) {
			/*FULL SCREEN IMAGE*/
			$(function(){
				var w = $(window).width();
				var pW = $(".single .post").width();
				var setMargin = (pW - w)/2;
				$(".post-content img.full_screen_img").css("max-width", "none");
				$(".post-content img.full_screen_img").css('width',w);
				$(".post-content img.full_screen_img").css('margin-left',(setMargin) + "px");
			    $(window).resize(function(){
					var w = $(window).width();
					var pW = $(".single .post").width();
					var setMargin = (pW - w)/2;
					$(".post-content img.full_screen_img").css("max-width", "none");
					$(".post-content img.full_screen_img").css('width',w);
					$(".post-content img.full_screen_img").css('margin-left',(setMargin) + "px");
			    });
			});
			
			});
	    </script>
            <?php } ?> 

	</body>

</html> <!-- end page. what a ride! -->
