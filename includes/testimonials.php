<?php
// testimonials page id
$id = 25;

if (have_rows('testimonials', $id)): ?>
	<section class="testimonials">
		<?php while(have_rows('testimonials', $id)): the_row(); ?>
			<div class="testimonial">
				<blockquote class="testimonial__quote">
					<?php the_sub_field('testimonial'); ?>
				</blockquote>
				<div class="testimonial__meta">
					<p class="testimonial__author">
						<?php the_sub_field('author'); ?>
					</p>
					<p class="testimonial__location">
						<?php the_sub_field('location'); ?>
					</p>
				</div>
			</div>
		<?php endwhile; ?>
	</section>
<?php endif; ?>