<!---------------- パンくずリスト ---------------->
<div class="breadcrumb">
  <ul class="breadcrumb__list">
    <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>" class="breadcrumb__link"><i class="fa-solid fa-house breadcrumb__icon"></i>Home</li></a>
    <?php if (is_archive()) : ?>
      <li class="breadcrumb__item">Works</li>
    <?php elseif (is_page()) : ?>
      <li class="breadcrumb__item"><?php echo the_title(); ?></li>
    <?php elseif (is_single()) : ?>
      <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="breadcrumb__link">Works</li></a>
      <li class="breadcrumb__item"><?php echo the_title(); ?></li>
    <?php endif; ?>
  </ul>
</div>