<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php Arkhe::root_attrs(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, viewport-fit=cover">


  <?php
  wp_head();
  $setting = Arkhe::get_setting(); // SETTING取得
  ?>

  <!-- google font  -->
  <!-- Google Fonts 発行のlinkタグをコピーした時の最初の2行はそのまま -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- 3行目を複製して rel="stylesheet" を rel="preload" as="style" に置き換える -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Noto++Sans+JP:wght@300;400;500;600;700;900&display=swap" rel="preload" as="style" />

  <!-- 3行目の rel="stylesheet" の後に media="print" onload="this.media='all'" を追加 -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Noto++Sans+JP:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />

  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

  <!-- slick -->
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation/ress.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css">

  <!-- layout -->
<!--   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout/header.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout/footer.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout/container.css"> -->

  <!-- component -->
<!--   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/button.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/title.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/drawer.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/post.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/nav.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component/form.css"> -->

  <!-- project -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/text.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/p-drawer.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/top.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/class.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/about.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/instructor.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/trial.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/project/contact.css"> -->

  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/utility.css"> -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">


  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css"> -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/splide-core.min.css">
</head>

<body <?php body_class(); ?>>
  <?php if (function_exists('wp_body_open')) wp_body_open(); ?>
  <!-- Start: #wrapper -->
  <div id="wrapper" class="l-wrapper">
    <?php
    // ヘッダー
    do_action('arkhe_before_header');
    Arkhe::get_part('header');
    do_action('arkhe_after_header');
    ?>
    <div id="content" class="l-content">
      <?php do_action('arkhe_start_content'); // テーマ側でも使用 
      ?>
      <div class="l-content__body l-container">