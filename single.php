<?php get_header(); ?>
<div class="content">
	<div class="wrapper">
		<article <?php post_class('main main-single'); ?> role="main"> 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<header>
					<h1><?php the_title(); ?></h1>
					<p class="article-meta">
						<time class="article-meta__time" datetime="<?php echo the_date('Y-m-d');?>" class="article-date" >
							<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
						</time>
						<span class="article-meta__author">
								<?php //echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
								/ Written by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
						</span>
					</p>
					
					<figure class="content-image content-image--featured">
						<?php echo the_post_thumbnail( $size = 'full' ); ?>
					</figure>
				</header>
		
				<?php the_content(); ?>
				
			<?php endwhile; endif; ?>
		</article>
		<?php //get_sidebar(); ?>	
	</div>
</div>
<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>