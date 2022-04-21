<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ーーーーーーーーーーーーーーーーーーーーーここからOGP設定 ーーーーーーーーーーーーーーーーーーーーーーーーー-->

  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- OGP使用の宣言 -->
    <meta property="og:title" content="Kento Kubota Portfolio">
    <meta property="og:description" content="久保田健斗のポートフォリオです。デザインだけでなく、その先にある喜びを届けられるようなデザイナーを目指しています。ご依頼やお問い合わせなど、お気軽にご連絡ください。">
    <meta property="og:type" content="website"> <!-- TOPページ = 'website, それ以外 = 'article' を指定　-->
    <meta property="og:url" content="ページのURL"> <!-- URLは絶対パスで記述 -->
    <!-- アップロード時に書く -->
    <meta property="og:image" content="アイキャッチ"> <!-- URLは絶対パスで記述 -->
    <!-- アップロード時に書く -->
    <!-- 画像比率1.91:1推奨(facebook:1200 x 630) -->
    <meta property="og:site_name" content="Kento Kubota Portfolio">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image"> <!-- summary、summary_large_image等を指定 -->
    <meta name="twitter:site" content="@ken_s_lifestyle"> <!-- Twitterアカウント -->
    <meta property="fb:app_id" content="1137243610436865"> <!-- facebook アプリID -->
    <!---------------- ここまでOGP設定 ---------------->
    <link rel="stylesheet" href="./scss/plugin/slick.css"> <!-- slick -->
    <link rel="stylesheet" href="https://use.typekit.net/aqk5sdr.css"> <!-- Webフォント -->
    <script src="https://kit.fontawesome.com/b6f85811e6.js" crossorigin="anonymous"></script> <!-- FontAwesome -->
    <link rel="stylesheet" href="./css/reset.css"> <!-- リセットCSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Kento Kubota Portfolio</title>
    <?php wp_head(); ?>
  </head>

<body>
  <!----------------　ヘッダーここから　---------------->
  <header class="header">
    <div class="header__inner">
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
          <h1 class="logo__wrap"><img src="<?php echo get_template_directory_uri(); ?>img/p_logo.svg" alt="kento portfolio" class="logo__img"></h1>
        </a>
      </div>
      <div class="header__right">
        <!-- ---------------- PCメニューバー ---------------- -->
        <nav class="pcMenu">
          <ul class="listPC">
            <li class="listPC__item">
              <a href="/works.html" class="listPC__link">
                <div class="listPC__ja">実績</div>
                <div class="listPC__en">Works</div>
              </a>
            </li>
            <li class="listPC__item">
              <a href="/about.html" class="listPC__link">
                <div class="listPC__ja">自己紹介</div>
                <div class="listPC__en">About</div>
              </a>
            </li>
            <li class="listPC__item">
              <a href="/skills.html" class="listPC__link">
                <div class="listPC__ja">できること</div>
                <div class="listPC__en">Skills</div>
              </a>
            </li>
            <li class="listPC__item">
              <a href="https://webolution-studio.com" class="listPC__link">
                <div class="listPC__ja">ブログ</div>
                <div class="listPC__en">Blog</div>
              </a>
            </li>
          </ul>
        </nav>
        <!-- ---------------- tabletお問い合わせボタン ---------------- -->
        <div class="header__contact">
          <a href="/contact.html" class="header__btnBlue">Contact</a>
        </div>
        <!---------------- ハンバーガーメニュー ---------------->
        <div class="header__menu">
          <span class="header__btnLine"></span>
        </div>
      </div>
    </div>

    <!-------------- SPメニュー ---------------->
    <nav class="spMenu">
      <h2 class="spMenu__title">Menu</h2>
      <ul class="list">
        <li class="list__item">
          <a href="/works.html" class="list__link">
            <div class="list__en">WORKS</div>
            <div class="list__ja">実績</div>
          </a>
        </li>
        <li class="list__item">
          <a href="/about.html" class="list__link">
            <div class="list__en">ABOUT</div>
            <div class="list__ja">自己紹介</div>
          </a>
        </li>
        <li class="list__item">
          <a href="/skills.html" class="list__link">
            <div class="list__en">SKILLS</div>
            <div class="list__ja">できること</div>
          </a>
        </li>
        <li class="list__item">
          <a href="/contact.html" class="list__link">
            <div class="list__en">CONTACT</div>
            <div class="list__ja">お問い合わせ</div>
          </a>
        </li>
        <li class="list__item">
          <a href="https://webolution-studio.com" class="list__link">
            <div class="list__en">BLOG</div>
            <div class="list__ja">ブログ</div>
          </a>
        </li>
      </ul>
      <!---------------- SNSセクション ---------------->
      <ul class="subList">
        <li class="subList__item">
          <a href="https://twitter.com/ken_s_lifestyle" class="subList__link">
            <div class="subList__title">Twitter</div>
            <div class="subList__sns"><img src="<?php echo get_template_directory_uri('img/icon_t-min.png'); ?>" alt="" class="subList__img"></div>
          </a>
        </li>
        <li class="subList__item">
          <a href="https://www.instagram.com/ken_s_lifestyle/" class="subList__link">
            <div class="subList__title">Instagram</div>
            <div class="subList__sns"><img src="<?php echo get_template_directory_uri(); ?>img/icon_i-min.png" alt="" class="subList__img"></div>
          </a>
        </li>
        <li class="subList__item">
          <a href="https://github.com/kento-kubota" class="subList__link">
            <div class="subList__title">GitHub</div>
            <div class="subList__sns"><img src="<?php echo get_template_directory_uri(); ?>img/GitHub_dark-min.png" alt="GitHub" class="subList__img"></div>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <!---------------- ヘッダーここまで ---------------->
  <main>
    <!---------------- Main-Visual ---------------->
    <div class="mainV">
      <div class="mainV__message">
        <div class="mainV__text">All</div>
        <div class="mainV__text">About</div>
        <div class="mainV__text">Me.</div>
      </div>
      <div class="mainV__bg">
        <div class="mainV__design"><img src="<?php echo get_template_directory_uri(); ?>img/design-min.png" alt="Design" class="mainV__img"></div>
        <div class="mainV__coding"><img src="<?php echo get_template_directory_uri(); ?>img/coding-min.png" alt="Coding" class="mainV__img2"></div>
      </div>
      <div class="mainV__glitch"><img src="<?php echo get_template_directory_uri(); ?>img/glitch_photo-min.png" alt="Coding" class="mainV__img3"></div>
    </div>
    <!---------------- Works ---------------->
    <section class="works">
      <h2 class="works__title">Works</h2>
      <ul class="slickList">
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/Park_TOP-min.jpg" alt="ワクワクフォレスト" class="slickList__img"></li>
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/French_TOP-min.jpg" alt="アンコール" class="slickList__img"></li>
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/Park_TOP-min.jpg" alt="ワクワクフォレスト" class="slickList__img"></li>
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/French_TOP-min.jpg" alt="アンコール" class="slickList__img"></li>
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/Park_TOP-min.jpg" alt="ワクワクフォレスト" class="slickList__img"></li>
        <li class="slickList__item"><img src="<?php echo get_template_directory_uri(); ?>img/French_TOP-min.jpg" alt="アンコール" class="slickList__img"></li>
      </ul>
      <div class="btn">
        <a href="/works.html" class="btn__link">実績一覧</a>
        <span class="btn__allow"></span>
      </div>
    </section>
    <!---------------- About ---------------->
    <section class="about">
      <h2 class="about__title">About</h2>
      <div class="about__wrap">
        <div class="about__photo"><img src="<?php echo get_template_directory_uri(); ?>img/my_photo.jpg" alt="久保田健斗の写真" class="about__img"></div>
        <div class="about__text">
          <p class="about__name">久保田　健斗</p>
          <p class="about__info">1999年8月5日生まれ（22歳）</p>
          <p class="about__info">趣味：野球、洋画、ゲーム、音楽</p>
          <p class="about__detail">デザイナーである父がきっかけでデザインに興味を持ち、３年間独学で学んできました。良いデザイナーとは、お客様の目線で考え、同じゴールを目指せる人だと思います。私はデザインだけでなく、その先にある喜びをつくれるデザイナーを目指しています。</p>
        </div>
      </div>
      <div class="sns">
        <div class="sns__icons">
          <a href="https://twitter.com/ken_s_lifestyle" class="sns__account">
            <p class="sns__title">Twitter</p>
            <div class="sns__wrap"><img src="<?php echo get_template_directory_uri(); ?>img/icon_t-min.png" alt="Twitterアカウント" class="sns__img"></div>
          </a>
          <a href="https://www.instagram.com/ken_s_lifestyle/" class="sns__account">
            <p class="sns__title">Instagram</p>
            <div class="sns__wrap"><img src="<?php echo get_template_directory_uri(); ?>img/icon_i-min.png" alt="Instagramアカウント" class="sns__img"></div>
          </a>
          <a href="https://webolution-studio.com" class="sns__account">
            <p class="sns__title">Blog</p>
            <div class="sns__wrap"><img src="<?php echo get_template_directory_uri(); ?>img/icon_b-min.png" alt="Blog" class="sns__img"></div>
          </a>
          <a href="https://github.com/kento-kubota" class="sns__account">
            <p class="sns__title">GitHub</p>
            <div class="sns__wrap"><img src="<?php echo get_template_directory_uri(); ?>img/GitHub_dark-min.png" alt="GitHubアカウント" class="sns__img"></div>
          </a>
        </div>
        <div class="btn">
          <a href="/about.html" class="btn__link">詳細はこちら</a>
          <span class="btn__allow"></span>
        </div>
      </div>
    </section>
    <!---------------- Skills ---------------->
    <section class="skills">
      <h2 class="skills__title">Skills</h2>
      <div class="skills__flexwrap">
        <div class="design">
          <div class="design__wrap">
            <i class="fa-solid fa-pencil design__icon"></i>
            <h3 class="design__subtitle">Design</h3>
          </div>
          <div id="count_1" class="design__ps">
            <p class="design__name">Photoshop</p>
            <p class="design__per"><span class="count-up">75</span>%</p>
            <span class="design__line"></span>
          </div>
          <div id="count_2" class="count_1 design__il">
            <p class="design__name">Illustrator</p>
            <p class="design__per"><span class="count-up">60</span>%</p>
            <span class="design__line"></span>
          </div>
          <div id="count_3" class="design__xd">
            <p class="design__name">Adobe XD</p>
            <p class="design__per"><span class="count-up">85</span>%</p>
            <span class="design__line"></span>
          </div>
          <div id="count_4" class="design__pp">
            <p class="design__name">Premiere Pro</p>
            <p class="design__per"><span class="count-up">15</span>%</p>
            <span class="design__line"></span>
          </div>
          <div id="count_5" class="design__seo">
            <p class="design__name">SEO</p>
            <p class="design__per"><span class="count-up">50</span>%</p>
            <span class="design__line"></span>
          </div>
        </div>
        <div class="coding">
          <div class="coding__wrap">
            <i class="fa-solid fa-code coding__icon"></i>
            <h3 class="coding__subtitle">Coding</h3>
          </div>
          <div id="count_6" class="coding__css">
            <p class="coding__name">HTML / CSS</p>
            <p class="coding__per"><span class="count-up">90</span>%</p>
            <span class="coding__line"></span>
          </div>
          <div id="count_7" class="coding__js">
            <p class="coding__name">JavaScript</p>
            <p class="coding__per"><span class="count-up">30</span>%</p>
            <span class="coding__line"></span>
          </div>
          <div id="count_8" class="coding__jq">
            <p class="coding__name">jQuery</p>
            <p class="coding__per"><span class="count-up">70</span>%</p>
            <span class="coding__line"></span>
          </div>
          <div id="count_9" class="coding__wp">
            <p class="coding__name">WordPress</p>
            <p class="coding__per"><span class="count-up">65</span>%</p>
            <span class="coding__line"></span>
          </div>
          <div id="count_10" class="coding__git">
            <p class="coding__name">GitHub</p>
            <p class="coding__per"><span class="count-up">30</span>%</p>
            <span class="coding__line"></span>
          </div>
        </div>
      </div>
      <div class="btn">
        <a href="/skills.html" class="btn__link">詳細はこちら</a>
        <span class="btn__allow"></span>
      </div>
      <div class="bg-triangle"></div>
    </section>
    <section class="contact">
      <h2 class="contact__title">Contact</h2>
      <p class="contact__text">ご質問やその他お問い合わせは</p>
      <p class="contact__text">お問い合わせフォームからご連絡ください。</p>
      <div class="btn">
        <a href="/" class="btn__link">お問い合わせ</a>
        <span class="btn__allow"></span>
      </div>
    </section>

  </main>



  <footer class="footer">
    <div class="footer__top">
      <div class="footer__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>img/p_logo_white.svg" alt="kento portfolio logo" class="footer__img"></a></div>
      <div class="footer__sns">
        <div class="sns"><a href="https://twitter.com/ken_s_lifestyle"><img src="<?php echo get_template_directory_uri('img/icon_t-min.png'); ?>" alt="Twitter" class="sns__img"></a></div>
        <div class="sns"><a href="https://www.instagram.com/ken_s_lifestyle/"><img src="<?php echo get_template_directory_uri(); ?>img/icon_i-min.png" alt="Instagram" class="sns__img"></a></div>
        <div class="sns"><a href="https://github.com/kento-kubota"><img src="<?php echo get_template_directory_uri(); ?>img/GitHub_dark-min.png" alt="github" class="sns__img"></a></div>
      </div>
    </div>
    <div class="footer__middle">
      <nav class="pcMenu">
        <ul class="listPC">
          <li class="listPC__item">
            <a href="/works.html" class="listPC__link">
              <div class="listPC__ja">実績</div>
              <div class="listPC__en">Works</div>
            </a>
          </li>
          <li class="listPC__item">
            <a href="/about.html" class="listPC__link">
              <div class="listPC__ja">自己紹介</div>
              <div class="listPC__en">About</div>
            </a>
          </li>
          <li class="listPC__item">
            <a href="/skills.html" class="listPC__link">
              <div class="listPC__ja">できること</div>
              <div class="listPC__en">Skills</div>
            </a>
          </li>
          <li class="listPC__item">
            <a href="https://webolution-studio.com" class="listPC__link">
              <div class="listPC__ja">ブログ</div>
              <div class="listPC__en">Blog</div>
            </a>
          </li>
          <li class="listPC__item">
            <a href="/" class="listPC__link">
              <div class="listPC__ja">お問い合わせ</div>
              <div class="listPC__en">Contact</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <p class="footer__privacy"><a href="/policy.html">プライバシーポリシー</a></p>
    <small class="footer__copyright">&copy; 2022 <?php bloginfo('name'); ?>. All Rights Reserved.</small>
  </footer>
  <!-- ---------------- フッターここまで ---------------- -->
  <!-- ---------------- スクリプト読み込み ---------------- -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <!-- jQuery読み込み -->
  <script src="./js/slick.min.js"></script><!-- slick.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script> <!-- jQuery.inview -->
  <script src="./js/script.js"></script> <!-- 自作js -->
  <?php wp_footer(); ?>
</body>

</html>