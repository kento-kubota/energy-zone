$(function () {
  $(function () {
    var state = false;
    var pos;
    $('.header__menu').click(function () {
      $('.spMenu').toggleClass('spMenu--active');
      $('.header__right').toggleClass('header__right--active');
      // メニュー時のスクロール無効
      if (state == false) {
        pos = $(window).scrollTop();
        $('body').addClass('fixed').css({
          'top': -pos
        });
        state = true;
      } else {
        $('body').removeClass('fixed').css({
          'top': 0
        });
        window.scrollTo(0, pos);
        state = false;
      }
    });
  });
  // slick
  $('.topList').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    arrows: false,
    infinite: true,
    pauseOnHover: false,
  });

  // スクロールフェードイン
  $(function () {
    $(window).on('load scroll', function () {
      const windowHeight = $(window).height();
      const scroll = $(window).scrollTop();

      $('.fade-in').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 50 || windowHeight > targetPosition) {
          $(this).addClass("fade-active");
        }
      });
    });
    $(window).scroll();
  });

  // FAQアコーディオン
  $(function () {
    $(".acMenu__item .acMenu__qTxtbox").on("click", function () {
      $(".acMenu__item .acMenu__qTxtbox").not(this).removeClass('arrow');
      $(".acMenu__item .acMenu__qTxtbox").not(this).next().slideUp();
      $(this).toggleClass('arrow');
      $(this).next().slideToggle();
    });
  });

  // ページトップ
  $(function () {
    $('.pageTop').on("click", function () {
      $('body, html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });
});