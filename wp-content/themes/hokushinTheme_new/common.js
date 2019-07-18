//  ページ内リンクを滑らかに
// #にダブルクォーテーションが必要

$('a[href^="#"]').click(function() {
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 50;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
});

//採用情報の募集ページからエントリーする際に、ドロップダウンが選択されるよう設定
// window.addEventListener('DOMContentLoaded', function(e) {
//     document.querySelector(location.hash).selected = true;
// });

// URLパラメータ文字列を取得する
// var param = location.search;
// // alert(param);
// var job = (getParam('jobcategory'));

// function getParam(name, url) {
//     if (!url) url = window.location.href;
//     name = name.replace(/[\[\]]/g, "\\$&");
//     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
//         results = regex.exec(url);
//     if (!results) return null;
//     if (!results[2]) return '';
//     return decodeURIComponent(results[2].replace(/\+/g, " "));
// }

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