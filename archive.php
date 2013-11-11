<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

	<?php endwhile; endif; ?>	

	<menu class="pagination">
		<div class="newer"><p><?php previous_posts_link('Newer Entries') ?></p></div>
		<div class="older"><p><?php next_posts_link('Older Entries ','') ?></p></div>
	</menu>

<?php //get_sidebar(); ?>	
<?php get_footer(); ?>