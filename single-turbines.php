<?php get_header(); ?>
	<!-- (Optional) Page Billboard -->
	<?php if (get_the_post_thumbnail($post->ID)): ?>
		<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'billboard'); ?>
		<div class="billboard" style="background-image:url(<?php echo $img[0]; ?>);"></div>
	<?php endif ?>

	<?php $spec = get_field('specification'); ?>

	<div class="wrapper">
		<section class="content-container">
			<h1><?php the_title(); ?> <span class="turbine-power-meta"><?php echo (get_field('specification')? "- " . $spec[0]["rated_power"] : ""); ?>kw</span></h1>
			<div class="grid">
				<div class="span--1-1  span--2-3--m">
					<!-- The content -->
					<?php while(have_posts()): the_post(); ?>
						<div class="single-page-content">
							<?php the_content(); ?>
						</div>
						<div class="turbine-datasheet">

							<!-- Return on investment table -->
							<?php if (have_rows('returns_on_investment')): ?>
								<table>
									<caption>Returns on Investment (At 3% RPI)</caption>
									<thead>
										<th>Average Wind Speed (mps)</th>
										<th>FiT</th>
										<th>Export Tarriff</th>
										<th>Annual Energy Production (kwh)</th>
										<th>Year 1 Income</th>
										<th>Year 5 Cumulative Income</th>
										<th>Year 10 Cumulative Income</th>
										<th>Year 15 Cumulative Income</th>
										<th>Year 20 Cumulative Income</th>
									</thead>
									<tbody>
										<?php while(have_rows('returns_on_investment')): the_row(); ?>
											<tr>
												<td><?php the_sub_field('average_wind_speed'); ?></td>
												<td>&pound;<?php the_sub_field('fit'); ?></td>
												<td>&pound;<?php the_sub_field('export_tarriff'); ?></td>
												<td><?php echo format_number(get_sub_field('annual_energy_production')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_1_income')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_5_cumulative_income')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_10_cumulative_income')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_15_cumulative_income')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_20_cumulative_income')); ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							<?php endif ?>

							<!-- Income after Finance table -->
							<?php if (have_rows('income_after_finance')): ?>
								<table>
									<caption>Income After Finance</caption>
									<thead>
										<tr>
											<th>Average Wind Speed</th>
											<th>Year 5 Surplus</th>
											<th>Year 7 Surplus</th>
											<th>Year 9 Surplus</th>
										</tr>
									</thead>
									<tbody>
										<?php while(have_rows('income_after_finance')): the_row(); ?>
											<tr>
												<td><?php the_sub_field('average_wind_speed'); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_5_surplus')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_7_surplus')); ?></td>
												<td>&pound;<?php echo format_number(get_sub_field('year_9_surplus')); ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							<?php endif ?>

						</div>
					<?php endwhile; ?>
				</div>
				<div class="span--1-1  span--1-3--m">
					<!-- The sidebar -->
					<aside class="sidebar">

						<!-- Turbine Specification Table -->
						<?php if (have_rows('specification')): ?>
							<table class="table--vertical-headings">
								<caption>Specification</caption>
								<tbody>
									<?php while(have_rows('specification')): the_row(); ?>
										<tr>
											<th>Design Class</th>
											<td><?php the_sub_field('design_class'); ?></td>
										</tr>
										<tr>
											<th>Rated Power</th>
											<td><?php the_sub_field('rated_power'); ?>kW</td>
										</tr>
										<tr>
											<th>Rotor Diameter</th>
											<td><?php the_sub_field('rotor_diameter'); ?>m</td>
										</tr>
										<tr>
											<th>Cut-In Wind Speed</th>
											<td><?php the_sub_field('cut-in_wind_speed'); ?>mps</td>
										</tr>
										<tr>
											<th>Maximum Average Wind Speed</th>
											<td><?php the_sub_field('maximum_average_wind_speed'); ?>mps</td>
										</tr>
										<tr>
											<th>Tower Heights</th>
											<td><?php the_sub_field('tower_heights'); ?></td>
										</tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						<?php endif ?>
					</aside>
				</div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>