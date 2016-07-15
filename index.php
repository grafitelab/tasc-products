<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="first clearfix" role="main">
					     
					    <?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$loop = new WP_Query( array(
						'post_type' => 'product',
						'posts_per_page' => 10,
						'orderby'=> 'date',
						'paged'=>$paged
						) ); ?>

					    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
					    
					    <?php get_template_part( 'loop/loop', 'article' ); ?>
					
					    <?php endwhile; ?>	
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Altri Prodotti', "bonestheme"));  ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Nuovi Prodotti &raquo;', "bonestheme"));  ?></li>
					                </ul>
					            </nav>
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
