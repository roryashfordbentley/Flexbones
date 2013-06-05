<?php /* The Template for displaying all single posts. */ ?>

<?php get_header(); ?>

<section class="content-container">
	<section class="content">
	
		<section class="blog-content">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>
				
				<header>
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="article-meta"><?php the_time('dS F Y'); ?></p>
					
				</header>
				
				<?php //Checks for featured, if none displays first image in gallery
		        $args = array( 'post_type' => 'attachment','numberposts' => 1, 'post_status' => null,'post_parent' => $post->ID,'order' => 'ASC' );
		
		        $attachments = get_posts( $args );
		        if ( $attachments ) { foreach ( $attachments as $attachment ) {
		        	$full_img_url = wp_get_attachment_image_src( $attachment->ID, 'full' );
		        ?>
	        		<div class="archive-thumbnail">
	        			<a href="<?php get_permalink(); ?>"><?php wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?></a>
	        		</div>
		        <?php }} ?>
		
				<?php the_excerpt(); ?>
				
				<footer>
					<!-- social etc -->
				</footer>
				
			</article>
		
			<?php endwhile; else: ?>
				
				<section class="main-article"> 
					<header><h1>Oops...<h2></header>
					<p>Sorry, no posts were found.</p>
				
				</section> 
				
			<?php endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>	
	
	</section>

</section>

<?php get_footer(); ?>