<?php get_header(); ?>

<section class="section-title">
	<h2><?php post_type_archive_title( ); ?></h2>
</section>
		
<div class="content-container">
	
	<div class="content"> 
		
		<div class="blog-content">
			
			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>
						
						<header>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="article-meta"><?php the_time('dS F Y'); ?></p>
						</header>
						
						<?php 
							$args = array( 'post_type' => 'attachment','numberposts' => 1, 'post_status' => null,'post_parent' => $post->ID,'order' => 'ASC' );
							$attachments = get_posts( $args );
				        ?>
				        
				        <?php if ( $attachments ): ?> 
				        	<?php foreach ( $attachments as $attachment ): ?>
				        		<?php $full_img_url = wp_get_attachment_image_src( $attachment->ID, 'full' ); ?>
				        		<figure class="archive-thumbnail">
			        				<a href="<?php get_permalink(); ?>"><?php wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?></a>
			        			</figure>
			        		<?php endforeach; ?> 
				        <?php endif;  ?>
				        
						<?php the_excerpt(); ?>
						
						<footer>
							<!-- social etc -->
						</footer>

					</article>
		
				<?php endwhile; ?> 
			
			<?php else: ?>
				
				<section class="main-content"> 
					<header><h1>Oops...<h2></header>
					<p>Sorry, no posts were found.</p>
				</section> 
				
			<?php endif; ?>
		
			<menu class="pagination">
				<div class="newer"><p><?php previous_posts_link('&laquo; Newer Entries') ?></p></div>
				<div class="older"><p><?php next_posts_link('Older Entries &raquo;','') ?></p></div>
			</menu>
			
		</div>
	
		<?php get_sidebar(); ?>
	
	</div>
	
</div>

<?php get_footer(); ?>