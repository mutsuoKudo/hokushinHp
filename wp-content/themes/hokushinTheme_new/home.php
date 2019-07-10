<?php
/*
Template Name: Home
*/
 ?>
  <?php get_header(); ?>
<div id="main-image" class="w-max"></div>
<div id="main-copy" class="w-max"></div>
<div id="home-content" class="content-out-box w-max clearfix">
  <div class="content-inner-box w-980">
    <article>
      <h1 class="en-font"><span>Our Service</span></h1>
      <div class="clearfix service-sec">
        <section id="home-ser-sec1">
          <a href="<?php echo home_url(); ?>/service#service-it">
            <h1>ITソリューション<br>サービス</h1>
          </a>
        </section>
        <section id="home-ser-sec2">
          <a href="<?php echo home_url(); ?>/service#service-web">
            <h1>Webソリューション<br>サービス</h1>
          </a>
        </section>
        <section id="home-ser-sec3">
          <a href="<?php echo home_url(); ?>/service#service-bpo">
            <h1>BPOサービス<br>ヘルプデスクサービス</h1>
          </a>
        </section>
        <section id="home-ser-sec4">
          <a href="<?php echo home_url(); ?>/service#service-staffing">
            <h1>人材派遣サービス</h1>
          </a>
        </section>
      </div>
    </article>

    <article id="home-news">
      <h1 class="en-font">News</h1>
      <dl class="feed">
        <?php $posts = get_posts('numberposts=7&order=desc');
foreach($posts as $post): ?>
          <!-- <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"> -->
            <dd><span class="day"><?php echo date("Y 年 m 月 d 日", strtotime($post->post_date)); ?></span>
              <span class="feed-title"><?php the_title(); ?></span>
            </dd>
          <!-- </a>-->
          <?php endforeach; ?>
      </dl>
    </article>
    <article id="home-pol" class="clearfix">
      <a href="<?php echo home_url(); ?>/security-policy">セキュリティポリシー</a>
      <a href="<?php echo home_url(); ?>/privacy-policy">プライバシーポリシー</a>
    </article>
    <div id="footer-purokuma"></div>
  </div>
</div>
  
  <?php get_footer(); ?>