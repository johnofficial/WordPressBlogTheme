<?php 
	get_header();
if(have_posts()) : ?>
	<h2>Rezultati pretrage za: <?php the_search_query(); ?></h2>
<?php 
	while(have_posts()) : the_post(); 
		get_template_part('content');
	 endwhile;
		echo paginate_links( );
	else :
		echo 'Trenutno nema sadržaja koji ste uneli.';
endif;

	get_footer();
 ?>