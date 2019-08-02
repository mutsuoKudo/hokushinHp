//  ページ内リンクを滑らかに
// #にダブルクォーテーションが必要

$('a[href^="#"]').click(function() {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 100;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
});





//パラメータを取得する
var params = getParameter();
$("#menu-category").val('modalshift');
if (params['jobcategory'] !== "") {
    $("#menu-category").val(params['jobcategory']);
}

function getParameter() {
    var paramsArray = [];
    var url = location.href;
    parameters = url.split("#");
    if (parameters.length > 1) {
        url = parameters[0];
    }
    parameters = url.split("?");
    if (parameters.length > 1) {
        var params = parameters[1].split("&");
        for (i = 0; i < params.length; i++) {
            var paramItem = params[i].split("=");
            paramsArray[paramItem[0]] = paramItem[1];
        }
    }
    return paramsArray;
};



// clidkablemapのレスポンシブ対応　*jquery.rwdImageMaps.jsより先に読み込まれてしまうと動作しないので注意
jQuery('img[usemap]').rwdImageMaps();

$(document).ready(function() {
    //URLのハッシュ値を取得
    var urlHash = location.hash;
    //ハッシュ値があればページ内スクロール
    if (urlHash) {
        //スクロールを0に戻す
        $('body,html').stop().scrollTop(0);
        setTimeout(function() {
            //ロード時の処理を待ち、時間差でスクロール実行
            scrollToAnker(urlHash);
        }, 100);
    }

    //通常のクリック時
    $('a[href^="#"]').click(function() {
        //ページ内リンク先を取得
        var href = $(this).attr("href");
        //リンク先が#か空だったらhtmlに
        var hash = href == "#" || href == "" ? 'html' : href;
        //スクロール実行
        scrollToAnker(hash);
        //リンク無効化
        return false;
    });

    // 関数：スムーススクロール
    // 指定したアンカー(#ID)へアニメーションでスクロール
    function scrollToAnker(hash) {
        var target = $(hash);
        var position = target.offset().top - 100;
        // $('body,html').stop().animate({ scrollTop: position }, 500);
        $('body,html').stop().animate({ scrollTop: position }, 500);
    }
})