$(function () {
  $('.btn-trigger').on('click', function () {
    $(this).toggleClass('active');
    $('#header').toggleClass('open');
    $('nav').toggleClass('bg-light');
    return false;
  });
});
