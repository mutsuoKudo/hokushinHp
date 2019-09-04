<!-- 社員の声iphone用 -->
<?php /* Template Name: 社員の声iphone用 */ ?>

<?php get_header(8); ?>
<?php $slug_name = $post->post_name; ?>


<div class="page-content-image page-content-voices"></div>
  <div class="page-contenet content-out-box w-max">
  <div class="content-inner-box w-980 row w-100" style="margin: 0 auto !important;">
    <?php while(have_posts()): the_post(); ?>
    <h1 class="page-main-title col-12 col-sm-3 m-0"><span class="page-title-en">Voices</span><br>社員の声</h1>

    <!-- *勝手にpタグやbrタグが入らないようにする -->
      <?php remove_filter('the_content', 'wpautop'); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>

<?php get_footer(); ?>