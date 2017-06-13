<?php get_header(); ?>
<section class="home-page-posts">
<?php if(have_posts()) : ?>
	<span class="square-title">Najnoviji recepti</span>
	<?php while(have_posts()) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile;
	else :
		echo 'Trenutno nema sadržaja.';
endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
