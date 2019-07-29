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
  <!-- *このdivはhome.php内で閉じられるのでここでは閉じなくてOK -->
  <div class="hs-base-container hs-body-start">

    <!-- ロゴ+帯 -->
    <nav class="navbar navbar-expand-md navbar-light mb-4" style="z-index: 2000; background-color: lightgray;">
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
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/old-home">HOME</a>
          </li>

          <!-- ABOUTドロップダウン -->
          <li class="nav-item">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ABOUT
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonCompany">
              <li class="text-center hs-a"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/company">company</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/philosophy">philosophy</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/partner-synergy">partner-synergy</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/service">SERVICE</a>
          </li>

          <!-- RECRUITドロップダウン -->
          <li class="nav-item">
            <button type="button" class="btn hs-sub-nuv-btn btn-default dropdown-toggle nav-link hs-nav-link-font" id="dropdownMenuButtonRECRUIT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              RECRUIT
              <span class="caret"></span>
            </button>
            <!-- ドロップメニューの設定 -->
            <ul class="dropdown-menu hs-sub-dropdown-menu" aria-labelledby="dropdownMenuButtonRecruit">
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/job-category">job category</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/welfare">welfare</a></li>
              <li class="text-center hs-a pt-2"><a style="font-weight:normal" href="<?php bloginfo('url'); ?>/voices">voices</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link hs-nav-link-font" href="<?php bloginfo('url'); ?>/contact">CONTACT</a>
          </li>

        </ul>
    </nav>

    <!-- ナビゲーションバー -->
    <div class="hs-nav">
      <!-- ナビゲーションバー　デスクトップ用（タブレット以上で表示） -->
      <nav class="d-none d-md-block hs-nav-container">
        <div class="hs-nav-effect p-1">
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/old-home"><span data-hover="home">home</span></a>
          </div>

          <!-- ABOUTドロップダウン -->
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/company" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span data-hover="about">about</span>
            </a>

            <ul class="dropdown-menu pt-3" role="menu">
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/company" class="m-0 text-center">company</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/philosophy" class="m-0 text-center">philosophy</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/partner-synergy" class="m-0 text-center">partner-synergy</a>
              </li>
            </ul>
          </div>

          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/service"><span data-hover="service">service</span></a>
          </div>

          <!-- RECRUITドロップダウン -->
          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/job-category" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span data-hover="recruit">recruit</span>
            </a>
            <ul class="dropdown-menu pt-3" role="menu">
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/job-category" class="m-0 text-center">job category</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/welfare" class="m-0 text-center">welfare</a>
              </li>
              <li class="text-center">
                <a href="<?php bloginfo('url'); ?>/voices" class="m-0 text-center">voices</a>
              </li>
            </ul>
          </div>

          <div class="d-inline-block">
            <a href="<?php bloginfo('url'); ?>/contact"><span data-hover="contact">contact</span></a>
          </div>
        </div>
      </nav>
    </div>