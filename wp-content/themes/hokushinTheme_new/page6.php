<!-- ポリシー用ページ -->
<?php /* Template Name: ポリシー系用ページ */ ?>

<?php get_header(2); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>