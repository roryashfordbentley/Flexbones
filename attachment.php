<?php /* The template for displaying attachments. */ ?>

 <?php /* The template for displaying 404s. */ ?>

<?php get_header(); ?>

<section class="content-container">
	<section class="content">
	
		<section class="main-content"> 
		
			<header>
				<h1><?php echo get_the_title($post->post_parent); ?></h1>
			</header>
		
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<div class="entry-attachment">
					
					<?php if ( wp_attachment_is_image() ) :
					
						$attachments = array_values( get_children( 
							array( 'post_parent' => $post->post_parent, 
							'post_status' => 'inherit', 
							'post_type' => 'attachment', 
							'post_mime_type' => 'image', 
							'order' => 'ASC', 'orderby' => 'menu_order ID' 
						) ) );
						foreach ( $attachments as $k => $attachment ) {
							if ( $attachment->ID == $post->ID )
								break;
						}
						$k++;
						// If there is more than 1 image attachment in a gallery
						if ( count( $attachments ) > 1 ) {
							if ( isset( $attachments[ $k ] ) ){
								// get the URL of the next image attachment
								$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
							} else {
								// or get the URL of the first image attachment
								$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
							}
						} else {
							// or, if there's only 1 image attachment, get the URL of the image
							$next_attachment_url = wp_get_attachment_url();
						}
					?>
					<div>
						<a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment">
						<?php echo wp_get_attachment_image($attachment->ID,'large', false); ?>
						</a>
					</div>

					<div>
						<?php previous_image_link( false, '<div class="nav-previous button"> &larr; Prev </div>'  ); ?>
						<?php next_image_link( false, '<div class="nav-next button"> Next &rarr; </div>'  ); ?>
					</div><!-- #nav-below -->
					
				<?php else : ?>
					
					<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title(); ?>" rel="attachment"><?php echo basename( get_permalink() ); ?></a>
				
				<?php endif; ?>

				<?php if ( ! empty( $post->post_parent ) ) : ?>
					<p><a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php echo get_the_title($post->post_parent); ?>" rel="gallery">
						<span class="meta-nav">&larr;</span> Return to <?php echo get_the_title( $post->post_parent ); ?>
					</a></p>
				<?php endif; ?>

				</div><!-- .entry-attachment -->
				
				<div class="entry-caption"><?php if ( !empty( $post->post_excerpt ) ) the_excerpt(); ?></div>

				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . 'Pages:', 'after' => '</div>' ) ); ?>

			</div><!-- .entry-content -->
				
		</div>

		<?php endwhile; // end of the loop. ?>	
			
			<footer>
				<!-- author/ social etc -->
			</footer>
		
		</section>
		
		<?php get_sidebar(); ?>	
	
	</section>

</section>

<?php get_footer(); ?>