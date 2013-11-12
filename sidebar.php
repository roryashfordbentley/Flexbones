<header class="sidebar-index">	
	<a href="<?php echo get_home_url(); ?>" class="site-logo">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
	</a>		
	<nav class="primary-nav">
		<ul class="primary-nav__menu">
		<?php 
			//this will fail unless location is defined in WP-admin / menu
			$args = array(
				'menu' => '',
				'container' => false,
				'items_wrap' => '%3$s'
			);
		 	wp_nav_menu( $args ); 
		 ?>
		</ul>
	</nav>
</header>		