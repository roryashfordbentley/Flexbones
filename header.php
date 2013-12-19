<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 " <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js gte-ie9" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); if ( $paged >= 2 || $page >= 2 ){ echo ' | ' . sprintf( 'Page %s', max( $paged, $page ) ); } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Montserrat:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/stylesheets/ie.css" />
<![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="wrapper content">
	<header class="site-header">	
		<a href="<?php echo get_home_url(); ?>" class="site-logo-link clear">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-dark-small.png" alt="portrait logo" class="site-logo">
		</a>		
		<nav class="primary-nav"> 
			<?php 
				$location 				= 'main_menu';
				$css_class_prefix 		= 'main-menu';
				$item_class_inheritance =  true; 
				
				$args = array(
					'theme_location' 	=> $location,
					'menu_class' 		=> $css_class_prefix,
					'container'			=> false,
					//'items_wrap' 		=> '%3$s',
					'walker' 			=> new walker_texas_ranger($css_class_prefix, $item_class_inheritance)
				);
			?>
			<?php if (has_nav_menu($location)): ?>
				 <?php wp_nav_menu( $args ); ?>
			<?php else: ?>
				<p>you must define a menu in WP-admin<p>
			 <?php endif; ?>
		</nav>
	</header>	