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

    <!-- 小さくなったら表示 -->
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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="font-size:0.8rem; font-weight:normal;" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">ABOUT</a>
            <div class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item text-center" href="<?php bloginfo('url'); ?>/company">company</a>
              <a class="dropdown-item text-center" href="<?php bloginfo('url'); ?>/partner-synergy">partner-synergy</a>
            </div>
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

          <!-- <div class="dropdown active"> -->
          <a href="<?php bloginfo('url'); ?>/about" class="dropdown-toggle" data-toggle="dropdown" role="button">
            <span data-hover="about">about</span>
          </a>

          <ul class="dropdown-menu pt-3" role="menu">
            <li class="text-center">
              <a href="<?php bloginfo('url'); ?>/company" class="m-2 text-center" style="margin:0 !important;">company</a>
            </li>
            <li class="text-center"><a href="<?php bloginfo('url'); ?>/partner-synergy" class="m-2" style="margin:0 !important;">partner-synergy</a>
            </li>
          </ul>
          <!-- </div> -->


          <a href="<?php bloginfo('url'); ?>/service"><span data-hover="service">service</span></a>

          <a href="<?php bloginfo('url'); ?>/recruit"><span data-hover="recruit">recruit</span></a>


          <a href="<?php bloginfo('url'); ?>/contact"><span data-hover="contact">contact</span></a>

        </div>
      </nav>
    </div>