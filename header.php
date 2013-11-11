<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 <?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 <?php language_attributes(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js gte-ie9 flex-type <?php language_attributes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); if ( $paged >= 2 || $page >= 2 ){ echo ' | ' . sprintf( 'Page %s', max( $paged, $page ) ); } ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/stylesheets/ie.css" />
	<![endif]-->
</head>
<body <?php body_class(); ?> >