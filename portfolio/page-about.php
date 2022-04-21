<?php get_header(); ?>
<main>
  <section class="aboutSec">
    <!---------------- パンくずリスト ---------------->
    <?php get_template_part('sec', 'breadcrumb'); ?>
    <h2 class="aboutSec__title fadeIn">About</h2>
    <!-- ---------------- aboutセクション - TOPページと共通 ---------------- -->
    <p class="about__comment fadeIn">私は小さい頃から、自分より誰かを笑顔にすることに喜びを感じてきました。デザイナーとは、デザインを作るだけでなく、それを通して人を幸せにする仕事だと考えています。私も「誰か」の笑顔を大切にできるデザイナーを目指しています。</p>
    <div class="about__wrap">
      <div class="about__photo fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('img/my_photo.jpg')); ?> " alt="久保田健斗の写真" class="about__img"></div>
      <div class="about__text fadeIn">
        <p class="about__name aboutSec__name fadeIn">久保田　健斗</p>
        <p class="about__info fadeIn">1999年8月5日生まれ（22歳）</p>
        <p class="about__info fadeIn">趣味：野球、洋画、ゲーム、音楽</p>
        <p class="about__detail aboutSec__detail fadeIn">コードに強いwebデザイナーを目指す２３歳です。デザイナーである父がきっかけでデザインに興味を持ち、３年間独学で学んできました。英語が好きで、趣味は洋楽や洋画観賞です。高校では部員１２０人の中で野球をしていたので、チームワークとチーム内で結果を出すことには自信があります。</p>
      </div>
    </div>
  </section>
  <section class="background">
    <h2 class="background__title fadeIn">Background</h2>
    <div class="background__wrap">
      <div class="background__date">
        <div class="background__day fadeIn">1999/8/5</div>
        <div class="background__day fadeIn">2009/4/1</div>
        <div class="background__day fadeIn">2015/4/1</div>
        <div class="background__day fadeIn">2018/3/1</div>
        <div class="background__day fadeIn">2020/4/1</div>
        <div class="background__day fadeIn">2020/11/-</div>
        <div class="background__day fadeIn">現在</div>
      </div>
      <div class="background__line">
        <div class="background__border"></div>
        <div class="background__border"></div>
        <div class="background__border"></div>
        <div class="background__border"></div>
        <div class="background__border"></div>
        <div class="background__border"></div>
        <div class="background__border"></div>
      </div>

      <div class="background__text">
        <div class="background__content fadeIn">東京都に生まれる</div>
        <div class="background__content fadeIn">野球を始める</div>
        <div class="background__content fadeIn">日大鶴ヶ丘高校に入学</div>
        <div class="background__content fadeIn">高校卒業</div>
        <div class="background__content fadeIn">法政大学に入学<br>デザイン独学開始</div>
        <div class="background__content fadeIn">TOEICスコア 830取得</div>
      </div>
    </div>
    <div class="ex">
      <p class="ex__club fadeIn">部活動期間</p>
      <p class="ex__design fadeIn">デザイン独学期間</p>
    </div>
  </section>
  <!-- ---------------- その他活動セクション ---------------- -->
  <section class="info">
    <h2 class="info__title fadeIn">SNS・Blog</h2>
    <p class="info__text fadeIn">ご依頼や重要なお問い合わせは<br>お問い合わせフォームからご連絡ください。</p>
    <div class="sns__icons fadeIn">
      <a href="https://twitter.com/ken_s_lifestyle" class="sns__account">
        <p class="sns__title">Twitter</p>
        <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('/img/icon_t-min.png')); ?>" alt="Twitterアカウント" class="sns__img"></div>
      </a>
      <a href="https://www.instagram.com/ken_s_lifestyle/" class="sns__account">
        <p class="sns__title">Instagram</p>
        <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('./img/icon_i-min.png')); ?>" alt="Instagramアカウント" class="sns__img"></div>
      </a>
      <a href="" class="sns__account">
        <p class="sns__title">Blog</p>
        <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('./img/icon_b-min.png')); ?>" alt="Blog" class="sns__img"></div>
      </a>
      <a href="https://github.com/kento-kubota" class="sns__account">
        <p class="sns__title">GitHub</p>
        <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('/img/GitHub_dark-min.png')); ?>" alt="GitHubアカウント" class="sns__img"></div>
      </a>
    </div>
    <h2 class="contact__title fadeIn">Contact</h2>
    <p class="contact__text fadeIn">ご質問やその他お問い合わせは</p>
    <p class="contact__text fadeIn">お問い合わせフォームからご連絡ください。</p>
    <div class="btn fadeIn">
      <a href="<?php echo esc_url(get_page_link(11)); ?>" class="btn__link">お問い合わせ</a>
      <span class="btn__allow"></span>
    </div>
  </section>


</main>
<?php get_footer(); ?>