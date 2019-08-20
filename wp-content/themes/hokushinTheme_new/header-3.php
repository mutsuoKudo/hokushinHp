<!-- 募集要項用ヘッダー -->
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

  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>

    <header class="w-max"><!-- START header -->
        <div class="hs-w-980 w-980 clearfix">
            <h1 id="header-logo" class="hs-h1"><a href="<?php bloginfo('url'); ?>/company"></a></h1>
            <nav class="menu-head-container">
                <div class="hs-a-button hs-a">
                  <a href="<?php bloginfo('url'); ?>/job-category" class="btn-square-shadow">募集職種一覧へ</a>
                </div>
            </nav>
        </div>

    </header><!-- END header -->