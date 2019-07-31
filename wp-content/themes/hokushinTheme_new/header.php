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
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/index2.css">
  <!-- common.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/common.css">
  <!-- hokushin_old.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" />

</head>

<body class="hs-body-start hs-hide hs-body">
  <!-- *このdivはhome.php内で閉じられるのでここでは閉じなくてOK -->
  <!-- <div class="hs-base-container hs-body-start"> 7/31より前-->
  <div class="hs-base-container">

    <!-- ロゴ+帯 -->
    <nav class="navbar navbar-expand-md navbar-light" style="z-index: 2000; background-color: lightgray;">
      <a class="navbar-brand hs-logo-a" href="#">
        <img src="wp-content/uploads/2019/07/e76cd8347bc0116329d4b7104bf0d76c.png" alt="" width="auto" height="30">
      </a>
      <!-- ハンバーガーメニューは画面小さくなったら表示 -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto d-block d-md-none" style="width:100%">
          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/old-home">ホーム</a>
          </li>

          <!-- ABOUTドロップダウン -->
          <li class="nav-item">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              企業情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonCompany">
              <li class="text-center hs-a"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/philosophy">企業理念</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/partner-synergy">パートナーシナジー</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">サービス</a>
          </li>

          <!-- RECRUITドロップダウン -->
          <li class="nav-item">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonRECRUIT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              採用情報
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonRecruit">
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/job-category">募集一覧</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/welfare">福利厚生</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/training">教育・研修</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/voices">社員の声</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/application-form">エントリー</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">お問合せ</a>
          </li>

        </ul>
    </nav>

    <!-- ナビゲーションバー -->
    <div class="hs-nav">
      <!-- ナビゲーションバー　デスクトップ用（タブレット以上で表示） -->
      <nav class="d-none d-md-block hs-nav-container">
        <div class="hs-nav-effect p-1">
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/old-home"><span data-hover="ホーム">ホーム</span></a>
          </div>

          <!-- ABOUTドロップダウン -->
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/company" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span data-hover="企業情報">企業情報</span>
            </a>

            <ul class="dropdown-menu pt-3" role="menu">
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/company" class="m-0 text-center">会社概要</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/philosophy" class="m-0 text-center">企業理念</a>
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
            <a href="<?php bloginfo('url'); ?>/job-category" class="dropdown-toggle" data-toggle="dropdown" role="button">
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