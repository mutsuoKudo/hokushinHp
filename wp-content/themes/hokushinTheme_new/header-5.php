<!-- 新規TOP(iphone用)に組み込むようヘッダー -->
<!-- 新規TOPに組み込むようヘッダー -->
<!DOCTYPE html>
<html>

<head>

  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,IE=edge">
  <meta http-equiv="X-UA-TextLayoutMetrics" content="gdi" />



  <!-- loading.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/loading.css">

  <!-- style.cssを読み込む -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- bootstrap -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- index.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/index.css" media="print" onload="this.media='all'">

  <!-- hokushin_old.cssを読み込む -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" media="print" onload="this.media='all'">
  
  <?php wp_head(); ?>
</head>

<body class="hs-body">
  <!-- *このdivはhome.php内で閉じられるのでここでは閉じなくてOK -->
  <!-- <div class="hs-base-container hs-body-start"> 7/31より前-->
  <div class="hs-base-container d-block">



    <!-- ロゴ+帯 -->
    <nav class="navbar navbar-expand-md navbar-light" style="z-index: 2000; background-color: lightgray;">
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

        <ul class="navbar-nav mr-auto d-block d-md-none" style="width:100%">
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
