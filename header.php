<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('lang'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">


	<meta name="theme-color" content="#ffffff">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php wp_head(); ?>

    <!-- Social Networks Meta Tags -->
	<meta property="og:type" 		content="article">
	<meta property="og:title" 		content="<?php bloginfo('name'); ?>">
	<meta property="og:url" 		content="">
	<meta property="og:image" 		content="">
	<meta property="og:site_name" 	content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
</head>
<body <?php body_class(); ?>>

	<!-- Site Header -->
	<header class="site-header clearfix">
		<div class="header-wrap">
			<div class="header-cover">
				<?php if ( wp_is_mobile() ) { ?>
				    <div class="mobile-nav-toggle">
					  <span></span>
					</div>
				<?php  } ?>

				<div class="site-logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
				<?php if ( !wp_is_mobile() ) { ?>
				    <div class="header-search"><?php get_search_form(); ?></div>
				<?php  } ?>
			</div>

			<?php if ( !wp_is_mobile() ) { ?>
			<nav class="site-navigation">
				<?php 
					$args = array(
						'theme_location' => 'primary'
						);
				 ?>
				<?php wp_nav_menu( $args ); ?>
			</nav>	
			<?php  } ?>	

		</div>

	</header>
			<?php if ( wp_is_mobile() ) { ?>
			<div class="mobile-header">
				<div class="header-search"><?php get_search_form(); ?></div>
				<nav class="mobile-navigation">
					<?php 
						$args = array(
							'theme_location' => 'primary'
							);
					 ?>
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
			<?php  } ?>		
	
	<!-- SiteContainer -->
	<main class="site-container <?php if(is_single()): echo "single-post"; endif; ?>">
		<?php if( is_home()): ?>
			<section class="home-slider">
					<span class="left" left-arrow>
						<svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
						    <path d="M0-.5h24v24H0z" fill="none"/>
						</svg>
					</span>
					<span class="right" right-arrow>
						<svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
						    <path d="M0-.25h24v24H0z" fill="none"/>
						</svg>
					</span>
			<div class="slider-wrap" slider-wrap>


				<?php $slide_posts = new WP_Query('posts_per_page=5&orderby=rand'); ?>
				<?php if($slide_posts->have_posts()): ?>
					<?php while($slide_posts->have_posts()): $slide_posts->the_post(); ?>
						<article class="slider-article">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('slider-thumbnail'); ?>
							
							<div class="slider-title-wrap">
								<h2 ><?php the_title(); ?></h2>
							</div>
						</a>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			</section>
	
		<?php endif; wp_reset_postdata(); ?>



