<!-- TOP（iphone）用 -->
<?php /* Template Name: TOP（iphone）用  */ ?>
<?php get_header(5); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<!-- *勝手にpタグやbrタグが入らないようにする -->
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(3); ?>