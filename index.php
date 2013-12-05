<?php get_header(); ?>
	<section class="main main--index" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<?php endwhile; ?>			
		<?php endif; ?>	
	</section>
<?php get_footer(); ?>