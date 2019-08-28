// TOP(iphone）用

var webStorage = function() {
    //二回目以降のアクセス
    if (sessionStorage.getItem('access')) {
        console.log('2回目以降のアクセスです');

        $('#hs-load').css('display', 'none');
        stopload()

        // ロード画面を非表示にしてメイン画面と動きをスタートさせる

        function stopload() {

            $('.hs-base-container').css('display', 'block');
            $('body').fadeIn().addClass("hs-bg-safari");

            // デスクトップ用左側スライドショー
            $(function() {
                $(".hs-safari-left-topimage").each(function(i) {
                    if (i == 0) {
                        setTimeout(function() {
                            $(".hs-safari-left-topimage").eq(0).addClass("hs-left-fade");
                        }, 1000);
                    }
                    setTimeout(function() {
                        $(".hs-safari-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                        $(".hs-safari-left-topimage").eq(i).addClass("hs-left-fade");
                    }, 5000 * i);
                });
            });


            // ②週目以降
            $(function() {
                $("#left-last").on('webkitAnimationEnd', function() {
                    $(".hs-safari-left-topimage").removeClass("hs-left-fade");

                    $(function() {
                        $(".hs-safari-left-topimage").each(function(i) {
                            if (i == 0) {
                                setTimeout(function() {
                                    $(".hs-safari-left-topimage").eq(0).addClass("hs-left-fade");
                                }, 0);
                            }
                            setTimeout(function() {
                                $(".hs-safari-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                                $(".hs-safari-left-topimage").eq(i).addClass("hs-left-fade");
                            }, 5000 * i);
                        });
                    });
                });
            });


            // デスクトップ用右側スライドショー
            $(function() {
                $(".hs-safari-right-topimage").each(function(i) {
                    if (i == 0) {
                        setTimeout(function() {
                            $(".hs-safari-right-topimage").eq(0).addClass("hs-right-fade");
                        }, 1000);
                    }
                    setTimeout(function() {
                        $(".hs-safari-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                        $(".hs-safari-right-topimage").eq(i).addClass("hs-right-fade");
                    }, 5000 * i);
                });
            });


            // ②週目以降
            $(function() {
                $("#right-last").on('webkitAnimationEnd', function() {
                    $(".hs-safari-right-topimage").removeClass("hs-right-fade");

                    $(function() {
                        $(".hs-safari-right-topimage").each(function(i) {
                            if (i == 0) {
                                setTimeout(function() {
                                    $(".hs-safari-right-topimage").eq(0).addClass("hs-right-fade");
                                }, 0);
                            }
                            setTimeout(function() {
                                $(".hs-safari-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                                $(".hs-safari-right-topimage").eq(i).addClass("hs-right-fade");
                            }, 5000 * i);
                        });
                    });
                });
            });


        }

        //初回アクセス	
    } else {
        console.log('初回アクセスです');

        // データを削除	
        sessionStorage.clear();
        console.log("clear");
        window.sessionStorage.clear();
        console.log("clear2");

        sessionStorage.setItem('access', 0);

        var time = new Date().getTime();
        $(function() {
            var h = $(window).height();
            $('#hs-load').height(h).css('display', 'block'); //高さ
            $('#hs-load').css('overflow', 'hidden');　 //幅
        });

        (function($) {

            function setimage() {

                var $height = $(window).height();
                var $width = $(window).width();
                var win_ratio = $width / $height;

                $(".Opening").css({
                    "height": $height
                });
                $(".Opening ul li").css({
                    "height": $height
                });

                if (win_ratio > 1.5) {　 //画像の比率が大きかったら

                    $(".Opening ul li img.Opening__img").css({
                        "width": "100%",
                        "height": "auto",
                        "margin-left": 0

                    });
                    var winwidth = $(".Opening").width();
                    var imgheight = winwidth * 0.66;
                    var winheight = $(".Opening").height();
                    var imgtopmargin = (imgheight - winheight) / 2;
                    $(".Opening ul li img.Opening__img").css({
                        "margin-top": -imgtopmargin
                    });
                } else if (win_ratio < 1.5) {　 //画像の比率が小さかったら

                    var imgwidth = (($height / 800)) * 1200;
                    var winwidth = $(".Opening").width();
                    var imgmargin = (winwidth - imgwidth) / 2;
                    $(".Opening ul li img.Opening__img").css({
                        "width": imgwidth,
                        "height": $height,
                        "margin-left": imgmargin,
                        "margin-top": 0
                    });
                }
            }

            //slide
            $(function() {
                setimage();
                var $interval = 3000;　 //切り替わりの間隔（ミリ秒）
                var $fade_speed = 3000;　 //フェード処理の速さ（ミリ秒）
                $(".Opening ul li").hide().css({
                    "position": "absolute",
                    "top": 0,
                    "left": 0
                });
                $(".Opening ul li:first").addClass("active").show();
                $(".Opening ul li:first img.Opening__img").animate({
                    paddingRight: 0.1
                }, {
                    duration: 2000,
                    step: function(now, fx) {
                        $(this).css({
                            transform: 'scale(' + (1 + now) + ')',
                            "top": 15,
                        });
                    },
                    complete: function() {
                        $(".Opening ul li img.Opening__img").css("paddingRight", 0);
                    }
                })


                //指定した回数でストップする設定
                var timer_id;
                var i = 0;
                timer_id = setInterval(function() {
                    // console.log(i);
                    i++;
                    if (i == 2) {　 //回数指定（ホクシンロゴ+WE ARE RPA…）
                        clearInterval(timer_id);
                    } else {
                        var $active = $(".Opening ul li.active");
                        var $activeafter = $(".Opening ul li.active:after");
                        var $next = $active.next("li").length ? $active.next("li") : $(".Opening ul li:first");
                        //$active.fadeOut($fade_speed,function(){$active.removeClass("active");});
                        $active.fadeOut($fade_speed);
                        $active.removeClass("active");
                        $next.fadeIn($fade_speed).addClass("active");
                        $(".Opening ul li.active img.Opening__img").animate({
                            //青背景ローディングのズーム率
                            paddingRight: 0.3
                        }, {
                            duration: 6000,
                            step: function(now, fx) {
                                $(this).css({
                                    transform: 'scale(' + (1 + now) + ')'
                                });
                            },
                            complete: function() {
                                $(".Opening ul li img.Opening__img").css("paddingRight", 0);
                            }
                        })
                    }

                }, $interval);
            });

            //resize
            var timer = false;
            $(window).resize(function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    console.log('resized');
                    setimage();
                }, 200);
            });

        })(jQuery);


        //8秒たったら強制的にロード画面を非表示
        setTimeout(function() {
            stopload()
        }, 8000);

        // ロード画面を非表示にしてメイン画面と動きをスタートさせる
        function stopload() {
            setTimeout(function() {
                $('.hs-base-container').fadeIn().css('display', 'block');
                $('body').fadeIn().addClass("hs-bg-safari");
                // デスクトップ用左側スライドショー
                $(function() {
                    $(".hs-safari-left-topimage").each(function(i) {
                        if (i == 0) {
                            setTimeout(function() {
                                $(".hs-safari-left-topimage").eq(0).addClass("hs-left-fade");
                            }, 1000);
                        }
                        setTimeout(function() {
                            $(".hs-safari-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                            $(".hs-safari-left-topimage").eq(i).addClass("hs-left-fade");
                        }, 5000 * i);
                    });
                });


                // ②週目以降
                $(function() {
                    $("#left-last").on('webkitAnimationEnd', function() {
                        $(".hs-safari-left-topimage").removeClass("hs-left-fade");

                        $(function() {
                            $(".hs-safari-left-topimage").each(function(i) {
                                if (i == 0) {
                                    setTimeout(function() {
                                        $(".hs-safari-left-topimage").eq(0).addClass("hs-left-fade");
                                    }, 0);
                                }
                                setTimeout(function() {
                                    $(".hs-safari-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                                    $(".hs-safari-left-topimage").eq(i).addClass("hs-left-fade");
                                }, 5000 * i);
                            });
                        });
                    });
                });


                // デスクトップ用右側スライドショー
                $(function() {
                    $(".hs-safari-right-topimage").each(function(i) {
                        if (i == 0) {
                            setTimeout(function() {
                                $(".hs-safari-right-topimage").eq(0).addClass("hs-right-fade");
                            }, 1000);
                        }
                        setTimeout(function() {
                            $(".hs-safari-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                            $(".hs-safari-right-topimage").eq(i).addClass("hs-right-fade");
                        }, 5000 * i);
                    });
                });


                // ②週目以降
                $(function() {
                    $("#right-last").on('webkitAnimationEnd', function() {
                        $(".hs-safari-right-topimage").removeClass("hs-right-fade");

                        $(function() {
                            $(".hs-safari-right-topimage").each(function(i) {
                                if (i == 0) {
                                    setTimeout(function() {
                                        $(".hs-safari-right-topimage").eq(0).addClass("hs-right-fade");
                                    }, 0);
                                }
                                setTimeout(function() {
                                    $(".hs-safari-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                                    $(".hs-safari-right-topimage").eq(i).addClass("hs-right-fade");
                                }, 5000 * i);
                            });
                        });
                    });
                });

            }, 1000);
            $('#hs-load').fadeOut(800);
        }
    }
}
webStorage();


// ハンバーガーメニューの開閉
$('.hs-hamburger-menu').on('click', function() {
    $('.hs-hamburger-menu-line').toggleClass('active');
    $('.hs-sub-nuv').slideToggle();
});