<?php

/**
 * フロントページテンプレート
 */
get_header(); ?>
<main id="main_content" class="<?php Arkhe::main_class(); ?>">
  <div class="<?php Arkhe::main_body_class(); ?>">
    <div>
      <!-- slider -->
      <section class="p-front-hero alignfull splide hero" aria-label="トップスライダー">
        <div class="splide__track">
          <div class="splide__list">

            <div class="splide__slide">
              <picture>
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl001_sp.jpg.webp" media="(max-width: 767px)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl001.jpg.webp" alt="" width="100%">
              </picture>
            </div>
            <div class="splide__slide">
              <picture>
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl003_sp.jpg.webp" media="(max-width: 767px)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl003.jpg.webp" alt="" width="100%">
              </picture>
            </div>
            <div class="splide__slide">
              <picture>
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl004_sp.jpg.webp" media="(max-width: 767px)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero/topsl004.jpg.webp" alt="" width="100%">
              </picture>
            </div>
          </div>


          <div class="p-front-hero__text-wrap">
            <figure class="p-front-hero__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-text.svg" alt="" width="100%" height="auto"></figure>
            <p class="p-front-hero__text text-center--pc">Akrosには各分野のプロフェッショナルな先生方が在籍しています。<br>
              先生達にも各々の特色がある様に、<br class="u-br_md">生徒様それぞれにも個性があり、各々へアジャストし、<br class="u-br_md">Akrosに来ていただける生徒様ひとりひとりの個性を引き出せる様に、<br class="u-br_md">生徒様の健康へのお手伝いが出来るように、<br>
              「自分らしく、Keep It Real.」<br>
              それがAkrosの基本理念です。</p>
          </div>
        </div>
        <ul class="splide__pagination"></ul>


        <div class="p-front-hero__line --right"></div>
        <div class="p-front-hero__line --left"></div>
        <div class="p-front-hero__trial-button">
          <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/?trial=true" target="_blank" class="p-front-hero__trial-link"><span>TRIAL<br>LESSON</span>まずは<br>体験レッスン</a>
        </div>

      </section>
    </div>

    <div class="p-front-main bg-gray l-container--wide">
      <figure class="p-front__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo-g.svg" alt="akros南麻布" width="100%" height="auto">
      </figure>

      <p class="p-text p-front-main__text text-center--pc">Akros南麻布では、高いスポーツ指導力を持つ講師が、一人一人にストレッチ指導等で体の柔軟性を高め、<br class="u-br_md">人間に本来備わる運動機能を最大限に引き出すお手伝いをします。<br>子どものクラスは、ストレッチと体操、大人のクラスもストレッチで体の柔軟性を高め、<br class="u-br_md">エクササイズで適度な筋力をつけ、動ける身体作りを提案しています。<br>
        医療機関とも提携しているので、身体のオールケアができる教室です。<br class="u-br_md">Akros南麻布は、親子で通いたい方やシニアの健康維持、年齢や目的に合わせて、楽しく身体作りをする教室です。</p>

      <ul class="p-front-mainBox__wrap">
        <li class="p-front-mainBox">
          <div class="p-front-mainBox__title bg-grad">KID’S CLASS<span>子供クラス</span></div>
          <div class="bg-white l-inner-box">
            <div class="l-flex">
              <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/intro_kids001.jpg.webp" alt=""></figure>
              <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/intro_kids002.jpg.webp" alt=""></figure>
            </div>
            <p class="p-front-mainBox__contentTitle color-green text-center">『魔法の体操教室』</p>
            <p class="p-front-mainBox__content">「まるで魔法」先生が一人一人にストレッチをかけていくので、どんどん身体が柔らかくなり、可動域が広がり、同時にインナーマッスルを使う身体本来の機能を活かすことができます。<br>全ての運動は、正しい身体作りから始まります。</p>
          </div>
          <a href="<?php echo esc_url(home_url('/')); ?>kids-class" class="c-button">
            もっと詳しく
          </a>
        </li>
        <li class="p-front-mainBox">
          <div class="p-front-mainBox__title bg-grad">ADULT CLASS<span>大人クラス</span></div>
          <div class="bg-white l-inner-box">
            <div class="l-flex">
              <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/intro_adult001.jpg.webp" alt=""></figure>
              <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/intro_adult002.jpg.webp" alt=""></figure>
            </div>
            <p class="p-front-mainBox__contentTitle color-green text-center">『プロが教えるフィットネス』</p>
            <p class="p-front-mainBox__content">専門知識と経験が豊富なプロのコーチが、年齢やレベルに関係なく、好きなスポーツを思いっきり楽しめる身体づくりをお手伝いします。しっかりヒアリングして不調の原因や改善方法も一緒に探ります。</p>
          </div>
          <a href="<?php echo esc_url(home_url('/')); ?>adult-class" class="c-button">
            もっと詳しく
          </a>
        </li>
      </ul>
    </div>

    <!-- INFORMATION -->
    <div class="l-container--wide bg-green l-section">
      <div class="p-front-info l-inner-wrap">
        <h2 class="c-title--lv2 --information">INFORMATION</h2>
        <div class="p-front-article l-inner-box bg-white u-box-radius">
          <article class="c-post__list">
            <?php
            $cat_posts = get_posts(array(
              'post_type' => 'post', // 投稿タイプ
              'category_name' => 'information', // カテゴリをスラッグで指定する場合
              'posts_per_page' => 5, // 表示件数
              'orderby' => 'date', // 表示順の基準
              'order' => 'DESC' // 昇順・降順
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

                <!-- ループはじめ -->
                <section class="c-post__item">
                  <!-- date -->
                  <div class="c-post__date">
                    <span class="year">
                      <?php the_time('Y.'); ?></span>
                    <span class="time">
                      <?php the_time('m.d'); ?></span>
                  </div>
                  <p><a href="<?php the_permalink(); ?>" class="c-post__title">
                      <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                        echo mb_substr($post->post_title, 0, 20) . '...';
                      } else {
                        the_title();
                      }
                      ?>
                    </a></p>
                </section>
                <!-- ループおわり -->

            <?php endforeach;
            endif;
            // ループ後のリセット処理
            wp_reset_postdata(); ?>
          </article>

          <a href="<?php echo esc_url(home_url('/')); ?>archives/category/information" class="p-front-article__more">more</a>
        </div>

      </div>
    </div>

    <!-- INSTRUCTOR -->
    <div class="alignfull p-front-instructor">
      <h2 class="c-title--lv2 --instructor">INSTRUCTOR</h2>
      <p class="p-front-instructor__text text-center--pc">アクロス南麻布は、それぞれに独自の才能と豊富な経験を持ったプロフェッショナルのコーチ陣が自慢。<br class="u-br_md">年齢やレベルに関係なく、あなたの目標やニーズに合わせてトレーニングを提供します。</p>

      <!-- インストラクター　slider -->

      <section class="splide p-top-slider" aria-label="インストラクター">
        <div class="splide__track">
          <div class="splide__list">
            <div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/slide01.png.webp" alt=""></div>
            <div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/slide02.png.webp" alt=""></div>
            <div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/slide03.png.webp" alt=""></div>
            <div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/slide04.png.webp" alt=""></div>
            <div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/slide05.png.webp" alt=""></div>
          </div>
        </div>
      </section>

      <a href="<?php echo esc_url(home_url('/')); ?>instructor" class="c-button">もっと詳しく</a>
    </div>

    <div id="reserve" class="p-front-reserve l-container--wide bg-light-gray">
      <div class="p-front-reserve__box l-inner-box bg-white">
        <h2 class="c-title--lv2 --reserve">RESERVE</h2>
        <!-- <p class="text-center u-mb32">ご予約はこちらから<span class="u-inline">予約したい日付けをクリックしてお進みください。</span></p> -->
        <!-- 予約 -->
         <p class="text-center u-mb32">
            <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/" target="_blank" class="c-button">
             ご予約はこちらから
            </a>
         </p>
        <!-- <div class="c-booking-package__wrap">
          <iframe type="text/html" frameborder="0" width="100%" height="1000px" src="//airrsv.net/akrosminamiazabu/calendar/embed/"></iframe>
        </div> -->

        <!-- <div class="c-title-bar">キャンセルポリシー</div>
        <p class="u-lh2">ご予約のキャンセルや変更は営業時間内（21時まで）に店舗へご予約の際のメール、メッセージ、または電話でご連絡ください。<br>
          前々日（21時）までのキャンセルは料金はかかりません。<br>
          前日・当日キャンセルともに、レッスン料の100%をいただきます。</p> -->
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
