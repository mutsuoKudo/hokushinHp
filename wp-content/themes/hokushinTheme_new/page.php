<!-- ナビゲーションバーのコンテンツ用（社員の声以外）　*ABOUT・SERVICE・RECRUIT・CONTACT・・・ -->
<?php /* Template Name: ナビゲーションバーコンテンツ用 */ ?>

<?php get_header(2); ?>
<?php $slug_name = $post->post_name; ?>


<div class="page-content-image page-content-<?php echo $slug_name ?>"></div>
  <div class="page-contenet content-out-box w-max">
  <div class="content-inner-box w-980 row w-100" style="margin: 0 auto !important;">
    <?php while(have_posts()): the_post(); ?>
    <h1 class="page-main-title col-12 col-sm-3 m-0"><span class="page-title-en"><?php echo ucfirst($slug_name) ?></span><br><?php the_title(); ?></h1>

    <!-- *勝手にpタグやbrタグが入らないようにする -->
      <?php remove_filter('the_content', 'wpautop'); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>

<?php get_footer(); ?>