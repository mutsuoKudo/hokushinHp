
     // ローディング画面
     var time = new Date().getTime();
     $(function() {
         var h = $(window).height();
         $('#hs-load').height(h).css('display', 'block');
         $('body').css('background-image', 'url("blank")');
     });

     //全ての読み込みが完了したら実行
     // $(window).on('load', function () {
     //     var now = new Date().getTime();
     //     // ロードが3秒以内で終わる場合はloadingを5秒間表示する
     //     if (now - time <= 3000) {
     //         setTimeout('stopload()', 5000 - (now - time));
     //         return;
     //     } else {
     //         stopload();
     //     }
     // });

     //4秒たったら強制的にロード画面を非表示
     $(function() {
         setTimeout('imgTimer();', 2800);
         setTimeout('stopload()', 3000);
     });

     // ロード画面を非表示にしてメイン画面と動きをスタートさせる
     function stopload() {
         setTimeout(function() {
             $('.hs-base-conteiner').fadeIn().css('display', 'block');

             // デスクトップ用左側スライドショー
             $(function() {
                 $(".hs-dt-topimage-left-layout2").each(function(i) {
                     if (i == 0) {
                         setTimeout(function() {
                             $(".hs-dt-topimage-left-layout2").eq(0).addClass("hs-left-fade");
                         }, 0);
                     }
                     setTimeout(function() {
                         $(".hs-dt-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                     }, 5000 * i);
                 });
             });



             $(function() {
                 $("#left-last").on('webkitAnimationEnd', function() {
                     $(".hs-dt-topimage-left-layout2").removeClass("hs-left-fade");

                     $(function() {
                         $(".hs-dt-topimage-left-layout2").each(function(i) {
                             if (i == 0) {
                                 setTimeout(function() {
                                     $(".hs-dt-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                                 }, 10000);
                             }
                             setTimeout(function() {
                                 $(".hs-dt-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                             }, 5000 * i);
                         });
                     });
                 });
             });


             // デスクトップ用右側スライドショー
             $(function() {
                 $(".hs-dt-topimage-right-layout2").each(function(i) {
                     if (i == 0) {
                         setTimeout(function() {
                             $(".hs-dt-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                         }, 0 * i);
                     }
                     setTimeout(function() {
                         $(".hs-dt-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                     }, 5000 * i);
                 });
             });

             $(function() {
                 $("#right-last").on('webkitAnimationEnd', function() {
                     $(".hs-dt-topimage-right-layout2").removeClass("hs-right-fade");

                     $(function() {
                         $(".hs-dt-topimage-right-layout2").each(function(i) {
                             if (i == 0) {
                                 setTimeout(function() {
                                     $(".hs-dt-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                                 }, 0 * i);
                             }
                             setTimeout(function() {
                                 $(".hs-dt-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                             }, 5000 * i);
                         });
                     });

                 });
             });

             // タブレット・モバイル用左側スライドショー
             $(function() {
                 $(".hs-mbtb-topimage-left-layout2").each(function(i) {
                     if (i == 0) {
                         setTimeout(function() {
                             $(".hs-mbtb-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                         }, 0 * i);
                     }
                     setTimeout(function() {
                         $(".hs-mbtb-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                     }, 5000 * i);
                 });
             });

             $(function() {
                 $("#mbtb-left-last").on('webkitAnimationEnd', function() {
                     $(".hs-mbtb-topimage-left-layout2").removeClass("hs-left-fade");

                     $(function() {
                         $(".hs-mbtb-topimage-left-layout2").each(function(i) {
                             if (i == 0) {
                                 setTimeout(function() {
                                     $(".hs-mbtb-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                                 }, 0 * i);
                             }
                             setTimeout(function() {
                                 $(".hs-mbtb-topimage-left-layout2").eq(i).addClass("hs-left-fade");
                             }, 5000 * i);
                         });
                     });

                 });
             });

             // モバイル・タブレット用右側スライドショー
             $(function() {
                 $(".hs-mbtb-topimage-right-layout2").each(function(i) {
                     if (i == 0) {
                         setTimeout(function() {
                             $(".hs-mbtb-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                         }, 0 * i);
                     }
                     setTimeout(function() {
                         $(".hs-mbtb-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                     }, 5000 * i);
                 });
             });

             $(function() {
                 $("#mbtb-right-last").on('webkitAnimationEnd', function() {
                     $(".hs-mbtb-topimage-right-layout2").removeClass("hs-right-fade");

                     $(function() {
                         $(".hs-mbtb-topimage-right-layout2").each(function(i) {
                             if (i == 0) {
                                 setTimeout(function() {
                                     $(".hs-mbtb-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                                 }, 0 * i);
                             }
                             setTimeout(function() {
                                 $(".hs-mbtb-topimage-right-layout2").eq(i).addClass("hs-right-fade");
                             }, 5000 * i);
                         });
                     });

                 });
             });

             // 中央画像色変え
             function roopFunc() {

                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill2 ");
                 }, 10000);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill3 ");
                 }, 20100);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill4 ");
                 }, 30100);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill5 ");
                 }, 40100);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill6 ");
                 }, 50100);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill7 ");
                 }, 60100);
                 setTimeout(function() {
                     $("#hokushin ").addClass("hs-fill8 ");
                     $("#hokushin ").removeClass("hs-fill2 ");
                     $("#hokushin ").removeClass("hs-fill3 ");
                     $("#hokushin ").removeClass("hs-fill4 ");
                     $("#hokushin ").removeClass("hs-fill5 ");
                     $("#hokushin ").removeClass("hs-fill6 ");
                     $("#hokushin ").removeClass("hs-fill7 ");
                     setTimeout(function() {
                         $("#hokushin ").removeClass("hs-fill8 ");
                         roopFunc(); //最初へ
                     }, 10100);
                 }, 70100);

             };
             roopFunc();


         }, 1000);
         $('#hs-load').fadeOut(800);
     }

     // 背景画像スライドショー
     img = new Array("http://hokushinsystem.local/wp-content/uploads/2019/07/bg-purple.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-red.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-orange.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-yellow.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-lightgreen.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-green.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-blue.svg", "http://hokushinsystem.local/wp-content/uploads/2019/07/bg-lightblue.svg"); //*1
     count = -1; //*2
     // imgTimer();

     function imgTimer() {
         //画像番号
         count++; //*3
         //画像の枚数確認
         if (count == img.length) count = 0; //*4
         //画像出力
         document.body.style.backgroundImage = "url(" + img[count] + ")";
         //次のタイマー呼びだし
         setTimeout("imgTimer()", 10000); //*6
     }



     // ハンバーガーメニューの開閉
     $('.hs-hamburger-menu').on('click', function() {
         $('.hs-hamburger-menu-line').toggleClass('active');
         $('.hs-sub-nuv').slideToggle();
     });

     $('.hs-hamburger-menu').on('click', function() {
         // $('.hs-tbmb').toggleClass('hs-subnuv-image');

     });



     // トップ画像ホバー時、ぷかぷか
     var layer = document.getElementById('hs-layer2');
     var parallax = new Parallax(layer, {
         clipRelativeInput: true, //要素の端にカーソルが達したら動きを止める
         hoverOnly: false, //カーソルが要素の上にある場合のみ有効
         invertX: true, //X軸の動きを反転。falseにするとマウスと同じ方向に動く
         invertY: true, //Y軸の動きを反転。falseにするとマウスと同じ方向に動く
         limitX: false, //X軸の動きを制限する
         limitY: false, //Y軸の動きを制限する
         scalarX: 10.0, //X軸の移動速度と範囲を増減
         scalarY: 10.0, //Y軸の移動速度と範囲を増減
         frictionX: .1, //X軸のレイヤーの速度。0.00〜1.00の範囲内で指定可能
         frictionY: .1, //Y軸のレイヤーの速度。0.00〜1.00の範囲内で指定可能
         originX: .5, //X軸のマウスの初期位置。デフォルトの0.5は画面または要素の中心
         originY: .8, //Y軸マウスの初期位置。デフォルトの0.5は画面または要素の中心
     });



     // 背景ぷかぷか
     function roopFunc2() {

         setTimeout(function() {
             $(".hs-back-icon1 ").removeClass("hs-hide ")
             $(".hs-back-icon1 ").addClass("hs-back-icon-animation ")
         }, 1500);
         setTimeout(function() {
             $(".hs-back-icon2 ").removeClass("hs-hide ")
             $(".hs-back-icon2 ").addClass("hs-back-icon-animation ")
         }, 3000);
         setTimeout(function() {
             $(".hs-back-icon3 ").removeClass("hs-hide ")
             $(".hs-back-icon3 ").addClass("hs-back-icon-animation ")
         }, 2000);
         setTimeout(function() {
             $(".hs-back-icon4 ").removeClass("hs-hide ")
             $(".hs-back-icon4 ").addClass("hs-back-icon-animation ")
         }, 3500);
         setTimeout(function() {
             $(".hs-back-icon1 ").removeClass("hs-back-icon-animation ");
             $(".hs-back-icon2 ").removeClass("hs-back-icon-animation ");
             $(".hs-back-icon3 ").removeClass("hs-back-icon-animation ");
             $(".hs-back-icon4 ").removeClass("hs-back-icon-animation");
             $(".hs-back-icon1 ").addClass("hs-hide ");
             $(".hs-back-icon2 ").addClass("hs-hide ");
             $(".hs-back-icon3 ").addClass("hs-hide ");
             $(".hs-back-icon4").addClass("hs-hide ");
             roopFunc2();
         }, 10000);
     };
     roopFunc2();


     // 画面幅が変わったらリロードする(画像の重なりと背景画像との色ずれ解消)
     // $(function () {
     //     var timer = false;
     //     var prewidth = $(window).width();
     //     $(window).resize(function () {
     //         if (timer !== false) {
     //             clearTimeout(timer);
     //         }
     //         timer = setTimeout(function () {
     //             var nowWidth = $(window).width();
     //             if (prewidth !== nowWidth) {
     //                 // if (nowWidth >= 992) {
     //                 // リロード
     //                 // $("body").hide();
     //                 location.reload();

     //             }
     //             prewidth = nowWidth;
     //             // nowWidth <= 991;
     //         }, 100);
     //     });
     // });
