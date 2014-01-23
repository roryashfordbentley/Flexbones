<?php get_header(); ?>
<div class="wrapper">
	<section class="main main--index" role="main"> 
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</section>
</div>
<?php get_footer(); ?>