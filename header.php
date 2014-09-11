<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="icon" href="<?php assets('imgs'); ?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<!--[if (lte IE 9)]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="<?php assets('js'); ?>/libs/modernizr.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" ></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>