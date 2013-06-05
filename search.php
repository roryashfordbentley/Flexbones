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

<section class="section-title">
	<h2>Search Results ( <?php echo $total_results; ?> found)</h2>
</section>	
		
<section class="content-container">

	<section class="content"> 
		<section class="page-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				    <div class="post-entry-content"> <!-- Post-entry-content -->
				    	<h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				        	<?php the_excerpt(); ?>
				        </div><!-- END of post-entry-content -->
				    </div><!--End of main wrapper -->
				<?php endwhile; ?>
			<?php else : ?>
	        <p>Sorry, there are no pages matching your search criteria</p>
	        <?php endif; ?>		
		</section>
	</section>
	
	<?php get_sidebar('promo'); ?>
	
</section>

<?php get_footer(); ?>




 <?php /* The template for displaying 404s. */ ?>

<?php get_header(); ?>

<section class="content-container">
	<section class="content">
	
		<section class="main-content"> 
			
			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : the_post(); ?>
			
					<header>
						<h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					</header>
				
					<?php the_excerpt(); ?>
					
					<footer>
						<!-- author/ social etc -->
					</footer>
					
				<?php endwhile; ?>
				<?php else : ?>
					
					<header>
						<h2>Oops</h2>
					</header>
					
					<p>Sorry we couldn't find anything related to your search.</p>
					
					<footer>
						
					</footer>
									
				<?php endif; ?>	
		</section>
		
		<?php get_sidebar(); ?>	
	
	</section>

</section>

<?php get_footer(); ?>


