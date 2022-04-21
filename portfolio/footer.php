<footer class="footer">
  <div class="footer__top">
    <div class="footer__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/p_logo_white.svg')); ?>" alt="kento portfolio logo" class="footer__img"></a></div>
    <div class="footer__sns">
      <div class="sns"><a href="https://twitter.com/ken_s_lifestyle"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_t-min.png')); ?>" alt="Twitter" class="sns__img"></a></div>
      <div class="sns"><a href="https://www.instagram.com/ken_s_lifestyle/"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_i-min.png')); ?>" alt="Instagram" class="sns__img"></a></div>
      <div class="sns"><a href="https://github.com/kento-kubota"><img src="<?php echo esc_url(get_theme_file_uri('img/GitHub_dark-min.png')); ?>" alt="github" class="sns__img"></a></div>
    </div>
  </div>
  <div class="footer__middle">
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
        <li class="listPC__item">
          <a href="<?php echo esc_url(get_page_link(11)); ?>" class="listPC__link">
            <div class="listPC__ja">お問い合わせ</div>
            <div class="listPC__en">Contact</div>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <p class="footer__privacy"><a href="<?php echo esc_url(get_page_link(15)); ?>">プライバシーポリシー</a></p>
  <small class="footer__copyright">&copy; 2022 <?php bloginfo('name'); ?>. All Rights Reserved.</small>
</footer>
<!-- ---------------- フッターここまで ---------------- -->
<!-- ---------------- スクリプト読み込み ---------------- -->
<?php wp_footer(); ?>
</body>

</html>