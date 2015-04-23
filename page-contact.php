<?php get_header(); ?>
	<!-- (Optional) Page Billboard -->
	<?php if (get_the_post_thumbnail($post->ID)): ?>
		<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'billboard'); ?>
		<div class="billboard" style="background-image:url(<?php echo $img[0]; ?>);"></div>
	<?php endif ?>

	<div class="wrapper">
		<section class="content-container">
			<div class="grid">
				<div class="span--2-3">
					<!-- The content -->
					<?php while(have_posts()): the_post(); ?>
						<div class="single-page-content">
							<?php the_field('page_content'); ?>
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="span--1-3">
					<!-- The sidebar -->
					<aside class="sidebar">
						<?php the_field('sidebar_content'); ?>
					</aside>
				</div>
			</div>
		</section>
	</div>

	<!-- Embedded Map (Provided by mapbox) -->
	<div class="map">
		<!-- Stop zoom feature when scrolling over iframe -->
		<div class="no-scroll-overlay" onClick="style.pointerEvents='none'"></div>
		<div id="mapCanvas" class="embeddable  embeddable--10-3"></div>
		<div class="map__caption">
			<h2>Newgen Power</h2>
			<p>
			Unit A,
			Sovereign Business Park,
			Barnsley Road,
			Shepley,
			Huddersfield,
			HD8 8BL</p>

			<p>You can find us next to Wellhouse Leisure.</p>
		</div>
	</div>

	<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.8/mapbox.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.8/mapbox.css' rel='stylesheet' />
	<script>
		L.mapbox.accessToken = 'pk.eyJ1IjoiZHJpenpseW93bCIsImEiOiI1QTVoNkdBIn0.3Ym7vouefNR1Flhqyz1rpA';
		// Downsample tiles for faster load times on slow internet connections* by
		// adjusting the format property in tileLayer. See
		// https://www.mapbox.com/developers/api/static/#format for all options.
		//
		// * https://www.mapbox.com/mapbox.js/example/v1.0.0/low-bandwidth/
		var map = L.mapbox.map('mapCanvas', 'drizzlyowl.lclk7lj9', {
		    tileLayer: {format: 'jpg70'}
		}).setView([53.575351, -1.706728], 13);
	</script>
<?php get_footer(); ?>