<?php get_header(); ?>

<div class="wrapper">
	<div class="content">
		<section class="main-content" role="main"> 
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</section>
		<?php get_sidebar(); ?>	
	</div>

</div>

<?php get_footer(); ?>