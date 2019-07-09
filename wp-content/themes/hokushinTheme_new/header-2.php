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
        <div class="hs-w-980 w-980 clearfix">
            <h1 id="header-logo" class="hs-h1"><a href="<?php bloginfo('url'); ?>/"></a></h1>
            <nav class="menu-head-container">
                <!-- <a href="recruit.html" class="btn-border">募集職種一覧へ</a> -->
                <a href="<?php bloginfo('url'); ?>/new-recruit" class="btn-square-shadow">募集職種一覧へ</a>
            </nav>
        </div>
    </header>