<?php get_header(); ?>
	<!-- (Optional) Page Billboard -->
	<?php if (get_the_post_thumbnail($post->ID)): ?>
		<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'billboard'); ?>
		<div class="billboard" style="background-image:url(<?php echo $img[0]; ?>);"></div>
	<?php endif ?>

	<div class="wrapper">
		<section class="content-container">
			<h1><?php the_title(); ?></h1>
			<div class="grid">
				<div class="span--1-1  span--2-3--m">
					<!-- The content -->
					<?php while(have_posts()): the_post(); ?>
						<div class="single-page-content">
							<?php the_field('page_content'); ?>

							<?php if (is_page('testimonials')): ?>
								<?php get_template_part('includes/testimonials'); ?>
							<?php endif ?>

							<?php if (is_page('products')): ?>
								<?php get_template_part('includes/products-archive'); ?>
							<?php endif ?>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="span--1-1  span--1-3--m">
					<!-- The sidebar -->
					<aside class="sidebar">
						<?php the_field('sidebar_content'); ?>
					</aside>
				</div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>