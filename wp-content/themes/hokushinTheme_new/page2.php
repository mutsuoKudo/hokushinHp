<!-- 新規HP（ナビゲーションバーのコンテンツ）用　*ABOUT・SERVICE・RECRUIT・CONTACT -->
<?php /* Template Name: 新規ナビゲーションバーコンテンツ用 */ ?>

<?php get_header(2); ?>
<?php $slug_name = $post->post_name; ?>


<div class="page-content-image page-content-<?php echo $slug_name ?>"></div>
  <div class="page-contenet content-out-box w-max">
    <div class="content-inner-box w-980 clearfix">
    <?php while(have_posts()): the_post(); ?>
    <h1 class="page-main-title"><span class="page-title-en"><?php echo ucfirst($slug_name) ?></span><br><?php the_title(); ?></h1>

    <!-- *勝手にpタグやbrタグが入らないようにする -->
      <?php remove_filter('the_content', 'wpautop'); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>

<?php get_footer(); ?>