<?php

// ウィジェットの使用状況
$is_active_footer1 = is_active_sidebar('footer-1');
$is_active_footer2 = is_active_sidebar('footer-2');
?>
<footer id="footer" class="l-footer">
  <div class="l-footer__inner">

    <h2 class="c-title--lv2 --ig">INSTAGRAM</h2>
    <p class="l-introduction-box text-center">アクロス南麻布の日常やお知らせなどを更新中！<br class="u-br_sm">ぜひフォローしてください！</p>

    <div class="l-footer__ig">
      <!-- SnapWidget -->
      <iframe src="https://snapwidget.com/embed/1038022" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;"></iframe>

      <a href="https://www.instagram.com/akrosminamiazabu/" target="_blank" rel="noreferrer noopener" class="c-button">FOLLOW US！</a>
    </div>

    <?php do_action('arkhe_start_footer_inner'); ?>
    <?php if ($is_active_footer1 || $is_active_footer2) : ?>
      <div class="l-footer__widgets<?php if ($is_active_footer1 && $is_active_footer2) echo ' has-columns'; ?>">
        <div class="l-container">
          <?php if ($is_active_footer1) : ?>
            <div class="w-footer -widget1">
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
          <?php if ($is_active_footer2) : ?>
            <div class="w-footer -widget2">
              <?php dynamic_sidebar('footer-2'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="l-footer__foot">
      <div class="l-footer__btnWrap">
        <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/" class="c-button" target="_blank">WEB予約</a>
        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="c-button">お問い合わせ</a>
      </div>

      <div class="l-container">
        <div class="l-footer__logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo.svg" width="100%" height="auto" alt="アクロス南麻布">
        </div>
        <div class="l-footer-info">
          <ul class="l-footer-info__list">
            <li class="l-footer-info__name">アクロス南麻布</li>
            <li class="l-footer-info__address">&#12320;106-0047　
              東京都港区南麻布4-15-9</li>
            <li class="l-footer-info__address">日比谷線広尾駅より 徒歩8分<a href="<?php echo esc_url(home_url('/')); ?>about#access" class="l-footer-info__link">MAP</a></li>
            <li class="l-footer-info__number"><a href="tel:0344008711" class="u-link-none">03-4400-8711</a></li>
          </ul>
        </div>
        <?php
        do_action('arkhe_start_footer_foot_content');
        wp_nav_menu(
          array(
            'container'       => false,
            'fallback_cb'     => '',
            'theme_location'  => 'footer_menu',
            'items_wrap'      => '<ul class="l-footer__nav u-flex--c">%3$s</ul>',
            'link_before'     => '',
            'link_after'      => '',
          )
        );
        ?>
      </div>

      <!-- copyright -->
      <?php do_action('arkhe_before_copyright'); ?>
      <p class="c-copyright">
        <?php echo wp_kses(Arkhe::get_setting('copyright'), Arkhe::$allowed_text_html); ?>
      </p>
      <?php do_action('arkhe_after_copyright'); ?>

      <!-- fixed button -->
      <ul class="c-fixedButton">
        <li class="c-fixedButton__item"><a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/" target="_blank">予約はこちら</a></li>
        <!-- <li class="c-fixedButton__item"><a href="<?php echo esc_url(home_url('/')); ?>trial">体験レッスン</a></li> -->
        <li class="c-fixedButton__item">
          <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/?trial=true" target="_blank">体験レッスン</a>
        </li>
      </ul>
      <div class="c-fixedButton--pc" style="top: 140px;">
        <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/" class="c-fixedButton--pc-link" target="_blank">予約はこちら</a>
      </div>

    </div>
    <?php do_action('arkhe_end_footer_inner'); ?>
  </div>
</footer>

<?php
if (is_front_page() || is_home()) : ?>
  <!-- // フロントページの場合に表示するコンテンツ -->
  <!-- slider -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/splide.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/splide-extension-auto-scroll.min.js"></script>
  <script>
    const optionsHero = {
      gap: 0,
      padding: 0,
      autoplay: true,
      interval: 3000,
      speed: 1000,
      pauseOnFocus: false,
      type: 'loop',
      arrows: false,
      // drag: 'free',
      pagination: true,

    }

    const hero = new Splide('.hero', optionsHero);
    hero.on('pagination:mounted', function(data) {
      // ULエレメントにクラスを追加できます
      data.list.classList.add('splide__pagination--custom');
    });
    hero.mount(); //拡張機能をセット
  </script>

  <!-- インストラクター -->
  <script>
    const options = {
      mediaQuery: 'min',
      fixedWidth: '24rem',
      gap: 0,
      padding: 0,
      type: 'loop',
      arrows: false,
      drag: 'free',
      flickPower: 300,
      pagination: false,
      fixedWidth: '149px',
      autoScroll: {
        speed: 0.5,
        pauseOnHover: false,
        pauseOnFocus: false,
      },
      breakpoints: {
        850: {
          fixedWidth: '298px',
        }
      },
    }

    const mySplide = new Splide('.p-top-slider', options);
    mySplide.mount(window.splide.Extensions); //拡張機能をセットする
  </script>
<?php endif; ?>