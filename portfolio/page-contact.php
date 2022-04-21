<?php get_header(); ?>
<main>
  <section class="form">
    <!---------------- パンくずリスト ---------------->
    <?php get_template_part('sec', 'breadcrumb'); ?>
    <h2 class="form__title">Contact</h2>

    <?php echo do_shortcode('[contact-form-7 id="5" html_class="contact-form" title="お問い合わせ"]'); ?>


  </section>


</main>


<?php get_footer(); ?>