<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" user-scalable="no" />
	<title>
	<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' ); 
		if ( $site_description && ( is_home() || is_front_page() ) ){ echo " | $site_description"; }
		if ( $paged >= 2 || $page >= 2 ){ echo ' | ' . sprintf( 'Page %s', max( $paged, $page ) ); }
	?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/stylesheets/ie.css" />
	<![endif]-->
</head>
<body <?php body_class(); ?>>

<!-- visible on mobile only -->

<header class="mobile-header">
	<a href="#" id="jpanel-trigger" class="mobile-header__button">Menu</a>
</header>

<nav class="mobile-nav">
	<ul class="mobile-nav__menu">
		<?php 
			//this will fail unless location is defined
			$args = array(
				'menu'            => '',
				'container' => false,
				'items_wrap'      => '%3$s'
			);
		 	wp_nav_menu( $args ); 
		 ?>
	</ul>
</nav>

<!-- .visible on mobile only -->
<header class="site-header">
	<div class="wrapper">
		<a href="<?php echo get_home_url(); ?>" class="site-header__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo"></a>
		<nav class="primary-nav">
			<ul class="primary-nav__menu">
			<?php 
				//this will fail unless location is defined
				$args = array(
					'menu'            => '',
					'container' => false,
					'items_wrap'      => '%3$s'
				);
			 	wp_nav_menu( $args ); 
			 ?>
			</ul>
		</nav>
	</div>
</header>