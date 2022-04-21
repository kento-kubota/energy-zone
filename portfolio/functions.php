<?php

/**********************
asset読み込み
 *********************/
function my_enqueue_styles()
{
  // css
  wp_enqueue_style('slick', get_theme_file_uri('/scss/plugin/slick.css'), array(), '', 'all'); /* slick.css */
  wp_enqueue_style('font', 'https://use.typekit.net/aqk5sdr.css', array(), '', 'all'); /* adobe fonts webkit */
  wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'), array(), '', 'all'); /* reset css */
  wp_enqueue_style('my-css', get_stylesheet_uri(), array('slick', 'font', 'reset'), '', 'all'); /* style.css */

  // js
  wp_enqueue_script('jquery'); /* デフォルトのjQuery呼び出し */
  wp_enqueue_script('slick', get_theme_file_uri('/js/slick.min.js'), array('jquery'), '', true); /* slick.js */
  wp_enqueue_script('awesome', 'https://kit.fontawesome.com/b6f85811e6.js', array('jquery'), '', true); /* font awesome */
  wp_enqueue_script('inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js', array('jquery'), '', true); /* inview.js */
  wp_enqueue_script('my-js', get_theme_file_uri('/js/script.js'), array('jquery', 'slick', 'awesome', 'inview'), '', true); /* 自作js */
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');


/**********************
OGP設定
 *********************/
function my_meta_ogp()
{
  if (is_front_page() || is_home() || is_singular()) {
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if (is_singular()) { //記事＆固定ページ
      setup_postdata($post);
      $ogp_title = $post->post_title;
      $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    } elseif (is_front_page() || is_home()) { //トップページ
      $ogp_title = get_bloginfo('name');
      $ogp_descr = get_bloginfo('description');
      $ogp_url = home_url();
    }

    //og:type
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

    //og:image
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_img = $ps_thumb[0];
    } else {
      $ogp_img = '<?php echo get_template_directory_uri(); ?>/img/top.jpg';
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $insert .= '<meta property="og:description" content="' . esc_attr($ogp_descr) . '" />' . "\n";
    $insert .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
    $insert .= '<meta property="og:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $insert .= '<meta property="og:image" content="' . esc_url($ogp_img) . '" />' . "\n";
    $insert .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta name="twitter:site" content="@ken_s_lifestyle" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    //facebookのapp_id（設定する場合）
    $insert .= '<meta property="fb:app_id" content="1137243610436865">' . "\n";
    //app_idを設定しない場合ここまで消す

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head', 'my_meta_ogp'); //headにOGPを出力

/**********************
投稿アーカイブページ
 *********************/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'works';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**********************
アイキャッチ適用
 *********************/
function custom_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');


