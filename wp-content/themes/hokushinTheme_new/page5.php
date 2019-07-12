<!-- 既存ナビゲーションバーコンテンツ用 -->
<?php /* Template Name: 既存ナビゲーションバーコンテンツ用 */ ?>
<?php get_header(4); ?>
<?php $slug_name = $post->post_name; ?>
<div class="page-content-image page-content-<?php echo $slug_name ?>"></div>
<div class="page-contenet content-out-box w-max">
  <div class="content-inner-box w-980 clearfix">
<?php while(have_posts()): the_post(); ?>
    <h1 class="page-main-title"><span class="page-title-en"><?php echo ucfirst($slug_name) ?></span><br><?php the_title(); ?></h1>
    <div class="page-main-content">
<?php the_content(); ?>
    </div>
<?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>