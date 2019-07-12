<!-- ポリシー用ページ -->
<?php /* Template Name: 見出し文字数多いやつ用ページ （ポリシー系、パートナーシナジー系）*/ ?>

<?php get_header(2); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>