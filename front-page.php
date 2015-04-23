<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<div class="slider">

			<figure class="slide" style="background-image: url('<?php assets('imgs'); ?>/homepage-slider.jpg');">
				<div class="slide__content-wrap">
					<figcaption class="slide__caption">
						<h1>More Power To Your Business.</h1>
						<p>Driven By Quality | Powered By Nature</p>
					</figcaption>
				</div>
			</figure>

			<div id="prevSlide" class="direction-arrow  direction-arrow--left"></div>
			<div id="nextSlide" class="direction-arrow  direction-arrow--right"></div>
		</div>

		<div class="feature-block">
			<div class="wrapper  wrapper--small">
				<h1 class="feature-block__heading">Welcome to Newgen</h1>
				<h2 class="feature-block__subheading">Leading Installers and Suppliers of Wind Turbines</h2>
				<hr>
				<section class="feature-block__content">
					<?php the_content(); ?>
					<a href="#" class="btn  btn--call-to-action">More About Us</a>
				</section>
			</div>
		</div>

		<div class="split-page-container">
			<!-- Background -->
			<div class="split-page  split-page--left">
				<div class="split-page__content  split-page__content--left">
					<div id="youtubeEmbed" class="embeddable  embeddable--16-9">
						<iframe src="https://www.youtube.com/embed/FGrlD_jFOQc" frameborder="0" allowfullscreen></iframe>
					</div>
					<h1>Turbine Installation Video</h1>
					<p>Watch our team install the worlds best 50kw wind turbine.</p>
				</div>
			</div>
			<div class="split-page  split-page--right">
				<div class="split-page__content  split-page__content--right">
					<h1>Latest Brochure</h1>
					<p>All the information you need to see that we are the perfect wind turbine partner.</p>
					<img src="<?php assets('imgs'); ?>/magazine.png" alt="Download our Brochure">
					<a href="#" class="btn  btn--dark  btn--call-to-action">Download</a>
				</div>
			</div>
		</div>

		<div class="feature-block">
			<div class="wrapper  wrapper--small">
				<h1 class="feature-block__heading">Join the conversation</h1>
				<h2 class="feature-block__subheading">The latest from our social media</h2>
			</div>
		</div>

		<?php if (have_rows('images')): ?>
			<?php $i = 0; while(have_rows('images')): the_row(); ?>
				<?php $image = get_sub_field('image'); ?>
				<?php $sq = wp_get_attachment_image_src( $image['id'], 'tile' ); ?>
				<?php $rc = wp_get_attachment_image_src( $image['id'], 'tile--stacked'); ?>
				<?php $img[$i] = array("square" => $sq[0], "rectangle" => $rc[0]); ?>
			<?php $i++; endwhile; ?>
		<div class="tiles">
			<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">

				<div class="span--1-1  span--2-5--l">

					<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
						<div class="span--1-2">

							<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
								<div class="span--1-1  span--fixed-size">
									<div class="tile  tile--twitter">
										<i class="fa fa-twitter"></i>
									</div>
								</div>
								<div class="span--1-1  span--fixed-size">
									<div class="tile" style="background-image:url('<?php echo $img[0]['square']; ?>')">
									</div>
								</div>
							</div>

						</div>
						<div class="span--1-2  span--fixed-size--2x">
							<div class="tile" style="background-image:url('<?php echo $img[1]['rectangle']; ?>')">
							</div>
						</div>
					</div>

				</div>

				<div class="span--1-1  span--2-5--l">

					<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
						<div class="span--1-2">

							<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
								<div class="span--1-1  span--fixed-size">
									<div class="tile  tile--facebook">
										<i class="fa fa-facebook-square"></i>
										<p>Click here to <br>
										<a href="#"><strong>like us on Facebook</strong></a></p>
										<p>00 people like <strong>Newgen UK.</strong></p>
									</div>
								</div>
								<div class="span--1-1  span--fixed-size">
									<div class="tile" style="background-image:url('<?php echo $img[2]['square']; ?>')">
									</div>
								</div>
							</div>

						</div>
						<div class="span--1-2">

							<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
								<div class="span--1-1  span--fixed-size">
									<div class="tile" style="background-image:url('<?php echo $img[3]['square']; ?>')">
									</div>
								</div>
								<div class="span--1-1  span--fixed-size">
									<div class="tile  tile--twitter">
										<i class="fa fa-twitter"></i>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="span--1-1  span--1-5--l">

					<div class="grid  grid--no-gutter  grid--no-gutter--m  grid--no-gutter--l">
						<div class="span--1-2  span--1-1--m  span--fixed-size">
							<div class="tile  tile--twitter">
								<i class="fa fa-twitter"></i>
							</div>
						</div>
						<div class="span--1-2  span--1-1--m  span--fixed-size">
							<div class="tile" style="background-image:url('<?php echo $img[4]['square']; ?>')">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php endif; ?>

	<?php endwhile; ?>
<?php get_footer(); ?>