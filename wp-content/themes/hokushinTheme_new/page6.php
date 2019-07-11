<!-- ポリシー用ページ -->
<?php /* Template Name: ポリシー用ページ */ ?>

<?php get_header(2); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>