<?php get_header(); ?>
<?php get_template_part( 'inc/content', 'header' ); ?>
	<section class="main main-index" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
			<h1><?php //the_title(); ?></h1>
			<?php //the_content(); ?>

		<?php endwhile; ?>			
		<?php endif; ?>	
		<?php //FILLER TEXT FOR TESTING OUT THE THEME ?>
		<?php get_template_part( 'inc/dummy', 'content' ); ?>
	</section>
	<?php get_sidebar(); ?>	
<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>