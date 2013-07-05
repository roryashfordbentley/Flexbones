<?php get_header(); ?>
<?php get_template_part( 'inc/content', 'header' ); ?>
	<section class="main-content" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>
						
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<date class="article-meta"><?php the_time('dS F Y'); ?></date>
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

			</article>

		<?php endwhile; ?>			
		<?php endif; ?>	
		<menu class="pagination">
			<div class="newer"><p><?php previous_posts_link('&laquo; Newer Entries') ?></p></div>
			<div class="older"><p><?php next_posts_link('Older Entries &raquo;','') ?></p></div>
		</menu>
		<?php get_template_part( 'inc/dummy', 'content' ); ?>
	</section>
	<?php get_sidebar(); ?>	

<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>
