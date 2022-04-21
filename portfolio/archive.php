<?php get_header(); ?>
<main>
  <section class="archive">
    <?php get_template_part('sec', 'breadcrumb'); ?>
    <h2 class="archive__title fadeIn">Works</h2>
    <!-- ---------------- 絞り込みメニュー ---------------- -->
    <div class="search fadeIn">
      <span class="search__item  is--active" data-filter="all">ALL</span>
      <span class="search__item" data-filter="design">Design</span>
      <span class="search__item" data-filter="coding">Coding</span>
      <span class="search__item" data-filter="wordpress">WordPress</span>
      <span class="search__item" data-filter="others">Others</span>
    </div>
    <ul class="worksList">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php $categories = get_the_category(); ?>
          <?php if ($categories) { ?>

            <li class="worksList__item fadeIn" data-group="<?php foreach ($categories as $category) {
                                                      echo $category->slug . ' ';
                                                    } ?> ">
              <a href="<?php echo get_the_permalink(); ?> " class="worksList__link">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/img/hello_world')); ?>" alt="no photo" class="workList__img">
                <?php } ?>
                <p class="worksList__name"><?php the_title(); ?></p>
              </a>
            </li>
          <?php } ?>
        <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>