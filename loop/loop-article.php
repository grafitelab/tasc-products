<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						    
	<div class="article-media-container">
		<?php
			$media_radio = get_post_meta(get_the_ID(), 'opt_media_radio', true);
	
			if(has_post_video() and ($media_radio == "video")){
				the_post_video();
			} elseif($media_radio == "gallery") {
			
			$galleryArray = get_post_gallery_ids($post->ID); ?>
			
			<!-- Slider main container -->
			<div class="gallery-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <?php

					foreach ($galleryArray as $id) { ?>
					
						<div class="swiper-slide" style="background-image: url(<?php echo wp_get_attachment_url( $id ); ?>)"></div>
					
					<?php } ?>
					
			    </div>
			    <!-- If we need pagination -->
			    <div class="swiper-pagination"></div>
			</div>
			
			<?php
				
			} elseif($media_radio == "image"){
				the_post_thumbnail('thumb-big');
			}
			
			else{
				the_post_thumbnail('thumb-big');
			} 
		?>
	</div>
							
						
	<header class="article-header">
							
		<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<h2 class="h5"><?php
            printf(__('%1$s', 'bonestheme'), get_the_category_list(' & '));
        ?></h2>
						
	</header> <!-- end article header -->
					
	<section class="entry-content clearfix">
		<?php the_content(); ?>
		<?php 
			if('product' == get_post_type()){ 
			$productCustomMeta = get_post_meta($post->ID,'_my_meta',TRUE);
			if (($productCustomMeta['description'] != "N/A") and ($productCustomMeta['storelink'] != "#")){
		?>
		
		<p class="storelink"><a href="<?php echo $productCustomMeta['storelink']; ?>" target="_blank"><?php echo $productCustomMeta['description']; ?></a></p>
		
		<?php 
				} 
			} 
		?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="byline vcard h5"><?php
			printf(__('Di <span class="author">%1$s</span>', 'bonestheme'), bones_get_the_author_posts_link());
        ?></p>


	</footer> <!-- end article footer -->
					
</article> <!-- end article -->