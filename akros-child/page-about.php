<?php
get_header();
while (have_posts()) :
  the_post();
  $the_id = get_the_ID();
?>

  <main id="main_content" class="page-about <?php Arkhe::main_class(); ?>">
    <article <?php post_class(Arkhe::get_main_body_class()); ?> data-postid="<?php echo esc_attr($the_id); ?>">
      <?php
      do_action('arkhe_start_page_main', $the_id);
      Arkhe::get_part('page');
      do_action('arkhe_end_page_main', $the_id);
      ?>
    </article>

    <p class="l-introduction-box --top p-text-pageTop text-center--pc fz-normal">運動好きの子がどんどん増えてほしい。この想いからAkros南麻布が誕生しました。たくさんの子ども達に、<br class="u-br_md">体本来の正しい使い方を学ばせ、これから出会うスポーツなどに活かしてほしい。<br>大人も子どももケガに悩まされることなく、最大限の力を出せる身体作りができる教室として2022年にオープンしました。</p>

    <div class=" l-container--wide bg-pale-gray ">
      <div class="p-about__wrap l-container">
        <div class="p-about__content p-about--first bg-white l-inner-box">
          <dl class="p-about">
            <dt class="p-about__title">ABOUT</dt>
            <dd>
              <ul class="p-about__list">
                <li>名称</li>
                <li>Akros南麻布</li>
                <li>住所</li>
                <li>〒106-0047<br>東京都港区南麻布4-15-9</li>
                <li>営業時間</li>
                <li>9:00～22:00</li>
                <li>電話</li>
                <li>03-4400-8711</li>
                <li>定休日</li>
                <li>なし</li>
                <li>広さ</li>
                <li>40㎡</li>
                <li>代表</li>
                <li>鈴井 まどか ［<a href="<?php echo esc_url(home_url('/')); ?>/instructor/#suzui">プロフィール</a>］</li>
              </ul>
            </dd>
            <dd class="p-about__button-wrap">
              <a href="<?php echo esc_url(home_url('/')); ?>/about#access" class="p-about__button c-button__grad">アクセス</a>
              <a href="<?php echo esc_url(home_url('/')); ?>/contact" class="p-about__button c-button__grad">お問い合わせ</a>
            </dd>
          </dl>
        </div>
        <?php
        $about_photos = [
          ["001", ""],
          ["002", ""],
          ["003", ""],
          ["004", ""],
          ["005", "更衣室・シャワー室"],
          ["006", "安心できる環境作りの為、低濃度オゾン水素発生装置を設置しています。"],
          ["007", ""],
        ];
        foreach ($about_photos as $value) : ?>
          <figure class="p-about__content p-about__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/about<?= $value[0]; ?>.jpg.webp" alt="Akrosの様子" width="100%" height="auto">
            <figcaption class="text-left"><?= $value[1]; ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </div><!-- /.l-container--gray -->

    <!-- アクセス -->
    <h2 id="access" class="c-title--lv2 --access">ACCESS</h2>
    <p class="u-fs14 text-center">明治通り沿い、首都高2号<br class="u-br_sm">目黒線高架下にあります。</p>

    <div class="c-button__access--wrap  p-about-access">
      <div class="c-button__access">
        <figure class="c-button__access--icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-train.svg" width="100%" height="auto" alt="電車でお越しの方"></figure>
        <div>
          <p class="c-button__access--title">電車でお越しの方</p>
          <p class="c-button__access--text">日比谷線広尾駅より 徒歩8分<br class="u-br_sm">南北線・三田線白金高輪駅 出口④より 徒歩12分</p>
        </div>
      </div>
      <div class="c-button__access">
        <figure class="c-button__access--icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/icon-bus.svg" width="100%" height="auto" alt="バスでお越しの方"></figure>
        <div>
          <p class="c-button__access--title">バスでお越しの方</p>
          <p class="c-button__access--text">品川駅 高輪口発97系統 新宿駅西口行き<br class="u-br_sm">「光林寺前」バス停 下車0分</p>
        </div>
      </div>
    </div>

    <!-- MAP image -->
    <div class="p-about-map">
      <figure class="p-about-map__pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/about_place.jpg.webp" alt="akros南麻布外観" width="100%" height="auto"></figure>
      <figure class="p-about-map__access"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/about_map.jpg.webp" alt="akros南麻布外観" width="100%" height="auto"></figure>
    </div>

    <div class="p-about-gmap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.236670314069!2d139.72721719999998!3d35.646540200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b09496a9369%3A0x3cd4194d1f979ebf!2z44CSMTA2LTAwNDcg5p2x5Lqs6YO95riv5Yy65Y2X6bq75biD77yU5LiB55uu77yR77yV4oiS77yZ!5e0!3m2!1sja!2sjp!4v1687081897244!5m2!1sja!2sjp" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- 料金について -->
    <h2 class="c-title-bar">料金について</h2>

    <!-- <div class="p-about-price">
      <div class="p-class-price bg-pale-yellow u-box-radius">
        <p class="p-class-price--title">幼児 体操クラス<span>1クラス：45分</span></p>
        <dl class="p-about-price__menu p-class-price__menu --first">
          <div>
            <dt>月4回</dt>
            <dd>12,000円</dd>
          </div>
          <div>
            <dt>月8回</dt>
            <dd>19,000円</dd>
          </div>
        </dl>
        <dl class="p-about-price__menu p-class-price__menu">
          <div>
            <dt>入会金</dt>
            <dd>10,000円</dd>
          </div>
          <div>
            <dt>年会費</dt>
            <dd>5,000円</dd>
          </div>
        </dl>
      </div>
      <div class="p-class-price bg-pale-yellow u-box-radius">
        <p class="p-class-price--title">小学生 体操クラス<span>1クラス：60分</span></p>
        <dl class="p-about-price__menu p-class-price__menu --first">
          <div>
            <dt>月4回</dt>
            <dd>15,000円</dd>
          </div>
          <div>
            <dt>月8回</dt>
            <dd>25,000円</dd>
          </div>
          <div>
            <dt>月24回</dt>
            <dd>35,000円</dd>
          </div>
        </dl>
        <dl class="p-about-price__menu p-class-price__menu ">
          <div>
            <dt>入会金</dt>
            <dd>10,000円</dd>
          </div>
          <div>
            <dt>年会費</dt>
            <dd>5,000円</dd>
          </div>
        </dl>
      </div>
      <div class="p-class-price bg-pale-yellow u-box-radius">
        <p class="p-class-price--title">大人レッスン<span>1クラス：50分～</span></p>
        <dl class="p-about-price__menu p-class-price__menu --first">
          <div>
            <dt>ストレッチ</dt>
            <dd>1回5,000円~</dd>
          </div>
          <p class="text-center">会員ではない人（ビジター）は<br>1回7,150円</p>
        </dl>
        <dl class="p-about-price__menu p-class-price__menu">
          <div>
            <dt>月会費</dt>
            <dd>5,000円</dd>
          </div>
          <p class="notion"><span>マンツーマンで先生にストレッチを受けたい場合は、パーソナル指導料一回<span class="u-inline">11,000円</span>をお支払いいただきます。</span></p>
        </dl>
      </div>
    </div> -->

    <ul class="l-inner p-about-priceLink">
      <li class="p-about-priceLink__list"><a href="<?php echo esc_url(home_url('/')); ?>kids#price">子供クラスの<br class="u-br_md">料金はこちら</a></li>
      <li class="p-about-priceLink__list"><a href="<?php echo esc_url(home_url('/')); ?>adult#price">大人クラスの<br class="u-br_md">料金はこちら</a></li>
      <!-- <li class="p-about-priceLink__list"><a href="<?php echo esc_url(home_url('/')); ?>adult#price2">鍼灸マッサージ院の<br class="u-br_md">料金はこちら</a></li> -->
    </ul>
  </main>
<?php
endwhile;
get_footer();
