jQuery(function ($) {
  // SPメニュー開閉時
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

  // ヘッダースクロール時
  var headerH = $('.header').outerHeight(true); /* ヘッダーの高さ取得 */
  var windowH = $(window).height(); /* 画面の高さ取得 */
  var pc = 1024;
  $(function () {
    $(window).on('load scroll', function () {
      var scroll = $(window).scrollTop();
      var windowW = $(window).width(); /* 画面幅取得 */
      if (scroll >= windowH - headerH && windowW >= pc) {
        $('.header').addClass('header--active');
      } else {
        $('.header').removeClass('header--active');

      }
    });
  });

  // slick読み込み

  $(function () {
    $('.slickList').slick({
      autoplay: true,
      /* 自動再生 */
      autoplaySpeed: 3800,
      infinite: true,
      /* 連続再生 */
      dots: true,
      /* ドットナビゲーション表示 */
      prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
      nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
      slidesToShow: 3,
      /* 3画面表示 */
      centerMode: true,
      /* センターモード適用 */
      centerPadding: "0",
      /* センターモードの時、両端の画像をどれだけ見せるか（% or px） */
      pauseOnHover: false, //再生時マウスオーバーで一時停止させない
      pauseOnFocus: false, //再生時フォーカスで一時停止させない
      pauseOnDotsHover: false, //マウスオーバーでドットを一時停止させない
      responsive: [{
        breakpoint: 768,
        /* 767px以下で適用 */
        settings: {
          slidesToShow: 1,
          arrows: false,
        }
      }]
    });

    // slick/centerMode/slidesToShow＝3の時のカクツキ修正
    $('.slickList').on('beforeChange', function (event, {
      slideCount: count
    }, currentSlide, nextSlide) {
      let selectors = [nextSlide, nextSlide - count, nextSlide + count].map(n => `[data-slick-index="${n}"]`).join(', ');
      $('.slick-now').removeClass('slick-now');
      $(selectors).addClass('slick-now');
    });

    $('[data-slick-index="0"]').addClass('slick-now');
  });

  // slick読み込み（Work詳細ページ）
  $(function () {
    $('.work__slick').slick({
      dots: true,
      prevArrow: false,
      nextArrow: false,
    });
  });


  // カウントアップアニメーション
  $(function () {
    // 一つ目のアニメーション
    $('#count_1').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_1 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 2
    $('#count_2').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_2 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 3
    $('#count_3').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_3 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 4
    $('#count_4').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_4 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 5
    $('#count_5').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_5 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 6
    $('#count_6').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_6 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 7
    $('#count_7').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_7 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 8
    $('#count_8').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_8 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 9
    $('#count_9').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_9 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
    // 10
    $('#count_10').on('inview', function (event, isInView) {
      if (isInView) {
        $('#count_10 .count-up').each(function () {
          $(this).prop('Counter', 0).animate({
            /* 0からカウントアップ */
            Counter: $(this).text()
          }, {
            duration: 2000,
            /* 変化時間 */
            easing: 'swing',
            /* 動きの種類 */
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });





    // ラインアニメーション
    // #count_1
    $(window).scroll(function () {
      if ($('#count_1').length) {
        var top = $("#count_1").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_1 .design__line').addClass('line--active');
      } else {
        $('#count_1 .design__line').removeClass('line--active');
      }
    });
    // #count_2
    $(window).scroll(function () {
      if ($('#count_2').length) {
        var top = $("#count_2").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_2 .design__line').addClass('line--active');
      } else {
        $('#count_2 .design__line').removeClass('line--active');
      }
    });
    // #count_3
    $(window).scroll(function () {
      if ($('#count_3').length) {
        var top = $("#count_3").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_3 .design__line').addClass('line--active');
      } else {
        $('#count_3 .design__line').removeClass('line--active');
      }
    });
    // #count_4
    $(window).scroll(function () {
      if ($('#count_4').length) {
        var top = $("#count_4").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_4 .design__line').addClass('line--active');
      } else {
        $('#count_4 .design__line').removeClass('line--active');
      }
    });
    // #count_5
    $(window).scroll(function () {
      if ($('#count_5').length) {
        var top = $("#count_5").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_5 .design__line').addClass('line--active');
      } else {
        $('#count_5 .design__line').removeClass('line--active');
      }
    });
    // #count_6
    $(window).scroll(function () {
      if ($('#count_6').length) {
        var top = $("#count_6").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_6 .coding__line').addClass('line--active');
      } else {
        $('#count_6 .coding__line').removeClass('line--active');
      }
    });
    // #count_7
    $(window).scroll(function () {
      if ($('#count_7').length) {
        var top = $("#count_7").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_7 .coding__line').addClass('line--active');
      } else {
        $('#count_7 .coding__line').removeClass('line--active');
      }
    });
    // #count_8
    $(window).scroll(function () {
      if ($('#count_8').length) {
        var top = $("#count_8").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_8 .coding__line').addClass('line--active');
      } else {
        $('#count_8 .coding__line').removeClass('line--active');
      }
    });
    // #count_9
    $(window).scroll(function () {
      if ($('#count_9').length) {
        var top = $("#count_9").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_9 .coding__line').addClass('line--active');
      } else {
        $('#count_9 .coding__line').removeClass('line--active');
      }
    });
    // #count_10
    $(window).scroll(function () {
      if ($('#count_10').length) {
        var top = $("#count_10").offset().top; // ターゲットの位置取得
      }
      var position = top - $(window).height(); // 発火させたい位置
      if ($(window).scrollTop() > position) {
        // 要素が見えたときの動き
        $('#count_10 .coding__line').addClass('line--active');
      } else {
        $('#count_10 .coding__line').removeClass('line--active');
      }
    });

    // カテゴリー絞り込み
    var searchItem = '.search__item'; // 絞り込む項目を選択するエリア
    var hideClass = 'is--hide'; // 絞り込み対象外の場合に付与されるclass名
    var activeClass = 'is--active'; // 選択中のグループに付与されるclass名
    var worksList = $('.worksList [data-group]'); /* 絞り込み対象のデータ */
    // 絞り込みを変更した時
    $(searchItem).on('click', function () {
      $(searchItem).removeClass(activeClass);
      $(this).addClass(activeClass);

      var filterGet = $(this).attr('data-filter');

      if (filterGet == 'all') {
        worksList.removeClass(hideClass);
      } else {
        worksList.addClass(hideClass);
        worksList.filter('[data-group~= "' + filterGet + '"]').removeClass(hideClass);
      }
    });



    // ヘッダー表示・非表示切り替え
    var beforePos = 0; /* スクロールのデフォルト値 */

    function headerAnime() {
      var scrollHeight = 850;
      var scroll = $(window).scrollTop();
      var windowW = $(window).width();
      var sp = 767
      if (windowW > sp) {

        // ヘッダー表示・非表示
        if (scroll == beforePos) {
          // IE11対策で何も入れない（？）
        } else if (scrollHeight > scroll || 0 > scroll - beforePos) {
          // ヘッダー出現
          $('.header').removeClass('UpMove');
          $('.header').addClass('DownMove');
        } else {
          // ヘッダー消える
          $('.header').removeClass('DownMove');
          $('.header').addClass('UpMove');
        }

        beforePos = scroll; /* 現在のスクロール値を入れる */
      }
    }
    // スクロール時実行
    $(window).on('scroll', function () {
      headerAnime();
    });
  });

  // スクロールフェードイン
  $(function () {
    $(window).on('load scroll', function () {
      const windowHeight = $(window).height();
      const scroll = $(window).scrollTop();

      $('.fadeIn').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 50 || windowHeight > targetPosition) {
          $(this).addClass("fade--active");
        }
      });
    });
    $(window).scroll();
  });

});