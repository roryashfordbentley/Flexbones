<?php get_header(); ?>

<?php get_component('header'); ?>
<div class="wrapper  wrapper--small">
    <a href="#">Links</a>
</div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_component('footer'); ?>

<?php get_footer(); ?>
