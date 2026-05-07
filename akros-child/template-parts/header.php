<?php

/**
 * ヘッダー用テンプレート
 */
$move_gnav_under = Arkhe::get_setting('move_gnav_under');
$logo_pos        = $move_gnav_under ? 'center' : 'left';
?>
<header id="header" class="l-header" <?php Arkhe::header_attrs(array('logo_pos' => $logo_pos)); ?>>
  <?php Arkhe::get_part('header/header_bar'); ?>
  <div class="l-header__body l-container">
    <?php Arkhe::get_part('header/btn/drawer'); ?>
    <div class="l-header__left">
      <!-- <?php do_action('arkhe_header_left_content'); ?> -->
      <nav id="gnav" class="c-gnavWrap">
        <ul class="c-gnav">
          <li id="40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>kids-class/" class="c-gnav__a"><span class="__mainText">KID’S CLASS</span><span class="__subText">子供クラス</span></a></li>
          <li id="39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>adult-class/" class="c-gnav__a"><span class="__mainText">ADULT CLASS</span><span class="__subText">大人クラス</span></a></li>
          <li id="38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>instructor/" class="c-gnav__a"><span class="__mainText">INSTRUCTOR</span><span class="__subText">指導者</span></a></li>
        </ul>
      </nav>
    </div>
    <div class="l-header__center">
      <!-- <?php Arkhe::get_part('header/logo'); ?> -->
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <figure class="l-header__logo-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo-wide.svg" alt="akros南麻布" width="100%" height="auto">
        </figure>
      </a>
    </div>
    <div class="l-header__right">
      <!-- <?php
            if (!$move_gnav_under) :
              Arkhe::get_part('header/gnav');
            endif;
            do_action('arkhe_header_right_content');
            ?> -->
      <nav id="gnav" class="c-gnavWrap">
        <ul class="c-gnav">
          <li id="40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>trial/" class="c-gnav__a"><span class="__mainText">TRIAL LESSON</span><span class="__subText">体験レッスン</span></a></li>
          <li id="39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>about/" class="c-gnav__a"><span class="__mainText">ABOUT</span><span class="__subText">アクロス南麻布とは</span></a></li>
          <li id="38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38 c-gnav__li"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="c-gnav__a"><span class="__mainText">CONTACT</span><span class="__subText">お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
    <?php Arkhe::get_part('header/btn/search'); ?>
    <?php Arkhe::get_part('header/drawer_menu'); ?>
  </div>
</header>
<?php if ($move_gnav_under) : ?>
  <div class="l-headerUnder" <?php if (Arkhe::get_setting('fix_gnav'))  echo ' data-fix="1"'; ?>>
    <div class="l-headerUnder__inner l-container">
      <?php Arkhe::get_part('header/gnav'); ?>
    </div>
  </div>
<?php endif; ?>