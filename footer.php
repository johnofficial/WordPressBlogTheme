</main> <!-- End SiteContainer -->
<footer class="site-footer">
	<section class="footer-wrap">
		<nav class="footer-nav">
			<?php $args = array(
				'theme_location' => 'footer'
				);
			 ?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
		<h2 class="center-text">COPYRIGHT© <?php echo date('Y'); ?> · IZRADIO NOVIS</h2>
	</section>
</footer>
	
	<?php wp_footer(); ?>
</body>
</html>