<!DOCTYPE html>
<!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<html>

<head>
    <title>トップページ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/index.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/common.css">
    
    <!-- hokushin_old.cssを読み込む -->
    <!-- <link rel="stylesheet" href="http://hokusys.jp/wp-content/themes/hokushinTheme/style.css" /> -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/hokushin_old.css" />
  <?php wp_head(); ?>
</head>

<body class="hs-body-start hs-hide hs-body">

    <div class="hs-base-conteiner hs-body-start">

        <!-- ロゴ帯 -->
        <nav class="navbar navbar-expand-md navbar-light mb-4" style="z-index: 2000; background-color: lightgray;">
            <a class="navbar-brand hs-logo-a" href="#">
                <img src="ホクシンlogo_7.png" alt="" width="auto" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar"
                aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto d-block d-md-none" style="width:100%">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="font-size:0.8rem; font-weight:normal;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:0.8rem; font-weight:normal;">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:0.8rem; font-weight:normal;">SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recruit/recruit.html" style="font-size:0.8rem; font-weight:normal;">RECRUIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:0.8rem; font-weight:normal;">CONTACT</a>
                    </li>

                </ul>
        </nav>


        <!-- ナビゲーションバー -->
        <div class="hs-nav">
            <!-- ナビゲーションバー　デスクトップ用（lg以上表示/lg以下非表示） -->
            <nav class="d-none d-lg-block hs-nav-conteiner">
                <div class="hs-nav-effect p-1">
                    <a href="#" style="text-decoration: none"><span data-hover="home">home</span></a>
                    <a href="#"><span data-hover="about">about</span></a>
                    <a href="#"><span data-hover="service">service</span></a>
                    <a href="recruit/recruit.html"><span data-hover="recruit">recruit</span></a>
                    <a href="#"><span data-hover="contact">contact</span></a>
                </div>
            </nav>
        </div>