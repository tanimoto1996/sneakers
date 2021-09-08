$(function () {
  // ハンバーガーメニュー
  $('.btn-trigger').on('click', function () {
    $(this).toggleClass('active');
    $('#header').toggleClass('open');
    $('nav').toggleClass('bg-light');
    return false;
  });

  // 外枠をクリックすると閉じる
  $('.mask').on('click', function () {
    $('.btn-trigger').trigger('click');
  })

  // スムーススクロール
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,//スクロールする速さ
    header: '#header'//固定ヘッダーがある場合
  });



});
