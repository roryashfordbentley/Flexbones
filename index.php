<?php get_header(); ?>
<?php get_template_part('demo_elements'); ?>
<?php while(have_posts()) : the_post(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>