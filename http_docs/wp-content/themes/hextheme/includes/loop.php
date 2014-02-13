
		 <div class="post-loop">
		 
		 	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("category_name=CategoryHere&showposts=6&paged=$paged"); ?>

			<?php while (have_posts()) : the_post(); ?> 
			
				<article>
					<div class="post-wrap">		
						
						<div class="post-image rollover">
							<?php
							if( has_post_thumbnail() ) { ?>
							<a href=<?php the_permalink(); ?>><?php the_post_thumbnail('post-thumb'); ?></a>
							<?php } else { ?>
							<a href=<?php the_permalink(); ?>><div style=""><img src="insert default post thumbnail here" width="150" height="150" title="<?php the_title(); ?>" /></div></a>
							<?php } ?>
						</div> <!-- end blog image -->
		
						<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title_attribute(); ?></a></h3>
								
						<div class="post-excerpt">
							<?php the_excerpt() ;?>
						</div> <!-- end blog_excerpt -->
						
						<div class="post-date">
							<?php the_time('F jS, Y') ?>	
						</div>

					</div> <!-- post-wrap -->
				</article>
					
				<?php endwhile; ?>
			
			<!-- Pagination -->
			<div class="pagination">
					<?php if(function_exists('wp_paginate')) {
						wp_paginate();
						} ?>
			</div> <!-- end pagination -->
			
		</div> <!-- end post-loop -->	

		<?php wp_reset_query(); ?>