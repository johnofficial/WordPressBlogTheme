		<article class="post-article" animate-this>
		<?php if(wp_is_mobile()): ?> <a href="<?php the_permalink(); ?>"> <?php endif; ?>
			<div class="article-thumbnail">
			<?php if(!wp_is_mobile()){
				 the_post_thumbnail('big-post-thumbnail'); 
			 	}elseif (wp_is_mobile()) {
			 		the_post_thumbnail('mobile-post-thumbnail'); 
			 	} 
			 ?>
			</div>
			<div class="article-content">
				<h2 ><?php the_title(); ?></h2>
				<p>
				<?php
					if(!wp_is_mobile()):
				 		echo get_the_excerpt(); 
				 	endif;
				 ?>
				</p>
				<?php if(!wp_is_mobile()):   ?>
				<a href="<?php the_permalink(); ?>" class="site-button">Nastavi sa čitanjem</a>
				<?php endif; ?>
			</div>
		<?php if(wp_is_mobile()): ?> </a> <?php endif; ?>
		</article>
		<hr>