$(function () {
  // スムーススクロール
  $('.multiple-item').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  // ページネーションAJAX
  $(document).on('click', '.pagination a', function (e) {
    e.preventDefault();

    const page = $(this).attr('href').split('page=')[1];

    getProducts(page);
  });

  function getProducts(page) {
    $.ajax({
      url: '/?page=' + page
    }).done(function (data) {
      $("#notice").html($('#notice', $(data)).html());
    });
  }
});
