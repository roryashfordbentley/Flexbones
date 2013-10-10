<?php get_header(); ?>
<div class="content">
	<div class="wrapper">
		<section class="main main-index" role="main"> 
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
				
				<?php //the_title(); ?>
				<?php //the_content(); ?>

			<?php endwhile; ?>			
			<?php endif; ?>	
			<?php //FILLER TEXT FOR TESTING OUT THE THEME ?>
			<?php get_template_part( 'dummy', 'content' ); ?>
		</section>
		<?php //get_sidebar(); ?>	
	</div>
</div>
<?php get_footer(); ?>