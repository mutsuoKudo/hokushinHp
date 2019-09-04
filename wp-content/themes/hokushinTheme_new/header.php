<!-- top（IE・iphone)以外のtopに組み込むようヘッダー -->
<!DOCTYPE html>
<html>

<head>

  <?php
  global $is_IE;
  global $is_iphone;
  // global $is_sfari

  if ($is_IE) {
    // http_response_code( 301 ) ;

    $location =  home_url() . "/home2";

    // var_dump($llocation);

    wp_redirect($location, 301);
    exit;
  }elseif ($is_iphone) {
    // http_response_code( 301 ) ;

    $location =  home_url() . "/home3";

    // var_dump($llocation);

    wp_redirect($location, 301);
    exit;
  }
  ?>

  <title>北海道でエンジニア | 株式会社ホクシンシステム</title>
  <meta name="keywords" content="ホクシンシステム,ITソリューションサービス,Webソリューションサービス,RPAソリューションサービス,SESソリューションサービス,人材派遣サービス,人材紹介サービス,"><meta name="description" content="ホクシンシステムは、北海道札幌で、ITソリューションサービス、Webソリューションサービス、システムエンジニアリングサービス、人材派遣サービス、人材紹介サービスを提供するフレッシュなIT企業です。">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,IE=edge">
  <meta http-equiv="X-UA-TextLayoutMetrics" content="gdi" />




  <!-- loading.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/loading.css" rel="stylesheet">

  <!-- style.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- bootstrap -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- index.cssを読み込む -->
  <link  href="<?php bloginfo('stylesheet_directory'); ?>/index.css" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- hokushin_old.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" rel="stylesheet" media="print" onload="this.media='all'">
  
  <?php wp_head(); ?>
</head>

<body class="hs-body-start hs-hide hs-body">
  <!-- *このdivはhome.php内で閉じられるのでここでは閉じなくてOK -->
  <!-- <div class="hs-base-container hs-body-start"> 7/31より前-->
  <div class="hs-base-container">



    <!-- ロゴ+帯 -->
    <nav class="navbar navbar-expand-md navbar-light" style="z-index: 2000; background-color: lightgray;">
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

        <ul class="navbar-nav mr-auto d-block d-md-none hs-nav-scroll" style="width:100%;">
          <li class="nav-item mt-4 mb-2">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/">ホーム</a>
          </li>

          <!-- ABOUTドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              企業情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonCompany">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/philosophy">理念</a></li>
              <li class="text-center hs-a mt-3 mb-2"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a></li>
            </ul>
          </li>

          <li class="nav-item mt-2 mb-2">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">サービス</a>
          </li>

          <!-- RECRUITドロップダウン -->
          <li class="nav-item mt-2 mb-2">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonRECRUIT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              採用情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonRecruit">
              <li class="text-center hs-a mt-2"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/job-category">募集一覧</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/welfare">福利厚生</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/training">教育・研修</a></li>
              <li class="text-center hs-a mt-3"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/voices">社員の声</a></li>
              <li class="text-center hs-a mt-3 mb-2"><a style="font-weight:normal; font-size:0.8rem;" href="<?php bloginfo('url'); ?>/application-form">エントリー</a></li>
            </ul>
          </li>

          <li class="nav-item mt-2 mb-4">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">お問合せ</a>
          </li>

        </ul>
      </div>
    </nav>


    <!-- ナビゲーションバー -->
    <div class="hs-nav">
      <!-- ナビゲーションバー　デスクトップ用（タブレット以上で表示） -->
      <nav class="d-none d-md-block hs-nav-container">
        <div class="hs-nav-effect p-1">
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/"><span data-hover="ホーム">ホーム</span></a>
          </div>

          <!-- ABOUTドロップダウン -->
          <div class="d-inline-block">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span data-hover="企業情報">企業情報</span>
            </a>

            <ul class="dropdown-menu pt-3" role="menu">
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/company" class="m-0 text-center">会社概要</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/philosophy" class="m-0 text-center">理念</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/partner-synergy" class="m-0 text-center">パートナーシナジー</a>
              </li>
            </ul>
          </div>

          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/service"><span data-hover="サービス">サービス</span></a>
          </div>

          <!-- RECRUITドロップダウン -->
          <div class="d-inline-block">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span data-hover="採用情報">採用情報</span>
            </a>
            <ul class="dropdown-menu pt-3" role="menu">
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/job-category" class="m-0 text-center">募集一覧</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/welfare" class="m-0 text-center">福利厚生</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/training" class="m-0 text-center">教育・研修</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/voices" class="m-0 text-center">社員の声</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/application-form" class="m-0 text-center">エントリー</a>
              </li>
            </ul>
          </div>

          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/contact"><span data-hover="お問合せ">お問合せ</span></a>
          </div>
        </div>
      </nav>
    </div>