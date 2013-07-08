<?php get_header(); ?>
<?php get_template_part( 'inc/content', 'header' ); ?>
	<article <?php post_class('main main-single'); ?> role="main"> 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<header>
				<h2><?php the_title(); ?></h2>
				<p class="article-meta"><?php the_time('dS F Y'); ?></p>
			</header>
	
			<?php the_content(); ?>
			
			<footer>
				<!-- social etc -->
			</footer>
		<?php endwhile; endif; ?>
	</article>
	<?php get_sidebar(); ?>	

<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>