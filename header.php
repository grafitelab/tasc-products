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

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header <?php if(is_single() && ('post' == get_post_type())){ printf("article-single"); } if(is_single() && ('product' == get_post_type())){ printf("product-single"); } ?>" role="banner">

				<div id="inner-header" class="clearfix">

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


					<p class="header-social" role="navigation"><a href="#">FB</a> | <a href="#">TW</a> | <a href="#">IG</a> | <a href="#">MAIL</a></p>

				</div> <!-- end #inner-header -->
				
				
				<div id="outer-header">
					<p>Selezione Italiana dei Migliori Prodotti al Mondo.</p>
				</div>

			</header> <!-- end header -->
