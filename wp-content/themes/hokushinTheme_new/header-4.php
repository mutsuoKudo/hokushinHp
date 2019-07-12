<!-- 既存HPに組み込むようヘッダー -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- <title>採用情報</title> -->
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- style.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <!-- hokushin_old.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" />

  <!-- recruit.cssを読み込む　*ナビゲーションバー用 -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/recruit.css" rel="stylesheet">

  <!-- <link rel="shortcut icon" href="http://hokusys.jp/wp-content/themes/hokushinTheme/images/favicon.ico"> -->

  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery3.4.1読み込み -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery_341.js"></script>
  <?php wp_head(); ?>
</head>

<body>

  <header class="w-max">
    <!-- START header -->
    <!-- lgサイズ（992px）以上でのみ表示させる -->
    <div class="w-980 clearfix d-none d-lg-block">
      <!-- <h1 id="header-logo"><a href="../index.html"></a></h1> -->
      <h1 id="header-logo"><a href="<?php bloginfo('url'); ?>/"></a></h1>
      <nav class="menu-head-container">
        <ul class="hs-nav-effect">
          <li id="menu-item-18" <?php if (is_front_page() && is_home()) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/"><span data-hover="home">home</span></a></li>


          <!-- ドロップダウン -->
          <li id="menu-item-22" class="dropdown" <?php if (is_page('company')) echo ' class="current"'; ?>>
            <a href="<?php bloginfo('url'); ?>/company" class="dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-hover="about">about</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item hs-dropdown-item" style="margin-top:0 !important" href="<?php bloginfo('url'); ?>/company">company</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/partner-synergy">partner-synergy</a>
            </div>
          </li>


          <li id="menu-item-20" <?php if (is_page('service')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/service"><span data-hover="service">service</span></a></li>

          <li id="menu-item-23" <?php if (is_page('recruit')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/recruit"><span data-hover="recruit">recruit</span></a></li>

          <li id="menu-item-19" <?php if (is_page('contact')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/contact"><span data-hover="contact">contact</span></a></li>

        </ul>
      </nav>
    </div>

    <!-- ロゴ帯 -->
    <!-- mdサイズ（991px）以下でのみ表示させる -->
    <nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none hs-recruit-logo fixed-top">
      <a class="navbar-brand hs-logo-a" href="#">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/ホクシンlogo_7.png" alt="" width="auto" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto d-block d-lg-none w-100">
          <li class="nav-item active">
            <!-- <a class="nav-link nav-link-font" href="../index.html">HOME <span class="sr-only">(現位置)</span></a> -->
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/">HOME <span class="sr-only">(現位置)</span></a>
          </li>

          <!-- ドロップダウン -->
          <li class="nav-item dropdown">
            <a class="nav-link hs-nav-link-font dropdown-toggle"  id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">ABOUT</a>
            <div class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item text-center" href="<?php bloginfo('url'); ?>/company">company</a>
              <a class="dropdown-item text-center" href="<?php bloginfo('url'); ?>/partner-synergy">partner-synergy</a>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/recruit">RECRUIT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">CONTACT</a>
          </li>

        </ul>
    </nav>

  </header><!-- END header -->