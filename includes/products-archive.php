<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'turbines',
	'post_status'            => 'publish',
	'posts_per_page'		 => -1
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) : $query->the_post();
?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
<?php	endwhile;
endif;

// Restore original Post Data
wp_reset_postdata();
?>