<!-- 募集要項用ページ -->
<?php /* Template Name: 募集要項用ページ */ ?>

<?php get_header(3); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>