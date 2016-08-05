<?php get_header(); ?>

<?php get_component('header'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    
    <?php get_component( 'author' ); ?>

<?php endwhile; endif; ?>

<?php get_component('footer'); ?>

<?php get_footer(); ?>
