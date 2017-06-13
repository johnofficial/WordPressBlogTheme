<?php get_header(); 

if(have_posts()) : ?>
	<h2>
		<?php 
			if (is_tag()){
				single_tag_title();
			} elseif (is_author()){
				the_post();
				echo  'Аутор: ' . get_the_author();
				rewind_posts();
			}elseif(is_day()){
				echo 'Архива за дан: ' .get_the_date('d. m. Y.');
			}elseif(is_month()){
				echo 'Архива за месец: ' .get_the_date('m. Y.');
			}elseif(is_year()){
				echo 'Архива за годину: ' .get_the_date('Y');
			}elseif(is_category()){
					echo  single_cat_title();
			}
		 ?>
	 </h2>
	 <section class="archive-wrap">
	<?php while(have_posts()): the_post(); ?>
		<article class="similar-article">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('small-post-thumbnail'); ?>
			
			<div class="similar-title-wrap">
				<h2><?php the_title(); ?></h2>
			</div>
		</a>
		</article>
	<?php endwhile; 
		echo paginate_links();
		?>
		</section>
		<?php
	else :
		echo 'Trenutno nema sadržaja.';
endif;
?>

<?php get_footer(); ?>