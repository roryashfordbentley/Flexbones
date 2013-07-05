<?php /* The template for displaying Search Results pages. */ ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);

global $wp_query;
$total_results = $wp_query->found_posts;

?>

<?php get_header(); ?>
<?php get_header(); ?>
<?php get_template_part( 'inc/content', 'header' ); ?>
	<section class="main-content" role="main"> 

		<h1>Search Results ( <?php echo $total_results; ?> found)</h1>

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
		    <article class="post">
		    	<h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		        <?php the_excerpt(); ?>
		    </article>
		<?php endwhile; ?>
		<?php else : ?>
        	<p>Sorry, there are no pages matching your search criteria</p>
        <?php endif; ?>		

	</section>
	<?php get_sidebar(); ?>	

<?php get_template_part( 'inc/content', 'footer' ); ?>
<?php get_footer(); ?>