<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- <title>採用情報</title> -->
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" href="../main.css"> -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">


  <!-- <link rel="stylesheet" href="http://hokusys.jp/wp-content/themes/hokushinTheme/style.css" /> -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" />


  <!-- <link rel="shortcut icon" href="http://hokusys.jp/wp-content/themes/hokushinTheme/images/favicon.ico"> -->


  <!-- <link rel="stylesheet" href="recruit.css"> -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/recruit.css" rel="stylesheet">


  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery_341.js"></script>
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
          <li id="menu-item-18"><a href="<?php bloginfo('url'); ?>/"><span data-hover="home">home</span></a></li>
          <li id="menu-item-22"><a href="<?php bloginfo('url'); ?>/new-about"><span data-hover="about">about</span></a></li>
          <li id="menu-item-20"><a href="<?php bloginfo('url'); ?>/service"><span data-hover="service">service</span></a></li>
          <li id="menu-item-23"><a href="<?php bloginfo('url'); ?>/new-recruit"><span data-hover="recruit">recruit</span></a></li>
          <li id="menu-item-19"><a href="<?php bloginfo('url'); ?>/contact"><span data-hover="contact">contact</span></a></li>
          <!-- <li id="menu-item-18"><a href="../index.html"><span data-hover="home">home</span></a></li>
          <li id="menu-item-22"><a href="#"><span data-hover="about">about</span></a></li>
          <li id="menu-item-20"><a href="#"><span data-hover="service">service</span></a></li>
          <li id="menu-item-23" class="current"><a href="#"><span data-hover="recruit">recruit</span></a></li>
          <li id="menu-item-19"><a href="#"><span data-hover="contact">contact</span></a></li> -->
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
            <a class="nav-link nav-link-font" href="../index.html">HOME <span class="sr-only">(現位置)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="#">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="#">RECRUIT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="#">CONTACT</a>
          </li>

        </ul>
    </nav>
    <?php wp_head(); ?>
  </header><!-- END header -->