<?php get_header(); ?>
    <?php //bem_menu('main_menu','main menu'); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
