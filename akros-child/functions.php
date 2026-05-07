<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );
}

/**
 * description setting
 */
$my_global_domain = "";
$my_global_description = "";

$my_global_companyName = "";
$my_global_zip = "";
$my_global_address = '';
$my_global_mail = '<spna>info</spna>';
$my_global_tel = "";
$my_global_fax = "";
// $my_global_ig  = "";
// $my_onlineShop_url = "";

/**
 * WordPressに実装されたネイティブサイトマップ機能の無効化.
 */
add_filter('wp_sitemaps_enabled', '__return_false');
/* ================================================================================ */
//自動で設定されるファビコンを削除 WordPress5.4以降
function wp_favicon_delete()
{
  exit;
}
add_action("do_faviconico", "wp_favicon_delete");
