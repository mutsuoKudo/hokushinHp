// ローディング画面

var time = new Date().getTime();
$(function() {
    var h = $(window).height();
    $('#hs-load').height(h).css('display', 'block'); //高さ
    $('#hs-load').css('overflow', 'hidden');　 //幅
    $('body').css('background-image', 'none');
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
        var $interval = 4000;　 //切り替わりの間隔（ミリ秒）
        var $fade_speed = 3000;　 //フェード処理の速さ（ミリ秒）
        $(".Opening ul li").hide().css({
            "position": "absolute",
            "top": 0,
            // "top": 15,
            "left": 0
                // "left": 15
        });
        $(".Opening ul li:first").addClass("active").show();
        $(".Opening ul li:first img.Opening__img").animate({
            paddingRight: 0.1
        }, {
            duration: 5000,
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
                    paddingRight: 0.1
                }, {
                    duration: 5000,
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
$(function() {
    setTimeout('stopload()', 8000);
});

// ロード画面を非表示にしてメイン画面と動きをスタートさせる
function stopload() {
    setTimeout(function() {
        $('.hs-base-container').fadeIn().css('display', 'block');



        // デスクトップ用左側スライドショー
        $(function() {
            $(".hs-left-topimage").each(function(i) {
                if (i == 0) {
                    setTimeout(function() {
                        $(".hs-left-topimage").eq(0).addClass("hs-left-fade");
                    }, 1000);
                }
                setTimeout(function() {
                    $(".hs-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                    $(".hs-left-topimage").eq(i).addClass("hs-left-fade");
                }, 5000 * i);
            });
        });


        // ②週目以降
        $(function() {
            $("#left-last").on('webkitAnimationEnd', function() {
                $(".hs-left-topimage").removeClass("hs-left-fade");

                $(function() {
                    $(".hs-left-topimage").each(function(i) {
                        if (i == 0) {
                            setTimeout(function() {
                                $(".hs-left-topimage").eq(0).addClass("hs-left-fade");
                            }, 0);
                        }
                        setTimeout(function() {
                            $(".hs-left-topimage").eq(i - 1).removeClass("hs-left-fade");
                            $(".hs-left-topimage").eq(i).addClass("hs-left-fade");
                        }, 5000 * i);
                    });
                });
            });
        });


        // デスクトップ用右側スライドショー
        $(function() {
            $(".hs-right-topimage").each(function(i) {
                if (i == 0) {
                    setTimeout(function() {
                        $(".hs-right-topimage").eq(0).addClass("hs-right-fade");
                    }, 1000);
                }
                setTimeout(function() {
                    $(".hs-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                    $(".hs-right-topimage").eq(i).addClass("hs-right-fade");
                }, 5000 * i);
            });
        });


        // ②週目以降
        $(function() {
            $("#right-last").on('webkitAnimationEnd', function() {
                $(".hs-right-topimage").removeClass("hs-right-fade");

                $(function() {
                    $(".hs-right-topimage").each(function(i) {
                        if (i == 0) {
                            setTimeout(function() {
                                $(".hs-right-topimage").eq(0).addClass("hs-right-fade");
                            }, 0);
                        }
                        setTimeout(function() {
                            $(".hs-right-topimage").eq(i - 1).removeClass("hs-right-fade");
                            $(".hs-right-topimage").eq(i).addClass("hs-right-fade");
                        }, 5000 * i);
                    });
                });
            });
        });


        // 背景変え+中央画像色変え
        function roopFunc() {
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-purple.svg)');
                $("#hokushin ").addClass("hs-fill1 ");
            }, 0);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-red.svg)');
                $("#hokushin ").addClass("hs-fill2 ");
            }, 10000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-orange.svg)');
                $("#hokushin ").addClass("hs-fill3 ");
            }, 20000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-yellow.svg)');
                $("#hokushin ").addClass("hs-fill4 ");
            }, 30000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-lightgreen.svg)');
                $("#hokushin ").addClass("hs-fill5 ");
            }, 40000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-green.svg)');
                $("#hokushin ").addClass("hs-fill6 ");
            }, 50000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-blue.svg)');
                $("#hokushin ").addClass("hs-fill7 ");
            }, 60000);
            setTimeout(function() {
                $('body').css('background-image', 'url(wp-content/uploads/2019/07/bg-lightblue.svg)');
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
                }, 10000);
            }, 70000);

        };
        roopFunc();


    }, 1000);
    $('#hs-load').fadeOut(800);
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