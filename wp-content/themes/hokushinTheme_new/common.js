//  ページ内リンクを滑らかに
 // #にダブルクォーテーションが必要

 $('a[href^="#"]').click(function() {
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 50;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
 });
