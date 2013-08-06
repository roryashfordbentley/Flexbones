<?php get_header(); ?>
<div class="content">
	<div class="wrapper">
		<section class="main main-archive" role="main"> 
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>
							
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<date class="article-meta"><?php the_time(get_option('date_format')); ?></date>
					</header>
			        
					<?php the_excerpt(); ?>

				</article>

			<?php endwhile; endif; ?>	

			<menu class="pagination">
				<div class="newer"><p><?php previous_posts_link('Newer Entries') ?></p></div>
				<div class="older"><p><?php next_posts_link('Older Entries ','') ?></p></div>
			</menu>
		</section>
		<?php get_sidebar(); ?>	
	</div>
</div>
<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>
