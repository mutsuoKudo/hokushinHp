<!-- TOP(IE)用ヘッダー -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">

  <title>北海道でエンジニア | 株式会社ホクシンシステム</title>
  <meta name="keywords" content="ホクシンシステム,ITソリューションサービス,Webソリューションサービス,RPAソリューションサービス,SESソリューションサービス,人材派遣サービス,人材紹介サービス,">
  <meta name="description" content="ホクシンシステムは、北海道札幌で、ITソリューションサービス、Webソリューションサービス、システムエンジニアリングサービス、人材派遣サービス、人材紹介サービスを提供するフレッシュなIT企業です。">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- style.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <!-- hokushin_old.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" rel="stylesheet">

  <!-- recruit.cssを読み込む　*ナビゲーションバー用 -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/recruit.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

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
          <li id="menu-item-22" class="dropdown" <?php if (is_page('company')) echo ' class="current"'; ?>>
            <a class="dropdown-toggle" id="navbarDropdownCompany" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-hover="企業情報">企業情報</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
              <a class="dropdown-item hs-dropdown-item mt-0" href="<?php bloginfo('url'); ?>/company">会社概要</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/philosophy">理念</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a>
            </div>
          </li>


          <!-- <li id="menu-item-20" <?php if (is_page('service')) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/service"><span data-hover="サービス">サービス</span></a></li> -->
          <!-- SERVICEドロップダウン -->
          <li id="menu-item-21" class="dropdown" <?php if (is_page('service')) echo ' class="current"'; ?>>
            <a class="dropdown-toggle" id="navbarDropdownService" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-hover="サービス">サービス</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownService">
              <a class="dropdown-item hs-dropdown-item mt-0" href="<?php bloginfo('url'); ?>/service">サービス</a>
              <a class="dropdown-item hs-dropdown-item" href="<?php bloginfo('url'); ?>/collaboration">ビジネスパートナー募集</a>
            </div>
          </li>




          <!-- RECRUITドロップダウン -->
          <li id="menu-item-21" class="dropdown" <?php if (is_page('job-category')) echo ' class="current"'; ?>>
            <a class="dropdown-toggle" id="navbarDropdownRecruit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none hs-recruit-logo fixed-top">
      <div class="w-100">
        <a class="navbar-brand hs-logo-a" href="<?php bloginfo('url'); ?>/">
          <img src="wp-content/uploads/2019/07/e76cd8347bc0116329d4b7104bf0d76c.png" alt="株式会社ホクシンシステム" width="auto" height="30">
        </a>
        <!-- ハンバーガーメニューは画面小さくなったら表示 -->
        <button class="navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto d-block d-lg-none w-100 hs-nav-scroll">
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
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/philosophy">理念</a></li>
              <li class="text-center hs-a mt-3 mb-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a></li>
            </ul>
          </li>

          <!-- <li class="nav-item mt-2 mb-2">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">サービス</a>
          </li> -->
          <!-- SERVICEドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            サービス
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonService">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/service">サービス</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/collaboration">ビジネスパートナー募集</a></li>
            </ul>
          </li>


          <!-- RECRUITドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonRecruit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              採用情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonRecruit">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/job-category">募集一覧</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/welfare">福利厚生</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/training">教育・研修</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/voices">社員の声</a></li>
              <li class="text-center hs-a mt-3 mb-2 "><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/application-form">エントリー</a></li>
            </ul>
          </li>

          <li class="nav-item mt-2 mb-4">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">お問合せ</a>
          </li>

        </ul>
    </nav>

  </header><!-- END header -->