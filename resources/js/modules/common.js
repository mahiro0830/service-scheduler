import $ from "jquery";

// 全ページ共通
export const commonFunc = () => {

  // ハンバーガーメニュー
  $('.l-header__hamburger').click(function () {
    $(this).toggleClass('is--open');
    if ( $(this).hasClass('is--open') ) {
      $('.l-header__nav').stop().fadeIn();
    } else {
      $('.l-header__nav').stop().fadeOut();
    }
  });
  $('.l-header__nav a').click(function () {
    $('.l-header__hamburger').removeClass('is--open');
    $('.l-header__nav').stop().fadeOut();
  });

  // スクロールでヘッダーにクラス付与
  $(window).scroll(function () {
    let scrollTop = $(this).scrollTop();
    if ( scrollTop > 100 ) {
      $('.l-header').addClass('is--scroll');
    } else {
      $('.l-header').removeClass('is--scroll');
    }
  });

  // アンカーリンク
  $('a[href^="#"]').click(function(){
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    var adjust = 0;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href= $(this).attr("href");
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
}
