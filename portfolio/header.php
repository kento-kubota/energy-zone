<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="google-site-verification" content="Z_hIsQX-K3jdFrRK3CZxy7LOjhccX-V5yRvO3TYGz2E" />
  <?php wp_head(); ?>
</head>

<body>
  <!----------------　ヘッダーここから　---------------->
  <header class="header header__not-top">
    <div class="header__inner">
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
          <h1 class="logo__wrap"><img src="<?php echo esc_url(get_theme_file_uri('/img/p_logo.svg')); ?>" alt="kento portfolio" class="logo__img"></h1>
        </a>
      </div>
      <div class="header__right">
        <!-- ---------------- PCメニューバー ---------------- -->
        <nav class="pcMenu">
          <ul class="listPC">
            <li class="listPC__item">
              <a href="<?php echo esc_url(home_url('/works')); ?>" class="listPC__link">
                <div class="listPC__ja">実績</div>
                <div class="listPC__en">Works</div>
              </a>
            </li>
            <li class="listPC__item">
              <a href="<?php echo esc_url(get_page_link(9)); ?>" class="listPC__link">
                <div class="listPC__ja">自己紹介</div>
                <div class="listPC__en">About</div>
              </a>
            </li>
            <li class="listPC__item">
              <a href="<?php echo esc_url(get_page_link(13)); ?>" class="listPC__link">
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
          <a href="<?php echo esc_url(get_page_link(11)); ?>" class="header__btnBlue">Contact</a>
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
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="list__link">
            <div class="list__en">WORKS</div>
            <div class="list__ja">実績</div>
          </a>
        </li>
        <li class="list__item">
          <a href="<?php echo esc_url(get_page_link(9)); ?>" class="list__link">
            <div class="list__en">ABOUT</div>
            <div class="list__ja">自己紹介</div>
          </a>
        </li>
        <li class="list__item">
          <a href="<?php echo esc_url(get_page_link(13)); ?>" class="list__link">
            <div class="list__en">SKILLS</div>
            <div class="list__ja">できること</div>
          </a>
        </li>
        <li class="list__item">
          <a href="<?php echo esc_url(get_page_link(11)); ?>" class="list__link">
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
            <div class="subList__sns"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_t-min.png')); ?>" alt="Twitter" class="subList__img"></div>
          </a>
        </li>
        <li class="subList__item">
          <a href="https://www.instagram.com/ken_s_lifestyle/" class="subList__link">
            <div class="subList__title">Instagram</div>
            <div class="subList__sns"><img src="<?php echo esc_url(get_theme_file_uri('img//icon_i-min.png')); ?>" alt="Instagram" class="subList__img"></div>
          </a>
        </li>
        <li class="subList__item">
          <a href="https://github.com/kento-kubota" class="subList__link">
            <div class="subList__title">GitHub</div>
            <div class="subList__sns"><img src="<?php echo esc_url(get_theme_file_uri('img/GitHub_dark-min.png')); ?>" alt="GitHub" class="subList__img"></div>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <!---------------- ヘッダーここまで ---------------->