<?php get_header(); ?>
<main>
  <section class="skillSet">
    <!---------------- パンくずリスト ---------------->
    <?php get_template_part('sec', 'breadcrumb'); ?>
    <h2 class="skillSet__title fadeIn">Skills</h2>
    <p class="about__comment skillSet__comment fadeIn">モバイルファーストでのデザイン制作。<br class="sp_nowrap">DartSassを使用した、管理のしやすいコーディング。<br class="sp_nowrap">WordPress化からサーバー契約・管理まで。</p>
    <!---------------- Skills ---------------->
    <div class="skills__flexwrap">
      <div class="design">
        <div class="design__wrap">
          <i class="fa-solid fa-pencil design__icon fadeIn"></i>
          <h3 class="design__subtitle fadeIn">Design</h3>
        </div>
        <div id="count_1" class="design__ps fadeIn">
          <p class="design__name">Photoshop</p>
          <p class="design__per"><span class="count-up">75</span>%</p>
          <span class="design__line"></span>
          <p class="design__content">画像の加工・編集・全体のデザインに使用。画像のマスクやレタッチ、背景の一部削除など、基本的な操作は問題なく行えます。</p>
        </div>
        <div id="count_2" class="design__il fadeIn">
          <p class="design__name">Illustrator</p>
          <p class="design__per"><span class="count-up">60</span>%</p>
          <span class="design__line"></span>
          <p class="design__content">ロゴ制作、文字の加工などに使用しています。一通りの操作は行えます。</p>
        </div>
        <div id="count_3" class="design__xd fadeIn">
          <p class="design__name">Adobe XD</p>
          <p class="design__per"><span class="count-up">85</span>%</p>
          <span class="design__line"></span>
          <p class="design__content">私がメインツールとして使用しており、ワイヤーフレームからモックアップ作成まで行います。またプロトタイプを使用してアニメーションを簡易的に実装し、動きのイメージがわかりやすいモックアップを制作することも可能です。</p>
        </div>
        <div id="count_4" class="design__pp fadeIn">
          <p class="design__name">Premiere Pro</p>
          <p class="design__per"><span class="count-up">15</span>%</p>
          <span class="design__line"></span>
          <p class="design__content">趣味で使っていたレベルですが、動画の加工・編集が可能です。タイピングアニメーションやテキストの枠に飛び込み、映像が切り替わるズームトランジションなどの作成を行えます。</p>
        </div>
        <div id="count_5" class="design__seo fadeIn">
          <p class="design__name">SEO</p>
          <p class="design__per"><span class="count-up">50</span>%</p>
          <span class="design__line"></span>
          <p class="design__content">ブログ運営を通してSEOの基礎について学びました。モバイルフレンドリーな設計やOGPの設定や適切なタグ使用など、SEOを意識したデザイン、コーディングが可能です。運営中のブログでは、実際にGoogleアナリティクス等の分析ツールを導入し、分析や改善を行っております。
          </p>
        </div>
      </div>
      <div class="coding">
        <div class="coding__wrap">
          <i class="fa-solid fa-code coding__icon fadeIn"></i>
          <h3 class="coding__subtitle fadeIn">Coding</h3>
        </div>
        <div id="count_6" class="coding__css fadeIn">
          <p class="coding__name">HTML / CSS</p>
          <p class="coding__per"><span class="count-up">90</span>%</p>
          <span class="coding__line"></span>
          <p class="design__content">Webサイトを一から作るコーディングができます。レスポンシブ対応はもちろん、メンテナンス性に優れ、今後使用を推奨されているDartSassでのコーディングも行えます。エディタはVisual Studio Codeを使用しています。</p>
        </div>
        <div id="count_7" class="coding__js fadeIn">
          <p class="coding__name">JavaScript</p>
          <p class="coding__per"><span class="count-up">30</span>%</p>
          <span class="coding__line"></span>
          <p class="design__content">アニメーションは基本的にjQueryを使用しますが、より複雑なアニメーションの場合などは、簡単なJavaScriptを使用しての実装も行います。</p>
        </div>
        <div id="count_8" class="coding__jq fadeIn">
          <p class="coding__name">jQuery</p>
          <p class="coding__per"><span class="count-up">70</span>%</p>
          <span class="coding__line"></span>
          <p class="design__content">フェードイン、スムーズスクロール、アコーディオンなど、基本的なアニメーションを実装できます。また、プラグインを使ってより手軽にアニメーションを実装することも可能です。</p>
        </div>
        <div id="count_9" class="coding__wp fadeIn">
          <p class="coding__name">WordPress</p>
          <p class="coding__per"><span class="count-up">65</span>%</p>
          <span class="coding__line"></span>
          <p class="design__content">WordPress管理画面の基本操作やカスタマイズ、HTMLで作られたサイトのWordPress化や、簡単な自作テーマの作成も行えます。当サイトもWordPressで実装しました。</p>
        </div>
        <div id="count_10" class="coding__git fadeIn">
          <p class="coding__name">GitHub</p>
          <p class="coding__per"><span class="count-up">30</span>%</p>
          <span class="coding__line"></span>
          <p class="design__content">チームでの開発経験はありませんが、バージョン管理ツールとしてGitHubの基礎を学びました。Visual Studio Codeと連携して使用、もしくはGitHub Desktopでの操作が可能です。</p>
        </div>
      </div>
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
      <a href="https://webolution-studio.com" class="sns__account">
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