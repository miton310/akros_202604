<?php

/**
 * 固定ページテンプレート
 */
get_header();
while (have_posts()) :
  the_post();
  $the_id = get_the_ID();
?>
  <main id="main_content" class="<?php Arkhe::main_class(); ?>">

    <p class="l-introduction-box --top text-center--pc fz-normal">当教室は入会したい人に向けて、有料で体験レッスンをおこなっています。<br>Akros南麻布の充実したサービスと魅力をぜひ体験してください。</p>

    <div class="l-container--wide bg-pale-gray">
      <div class="p-trial-top l-inner-box">
        <figure class="p-trial-top__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trial/trial001.jpg.webp" alt="入会体験イメージ" width="100%" height="auto">
          <figcaption class="p-text-small text-left text-center--pc">体験レッスンは実際のレッスンと同じ内容、時間で行います。<br>お客様の気になる箇所や柔軟性をお身体を見ながらチェックします。</figcaption>
        </figure>
      </div>
    </div>

    <h2 class="c-title-bar">入会までの流れ</h2>
    <div class="p-flow">
      <?php
      $flows = [
        ["1", "トライアル予約を申し込む", "ページ下部の専用フォームまたはお電話にてご希望のクラスの体験レッスンをお申し込み下さい。Instagramのダイレクトメールからでも大丈夫です!", "001"],
        ["2", "ご来館", "スタジオにお越し頂きます。<br>その際、簡単な説明や準備などを行います。", "002"],
        ["3", "体験レッスンに参加", "先生と一緒にストレッチを全部やり通します。<br>次に、マット運動を体験します。", "003"],
        ["4", "ご入会の検討", "入会をご希望の方は入会手続きをさせて頂きます。!", "004"]
      ];
      ?>
      <?php foreach ($flows as $value) : ?>
        <div class="p-flow__wrap">
          <div class="step<?= $value[0]; ?> p-flow__box bg-pale-gray">
            <dl class="p-flow__def">
              <dt class="p-flow__title"><?= $value[1]; ?></dt>
              <dd class="p-flow__desc"><?= $value[2]; ?></dd>
            </dl>

            <figure class="p-flow__image"><img src=" <?php echo get_stylesheet_directory_uri(); ?>/images/trial/flow<?= $value[3]; ?>.jpg.webp" alt="入会体験イメージ">
            </figure>
          </div>
        </div>
      <?php endforeach; ?>

    </div>


    <p class="c-button-apply__text c-button__text text-center p-color-paleGreen">まずはお気軽に<br class="u-br_sm">トライアル予約をお申し込みください</p>

    <!-- 予約フォーム -->
    <div id="reserve" class="p-front-reserve l-container--wide bg-light-gray">
      <div class="p-front-reserve__box l-inner-box bg-white">
        <h2 class="c-title--lv2 --reserve">RESERVE</h2>
        <!-- <p class="text-center u-mb32">カレンダーから予約できます。<span class="u-inline">予約したい日付けを</span><span class="u-inline">クリックしてお進みください。</span></p> -->

        <!-- 予約 -->
        <!-- <p class="text-center u-mb32">
          <a href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/2/?trial=true" target="_blank" class="c-button">
             トライアル予約を申し込む
          </a>
        </p> -->

        <iframe id="hacomono-fixed-widget-w0001" src="https://akrosminamiazabu.hacomono.jp/widgets/1?isShowProgramName=true&studioId=1"></iframe>
        <script src="https://akrosminamiazabu.hacomono.jp/js/widget.js"></script>

        <!-- 旧 -->
        <!-- <div class="c-booking-package__wrap">
          <iframe type="text/html" frameborder="0" width="100%" height="1000px" src="//airrsv.net/akrosminamiazabu/calendar/embed/"></iframe>
        </div> -->

        <!-- <div class="c-title-bar">キャンセルポリシー</div>
        <p class="u-lh2">ご予約のキャンセルや変更は営業時間内（21時まで）に店舗へご予約の際のメール、メッセージ、または電話でご連絡ください。<br>
          前々日（21時）までのキャンセルは料金はかかりません。<br>
          前日・当日キャンセルともに、レッスン料の100%をいただきます。</p> -->
      </div>
    </div>
  </main>
<?php
endwhile;
get_footer();
