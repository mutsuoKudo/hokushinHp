
<!-- 新規HP（スラッグにハイフン入っているナビゲーションバーのコンテンツ）用　*パートナーシナジー、募集一覧 -->
<?php /* Template Name: ハイフン付きナビゲーションバーコンテンツ用 */ ?>

<?php get_header(2); ?>
<?php $slug_name = $post->post_name; ?>


<div class="page-content-image page-content-<?php echo $slug_name ?>"></div>
  <div class="page-contenet content-out-box w-max">
  <div class="content-inner-box w-980 row w-100" style="margin: 0 auto !important;">
    <?php while(have_posts()): the_post(); ?>

    <!-- *勝手にpタグやbrタグが入らないようにする -->
      <?php remove_filter('the_content', 'wpautop'); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>

<?php get_footer(); ?>

