<?php get_header(); ?>

<section class="slider-container">
	<section class="slider">
		<?php echo do_shortcode('[nivoslider slug="home-slider"]'); ?>
	</section>
</section>

<section class="content-container">
	<section class="content">
	
		<section class="main-content"> 
		
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				
				<?php if ( has_post_thumbnail() ) { ?>
					<section class="featured-image">
					<?php the_post_thumbnail('large'); ?>
					</section>
				<?php } ?>
				
				<?php the_content(); ?>
				
				<footer>
					<!-- author/ social etc -->
				</footer>
				
			<?php endwhile; ?>
		
		</section>
		
		<?php get_sidebar(); ?>	
	
	</section>

</section>

<?php get_footer(); ?>