<?php get_header(); ?>
	<section class="main main--archive" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			<article class="article article--archive">
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			</article>

		<?php endwhile; ?>			
		<?php endif; ?>
	</section>
<?php get_footer(); ?>