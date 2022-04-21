<?php get_header(); ?>
<main>
  <section class="work">
    <!---------------- パンくずリスト ---------------->
    <?php get_template_part('sec', 'breadcrumb'); ?>
    <h2 class="work__title fadeIn"><?php echo CFS()->get('w_title_1'); ?></h2>
    <p class="work__name fadeIn"><?php echo CFS()->get('w_title_2'); ?></p>
    <!-- ---------------- slickスライダー ---------------- -->
    <div class="work__slick fadeIn">
      <div class="work__mockup">
        <img src="<?php echo CFS()->get('slide_img'); ?>" class="work__img">
      </div>
      <div class="work__mockup">
        <img src="<?php echo CFS()->get('slide_img_2'); ?>" class="work__img">
      </div>
    </div>
    <div class="work__ex">
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">サイト概要</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('descri'); ?></p>
      </div>
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">ゴール</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('goal'); ?></p>
      </div>
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">制作ポイント</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('point'); ?></p>
      </div>
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">制作範囲</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('area'); ?></p>
      </div>
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">ツール</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('tool'); ?></p>
      </div>
      <div class="work__flex">
        <h3 class="work__subTitle fadeIn">制作期間</h3>
        <p class="work__content fadeIn"><?php echo CFS()->get('period'); ?></p>
      </div>
    </div>
    <div class="fullPage">
      <div class="fullPage__flex">
        <div class="fullPage__top">
          <h2 class="fullPage__title fadeIn"><?php echo CFS()->get('full_title_1'); ?></h2>
          <div class="fullPage__wrap fadeIn"><img src="<?php echo CFS()->get('full_img_1'); ?>" class="fullPage__img"></div>
        </div>
        <div class="fullPage__sub">
          <h2 class="fullPage__title fadeIn"><?php echo CFS()->get('full_title_2'); ?></h2>
          <div class="fullPage__wrap fadeIn"><img src="<?php echo CFS()->get('full_img_2'); ?>" class="fullPage__img"></div>
        </div>
      </div>
    </div>

  </section>


</main>


<?php get_footer(); ?>