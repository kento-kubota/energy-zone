<?php get_header(); ?>
<main>
  <!---------------- Main-Visual ---------------->
  <div class="mainV">
    <div class="mainV__message">
      <div class="mainV__text fadeIn">All</div>
      <div class="mainV__text fadeIn">About</div>
      <div class="mainV__text fadeIn">Me.</div>
    </div>
    <div class="mainV__bg">
      <div class="mainV__design fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('img/design-min.png')); ?>" alt="Design" class="mainV__img"></div>
      <div class="mainV__coding fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('img/coding-min.png')); ?>" alt="Coding" class="mainV__img2"></div>
    </div>
    <div class="mainV__glitch fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('img/glitch_photo-min.png')); ?>" alt="Coding" class="mainV__img3"></div>
  </div>
  <!---------------- Works ---------------->
  <section class="works">
    <h2 class="works__title fadeIn">Works</h2>
    <ul class="slickList fadeIn">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="slickList__item">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php } else { ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/img/hello_world')); ?>" alt="no photo" class="slickList__img">
              <?php } ?>
            </a>
          </li>
        <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  <div class="btn fadeIn">
    <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn__link">実績一覧</a>
    <span class="btn__allow"></span>
  </div>
  </section>
  <!---------------- About ---------------->
  <section class="about">
    <h2 class="about__title fadeIn">About</h2>
    <div class="about__wrap">
      <div class="about__photo fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('img/my_photo.jpg')); ?>" alt="久保田健斗の写真" class="about__img"></div>
      <div class="about__text">
        <p class="about__name fadeIn">久保田　健斗</p>
        <p class="about__info fadeIn">1999年8月5日生まれ（22歳）</p>
        <p class="about__info fadeIn">趣味：野球、洋画、ゲーム、音楽</p>
        <p class="about__detail fadeIn">デザイナーである父がきっかけでデザインに興味を持ち、３年間独学で学んできました。良いデザイナーとは、お客様の目線で考え、同じゴールを目指せる人だと思います。私はデザインだけでなく、その先にある喜びをつくれるデザイナーを目指しています。</p>
      </div>
    </div>
    <div class="sns fadeIn">
      <div class="sns__icons">
        <a href="https://twitter.com/ken_s_lifestyle" class="sns__account">
          <p class="sns__title">Twitter</p>
          <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_t-min.png')); ?>" alt="Twitterアカウント" class="sns__img"></div>
        </a>
        <a href="https://www.instagram.com/ken_s_lifestyle/" class="sns__account">
          <p class="sns__title">Instagram</p>
          <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_i-min.png')); ?>" alt="Instagramアカウント" class="sns__img"></div>
        </a>
        <a href="https://webolution-studio.com" class="sns__account">
          <p class="sns__title">Blog</p>
          <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('img/icon_b-min.png')); ?>" alt="Blog" class="sns__img"></div>
        </a>
        <a href="https://github.com/kento-kubota" class="sns__account">
          <p class="sns__title">GitHub</p>
          <div class="sns__wrap"><img src="<?php echo esc_url(get_theme_file_uri('img/GitHub_dark-min.png')); ?>" alt="GitHubアカウント" class="sns__img"></div>
        </a>
      </div>
      <div class="btn fadeIn">
        <a href="<?php echo esc_url(get_page_link(9)); ?>" class="btn__link">詳細はこちら</a>
        <span class="btn__allow"></span>
      </div>
    </div>
  </section>
  <!---------------- Skills ---------------->
  <section class="skills">
    <h2 class="skills__title fadeIn">Skills</h2>
    <div class="skills__flexwrap">
      <div class="design fadeIn">
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
      <div class="coding fadeIn">
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
    <div class="btn fadeIn">
      <a href="<?php echo esc_url(get_page_link(13)); ?>" class="btn__link">詳細はこちら</a>
      <span class="btn__allow"></span>
    </div>
    <div class="bg-triangle"></div>
  </section>
  <section class="contact">
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