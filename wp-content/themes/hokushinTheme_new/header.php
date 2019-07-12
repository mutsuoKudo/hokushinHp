<!-- 新規HP（TOP）に組み込むようヘッダー -->
<!DOCTYPE html>
<html>

<head>
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery_311.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/parallax_310.js"></script>

  <!-- style.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  
  <!-- bootstrap -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- index.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/index.css">
  <!-- common.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/common.css">
  <!-- hokushin_old.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" />

</head>

<body class="hs-body-start hs-hide hs-body">

  <div class="hs-base-conteiner hs-body-start">

    <!-- ロゴ帯 -->
    <nav class="navbar navbar-expand-md navbar-light mb-4" style="z-index: 2000; background-color: lightgray;">
      <a class="navbar-brand hs-logo-a" href="#">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/ホクシンlogo_7.png" alt="" width="auto" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto d-block d-md-none" style="width:100%">
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/old-home" style="font-size:0.8rem; font-weight:normal;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/company" style="font-size:0.8rem; font-weight:normal;">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/service" style="font-size:0.8rem; font-weight:normal;">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/recruit" style="font-size:0.8rem; font-weight:normal;">RECRUIT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/contact" style="font-size:0.8rem; font-weight:normal;">CONTACT</a>
          </li>

        </ul>
    </nav>


    <!-- ナビゲーションバー -->
    <div class="hs-nav">
      <!-- ナビゲーションバー　デスクトップ用（タブレット以上で表示） -->
      <nav class="d-none d-md-block hs-nav-conteiner">
        <div class="hs-nav-effect p-1">
          <a href="<?php bloginfo('url'); ?>/old-home"><span data-hover="home">home</span></a>
          <a href="<?php bloginfo('url'); ?>/company"><span data-hover="about">about</span></a>
          <a href="<?php bloginfo('url'); ?>/service"><span data-hover="service">service</span></a>
          <a href="<?php bloginfo('url'); ?>/recruit"><span data-hover="recruit">recruit</span></a>
          <a href="<?php bloginfo('url'); ?>/contact"><span data-hover="contact">contact</span></a>
        </div>
      </nav>
    </div>