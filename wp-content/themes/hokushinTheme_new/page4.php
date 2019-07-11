<!-- 既存TOP用 -->
<?php /* Template Name: 既存TOP用  */ ?>
<?php get_header(4); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>