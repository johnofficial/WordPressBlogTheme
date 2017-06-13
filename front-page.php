<?php get_header(); ?>
<section class="home-page-posts">
<?php $newest_posts = new WP_Query('posts_per_page=10'); ?>
<?php if($newest_posts->have_posts()) : ?>
	<span class="square-title">Najnoviji recepti</span>
	<?php while($newest_posts->have_posts()) : $newest_posts->the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile;
	else :
		echo 'Trenutno nema sadržaja.';
endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
