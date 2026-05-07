<?php

/**
 * ドロワーメニュー
 */
$menu_args = array(
  'walker'          => new \Arkhe_Theme\Walker\Gnav_Menu(),
  'ark_component'   => 'drawerNav',
  'container'       => '',
  'fallback_cb'     => '',
  'items_wrap'      => '%3$s',
  'theme_location'  => has_nav_menu('drawer_menu') ? 'drawer_menu' : 'header_menu',
);
?>
<div id="drawer_menu" class="p-drawer">
  <div class="p-drawer__inner">
    <figure class="p-drawer__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo-g.svg" width="100%" height="auto" alt="akros南麻布"></figure>
    <div class="p-drawer__body">
      <?php do_action('arkhe_start_drawer_body'); ?>
      <div class="p-drawer__nav">
        <ul class="c-drawerNav">
          <?php wp_nav_menu($menu_args); ?>
        </ul>
      </div>
      <?php
      do_action('arkhe_after_drawer_nav');

      if (is_active_sidebar('drawer-bottom')) :
        echo '<div id="drawer_bottom" class="w-drawerBottom">';
        dynamic_sidebar('drawer-bottom');
        echo '</div>';
      endif;

      do_action('arkhe_end_drawer_body');
      ?>

      <!-- footer -->
      <ul class="p-drawer__footer">
        <li class="p-drawer__footer-list"><a href="<?php echo esc_url(home_url('/')); ?>#reserve"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-reserve.svg" alt="予約">予約</a></li>
        <li class="p-drawer__footer-list"><a href="<?php echo esc_url(home_url('/')); ?>about#access"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-map.svg" alt="アクセス">アクセス</a></li>
        <li class="p-drawer__footer-list"><a href="tel:0344008711"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-phone.svg" alt="電話">電話</a></li>
      </ul>

      <button type="button" class="p-drawer__close c-modalClose u-flex--aic" data-onclick="toggleMenu">
        <?php
        Arkhe::the_svg('close');
        esc_html_e('CLOSE', 'arkhe');
        ?>
      </button>
    </div>
  </div>
</div>