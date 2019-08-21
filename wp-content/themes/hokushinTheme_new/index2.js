// TOP(iphone）用

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
        var $interval = 1500;　 //切り替わりの間隔（ミリ秒）
        var $fade_speed = 1500;　 //フェード処理の速さ（ミリ秒）
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


//6秒たったら強制的にロード画面を非表示
$(function() {
    setTimeout('stopload()', 6000);
});

// ロード画面を非表示にしてメイン画面と動きをスタートさせる
function stopload() {
    setTimeout(function() {
        $('.hs-base-container').fadeIn().css('display', 'block');
        $(".hs-left-topimage").fadeIn().css('visibility', 'visible');
        $(".hs-right-topimage").fadeIn().css('visibility', 'visible');

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