<!DOCTYPE html>
<html class="no-js" id="html" <?php language_attributes(); ?>>
<head>
<!-- Typekit -->
<script src="//use.typekit.net/saw0ybo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Site meta -->
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(is_front_page()): echo bloginfo('name'); echo " - "; echo bloginfo('description'); else: echo get_the_title(); echo " - "; echo bloginfo('name'); endif; ?></title>
<link rel="icon" href="<?php assets('imgs'); ?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

<!--[if (lte IE 9)]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" ></script>
<![endif]-->

<!-- Analytics -->
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'TRACKING CODE', 'DOMAIN');
    ga('send', 'pageview');
</script>

<!-- Removes "no-js" from the html element if JS is enabled and adds the "js" class instead -->
<script type="text/javascript">
	document.getElementById("html").className = document.getElementById("html").className.replace( /(?:^|\s)no-js(?!\S)/g , 'js' )
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Mobile Navigation Menu -->
<nav id="mobileMenu" class="mobile-menu  slide-menu-left">
	<button class="close-menu  [ btn ]">Close Menu</button>
	<?php bem_menu('main_menu','mobile-menu-list'); ?>
</nav>

<!-- Site Header -->
<section class="container">
	<header class="site-header">
		<div class="grid">
			<div class="span--1-1  span--4-12--l">
				<a href="<?php echo bloginfo('url'); ?>" class="return-home-link" title="Return to Newgen Power Homepage">
					<img src="<?php assets('imgs'); ?>/logo.png" alt="Newgen Power" height="78px" width="230px" class="site-logo">
				</a>
			</div>
			<div class="span--1-1  span--8-12--l">
				<p class="header-contact">Tel: 01484 766 165</p>
				<?php bem_menu(); ?>
				<button class="toggle-mobile-menu  [ btn ]  [ toggle-slide-left ]">Show Menu</button>
			</div>
		</div>
	</header>

