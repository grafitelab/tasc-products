<?php get_header(); ?>

			<?php 
				global $post;
				//get the right thumbnail
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'thumb-big', true);
				$thumb= $thumb_url[0];
			?>
			<div class="article-super-header" <?php if ( has_post_thumbnail() ) { ?>style="background-image:url('<?php echo $thumb; ?>');"  <?php } ?>>
				<div class="article-super-shade"></div>
				<div id="super-title"><h1 class="single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
			</div>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">
							
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
                  <p class="byline vcard"><?php
                    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                  ?></p>
						
								</header> <!-- end article header -->
					
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
						
								<footer class="article-footer">
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>
							
								</footer> <!-- end article footer -->
					
								<?php comments_template(); ?>
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>			
					
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
