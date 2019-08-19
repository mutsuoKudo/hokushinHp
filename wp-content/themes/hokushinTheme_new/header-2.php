<!-- 新規HP（ナビゲーションバーコンテンツ）用ヘッダー -->
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

  <!-- recruit.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/recruit.css" rel="stylesheet">

  <!-- common.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/common.css" rel="stylesheet">

  <!-- <link rel="shortcut icon" href="http://hokusys.jp/wp-content/themes/hokushinTheme/images/favicon.ico"> -->

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery_341.js"></script>

  <?php wp_head(); ?>
</head>

<body>

  <header class="w-max">
    <!-- START header -->
    <!-- lgサイズ（992px）以上でのみ表示させる -->
    <div class="w-980 clearfix d-none d-lg-block">
      <h1 id="header-logo"><a href="<?php bloginfo('url'); ?>/company"></a></h1>
      <nav class="menu-head-container">
        <ul class="hs-nav-effect">
          <li id="menu-item-18" <?php if (is_front_page() && is_home()) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/"><span data-hover="ホーム">ホーム</span></a></li>

          <!-- ABOUTドロップダウン -->
          <li id="menu-item-22" class="dropdown" <?php if (is_page('philosophy')) echo ' class="current"'; ?>>
            <a href="<?php bloginfo('url'); ?>/company" class="dropdown-toggle" id="navbarDropdownCompany" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-hover="企業情報">企業情報</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
              <a class="dropdown-item hs-dropdown-item mt-0" href="<?php bloginfo('url'); ?>/company">会社概要</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/philosophy">企業理念</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a>
            </div>
          </li>

          <li id="menu-item-20" <?php if (is_page('service')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/service"><span data-hover="サービス">サービス</span></a></li>

          <!-- RECRUITドロップダウン -->
          <li id="menu-item-22" class="dropdown" <?php if (is_page('job-category')) echo ' class="current"'; ?>>
            <a href="<?php bloginfo('url'); ?>/job-category" class="dropdown-toggle" id="navbarDropdownRecruit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-hover="採用情報">採用情報</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownRecruit">
              <a class="dropdown-item hs-dropdown-item mt-0" href="<?php bloginfo('url'); ?>/job-category">募集一覧</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/welfare">福利厚生</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/training">教育・研修</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/voices">社員の声</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/application-form">エントリー</a>
            </div>
          </li>

          <li id="menu-item-19" <?php if (is_page('contact')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/contact"><span data-hover="お問合せ">お問合せ</span></a></li>

        </ul>
      </nav>
    </div>

    <!-- ロゴ+帯 -->
    <!-- mdサイズ（991px）以下でのみ表示させる -->
    <nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none hs-recruit-logo fixed-top text-center">
      <div class="w-100">
        <a class="navbar-brand hs-logo-a" href="<?php bloginfo('url'); ?>/">
          <img src="wp-content/uploads/2019/07/e76cd8347bc0116329d4b7104bf0d76c.png" alt="" width="auto" height="30">
        </a>
        <!-- ハンバーガーメニューは画面小さくなったら表示 -->
        <button class="navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto d-block d-lg-none w-100">
          <li class="nav-item mt-4 mb-2">
            <!-- <a class="nav-link nav-link-font" href="../index.html">HOME <span class="sr-only">(現位置)</span></a> -->
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/">ホーム<span class="sr-only">(現位置)</span></a>
          </li>

          <!-- ABOUTドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              企業情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonCompany">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/philosophy">企業理念</a></li>
              <li class="text-center hs-a mt-3 mb-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a></li>
            </ul>
          </li>

          <li class="nav-item mt-2 mb-2">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">サービス</a>
          </li>

          <!-- RECRUITドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              採用情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonRecruit">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/job-category">募集一覧</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/welfare">福利厚生</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/training">教育・研修</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/voices">社員の声</a></li>
              <li class="text-center hs-a mt-3 mb-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/application-form">エントリー</a></li>
            </ul>
          </li>

          <li class="nav-item mt-2 mb-4">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">お問合せ</a>
          </li>

        </ul>
    </nav>

  </header><!-- END header -->