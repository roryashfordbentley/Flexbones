<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php global $page, $paged; wp_title('|', true, 'right'); bloginfo('name'); if ($paged >= 2 || $page >= 2){ echo ' | ' . sprintf('Page %s', max($paged, $page)); } ?></title>
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/stylesheets/ie.css" /><![endif]-->
</head>
<body <?php body_class(); ?>>