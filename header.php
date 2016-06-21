<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!--Typography-->
		<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6718272/768424/css/fonts.css" />

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#546168">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/library/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#546168">
		
		
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		
		fbq('init', '488673791326885');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=488673791326885&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
	</head>

	<body <?php body_class(); ?>>

			<header class="header <?php if(is_single() && ('post' == get_post_type())){ printf("article-single"); } if(is_single() && ('product' == get_post_type())){ printf("product-single"); } ?>" role="banner">
			<!-- Slider main container -->
			<div class="header-slider-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
				    
				<div id="inner-header" class="clearfix swiper-slide">

					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow">
		            		<div id="peaks">
			            		<div class="peak" id="peak1" ></div>
			            		<div class="peak" id="peak2"></div>
			            		<div class="peak" id="peak3"></div>
			            		<div class="peak" id="peak4"></div>
		            		</div>
						
					</a>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>


					<p class="header-social" role="navigation"><a href="https://www.facebook.com/tascproject/">FB</a> | <a href="https://twitter.com/tascproject">TW</a> | <a href="https://www.instagram.com/tascproject/">IG</a> | <a href="mailto:cast@tasc.it">MAIL</a></p>

				</div> <!-- end #inner-header -->
				
				
				<div id="outer-header" class="swiper-slide">
					<div class="one-fourth">
						<h2>TASC</h2>
						<p>Siamo il Cast italiano che seleziona e divulga i Migliori Prodotti al Mondo. Tasc è l'acronimo di "Tecnologie Arti Stili e Concetti". Qui è ancora molto vuoto, un motivo in più per tornare presto e sapere cosa i nostri sviluppatori metteranno ;)</p>
					</div>
				</div>
				
				</div>

			</div>
			<!-- end slider -->

			</header> <!-- end header -->
			
			<!-- Apro il container in base al tipo di pagina -->
		<?php if(is_single()) {
			$large = get_post_meta($post->ID, 'opt_large', true);
			if($large == "on" or $large == 1 or is_singular( 'video' ) or is_singular( 'product' ) or is_singular( 'column' )) { ?>
				<?php 
					global $post;
					get_template_part( 'parts/side-sharebox' ); 
				?>
				<div id="container" class="super-full" <?php if(is_page('cast')) {?>class="grafitestyle" <?php } ?> >
			<?php } else { ?>
				<div id="container" <?php if(is_page('cast')) {?>class="grafitestyle" <?php } ?> >
			<?php }
			?>
			<?php } else { ?>
			<div id="container" <?php if(is_page('cast')) {?>class="grafitestyle" <?php } ?> >
			<?php } ?>
		