<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						    
	<div class="article-media-container">
		<?php
			$image = get_post_meta(get_the_ID(), 'opt_fimage', true);
			$video = get_post_meta(get_the_ID(), 'opt_fvideo', true);
			$gallery = get_post_meta(get_the_ID(), 'opt_fgallery', true);
	
			if(has_post_video() and ($video == "on" or $video == 1)){
				the_post_video();
			} elseif($gallery == "on" or $gallery == 1) {
			
			$galleryArray = get_post_gallery_ids($post->ID); ?>
			
			<div class="entry-slider">
				<ul>
			<?php

			foreach ($galleryArray as $id) { ?>
			
			    <li><img src="<?php echo wp_get_attachment_url( $id ); ?>"></li>
			
			<?php } ?>
			
				</ul>
			</div>
			
			<?php
				
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
		
		<p class="storelink"><a href="<?php echo $productCustomMeta['storelink']; ?>"><?php echo $productCustomMeta['description']; ?></a></p>
		
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