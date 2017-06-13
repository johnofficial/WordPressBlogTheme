<?php get_header(); ?>
<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>

		<article class="single-page-article">
		<div class="meta-wrap">
			<div class="article-meta">
				<h2 class="single-post-title">  <?php the_title(); ?> </h2>
				<span class="single-post-meta"><?php the_date(); ?></span>
				<span class="single-post-meta"><?php the_category(); ?></span>
			</div>
			<div class="single-thumbnail">
				<?php the_post_thumbnail('single-post-thumbnail'); ?>
			</div>
		</div>
		<div class="single-post-content">
			<?php the_content(); ?>
		</div>
		</article>
	<?php endwhile;
	else :
		echo 'Trenutno nema sadržaja.';
endif; ?>

	

				<?php 
					$categories = get_the_category();
					$category_id = $categories[0]->cat_ID; 
					$similar_posts = new WP_Query('posts_per_page=4&cat=$category_i'); 
				?>
				<?php if($similar_posts->have_posts()): ?>
					<span class="square-title">Slični Recepti</span>
					<div class="similar-posts-wrap">
						<?php while($similar_posts->have_posts()): $similar_posts->the_post(); ?>
							<article class="small-article">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('small-post-thumbnail'); ?>
								
								<div class="small-title-wrap">
									<h2><?php the_title(); ?></h2>
								</div>
							</a>
							</article>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>



<?php get_footer(); ?>
