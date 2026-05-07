<?php

/**
 * Template Name: キッズクラス　テスト
 */
get_header();
while (have_posts()) :
  the_post();
  $the_id = get_the_ID();
?>
  <main id="main_content" class="page-kids <?php Arkhe::main_class(); ?>">
    <div class="l-container--wide bg-grad">
      <div class="p-class-top l-inner">
        <div class="p-class-top__head">
          <div class="p-class-top__inner">
            <h2 class="text-center">GYMNASTICE</h2>
            <p class="text-center">体操クラス</p>
            <ul class="p-class-top__list ">
              <li>●幼児45分・小学生60分</li>
              <li>●1クラス3～6人の少人数制</li>
            </ul>
          </div>
        </div>
        <p class="p-class-top--text">「魔法の体操教室」<br>
          「まるで魔法」 先生が一人一人にストレッチをかけていくので、どんどん身体が柔らかくなり可動域が広がり、同時にインナーマッスルを使う身体本来の機能を活かす事ができます。 全ての運動は、正しい身体作りから始まります。</p>
      </div>
    </div>

    <!-- menu -->
    <h3 class="c-title--lv3">MENU</h3>
    <div class="p-class-menu-kids-intro">
      <p class="p-class-menu-kids-intro__headline u-mb32 text-center">お子さまの年齢によって受けれるコースが異なります。</p>
      <figure class="p-class-menu-kids-intro__top-fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids/kids_menu.png.webp" alt="お子さまの年齢によって受けれるコースが異なります。" width="100%" height="auto"></figure>

      <div class="p-class-menu-kids-intro__grayBox l-inner-box bg-light-gray --box">
        <div>
          <h3 class="c-headline">魔法の体操ワッペン（進級）テスト制度</h3>
          <p class="p-class-menu-kids-intro__headline u-mb16">15～1級のワッペンテストをしています。 技術の向上はもちろんですが、保護者がお子様に促すのではなく、子ども達の自発性の発達を目的としてます。 特別なテスト日は設けず、クラスの中でテストをします。テストに特別な料金はかかりません。 Tシャツにワッペンが増えて、喜ぶ子ども達の姿を想像しています。</p>
        </div>
        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids/kids_menu002.jpg.webp" alt="お子さまの年齢によって受けれるコースが異なります。" width="100%" height="auto"></figure>
      </div>

      <p class="p-class-menu-kids-intro__headline l-introduction-box l-box text-center--pc u-fw14">
        毎レッスン、先生が一人一人の体を見ながら、ストレッチを補助するので柔軟性を養う事ができます。<br>ストレッチの後、ブリッジや倒立などの基礎、その後、マット運動の前転・後転・倒立前転・倒立ブリッジ・側転と高度な技に進んでいきます。
      </p>
    </div>


    <?php
    $menus = [
      ["kids003", "わんぱく体操クラス", "はじめての体操クラス 保育士の先生がサポートします。保護者の方も一緒なので初めてのお稽古も安心。 当教室の幼児クラスは母子分離でお子様だけの45分クラスになります。母子分離のクラスが少し不安なお子様はこのクラスで慣らしていきます。 まだ少し不安な時期、簡単なストレッチと遊びを取り入れながら、体操のまねっこチャレンジしてみませんか。", "<div>［火曜日］14:00～</div>", "対象：２歳・３歳"],
      // ["kids001", "幼児体操クラス", "遊びを取り入れ基礎的な運動能力を身に付けます。 幼児期から運動に親しませることは脳の発達から考えても、とても重要なことです。 楽しく、たくさん運動しよう!!", "<div>［火曜日］15:30－16:15</div><div>［木曜日］16:00－17:00</div> <div>［日曜日］12:00－12:45</div>", "対象：幼稚園年少（3歳半～）"],
      [
        "kids002", "キッズ体操クラス", "Akros南麻布『キッズ体操クラス』最大の魅力は、先生が一人一人にストレッチをかけていく事です。正しい場所、正しい方向に筋肉をしっかり伸ばすことで、どんどん身体が柔らかくなり、同時にインナーマッスルを使う、身体本来の機能を活かすことができます。基礎体力トレーニングにより、体幹・バランス感覚・インナーマッスルを鍛えていきます。そして転回・バック転・バック宙と高度な技に進んでいきます。",
        '<div>［月曜日］15:10～ 16:00～</div>
        <div>［火曜日］15:00～ 16:00～<span class="span__pc--kids002">&nbsp;17:00～(中級)&nbsp;&nbsp;18:00～</span></div>
        <div class="span__sp--kids002">17:00～(中級)  18:00～</div>

        <div>［木曜日］16:00～</div>
        <div>［土曜日］11:30～ 12:30～</div>
        <div>［日曜日］12:00～ 13:00～</div>',
        "対象：幼児・小学生"
      ],

      // ["kids004", "ストレッチクラス", "Akrosの最大の魅　力である、魔法のストレッチだけのクラスです。 先生がストレッチを一人一人に補助していくので、どんどん体が柔らかくなり、変わっていきます。 ・他のスポーツのパフォーマンスを上げる為 ・体操クラスに必要な柔軟性の強化の為 ・ケガの予防 ・肥満の予防…など ちょっぴり運動が苦手なお子さまも、運動のきっかけ作りにストレッチからなら始めやすいです。", "<div>［火曜日］17:30ー18:00 定員2　［木曜日］17:00－ ［日曜日］14:00－</div>", "対象：幼児・小学生・中学生"],

      ["kids005", "ダンス＆アクロバットクラス", "［ダンス］リズムトレーニングから振り付けまで基礎から練習していきます。［アクロバット］ダンスで使えたらカッコいいアクロバット（側転・ブリッジ・バック転など）基礎から習得します。 自分自身をイキイキと表現する。一つ一つが子ども達の自信に繋がります。", '<div class="--one">［金曜日］17:00～ 18:00～（発展クラス）</div>', "対象：小学生・中学生"],

      ["kids006", "学校体育クラス", "学校の体育や外で遊ぶことに苦手意識があるお子さまも、身体を動かすことを楽しむ事ができるクラスです。走ったり跳んだりぶら下がったり。様々な動きを体験する事で、自然と「色々な運動ができるようになっていた!」楽しさの中で、運動能力を身につける、『運動が好きになる』そんなクラスです。", "<div>［木曜日］17:00～</div>", "対象：幼児・小学生"]

    ];
    ?>
    <div class="p-class-menu">
      <?php foreach ($menus as $value) : ?>
        <div class="p-class-menu__wrap <?= $value[0]; ?>">
          <figure class="l-container--content-wide-sm p-class-menu__fig">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids/<?= $value[0]; ?>.jpg.webp" alt="<?= $value[1]; ?>" width="100%">
            <figcaption class="bg-grad u-mt-none p-class-menu__figc"><?= $value[1]; ?></figcaption>
            <div class="p-class-menu__cat">
              <p class="p-class-menu__cat--text">
                <?= $value[4]; ?>
              </p>
            </div>
          </figure>
          <p class="p-class-menu__text"><?= $value[2]; ?></p>

          <div class="p-class-menu__schedule bg-light-gray">
            <div class="p-class-menu__schedule-head">TIME SCHEDULE</div>
            <?= $value[3]; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- 料金について -->
    <div class="l-inner-wrap" id="price">
      <h2 class="c-title-bar">料金について</h2>
      <div class="p-class-price">

        <!-- 幼児 体操クラス -->
        <!-- <div class="bg-pale-yellow u-box-radius l-inner-box">
          <p class="p-class-price--title">幼児 体操クラス<span>1クラス：45分</span></p>
          <dl class="p-class-price__menu">
            <div>
              <dt>月4回</dt>
              <dd>12,000円</dd>
            </div>
            <div>
              <dt>月8回</dt>
              <dd>19,000円</dd>
            </div>
          </dl>
        </div> -->
        <div class="bg-pale-yellow u-box-radius l-inner-box">
          <p class="p-class-price--title">キッズ 体操クラス<span>1クラス：55分</span></p>
          <dl class="p-class-price__menu">
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
        </div>

      </div>

      <div class="notion text-center u-mb16">
        入会時に入会金10,000円、年会費（1年に1度）5,000円必要です。<br>
        ※振替制度あります　※組み合わせ自由(週２会員体操＆ダンスなど）<br>
        ※「兄弟割」兄弟姉妹で通われる場合、2人目、３人目は<br class="u-br_sm">月会費から2500円ずつ割引きます。
      </div>

      <!-- キャンペーン -->
      <!-- <div class="p-class-price__footer l-inner-box bg-pink text-center u-box-radius">
        【期間限定】<br>入会金10,000円 → 0円キャンペーン実施中!
      </div> -->
    </div>

    <div class="l-section">
      <h2 class="c-title-bar">タイムテーブル</h2>
      <figure class="p-class-timetable__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids/kids_timetable.png.webp" alt="タイムテーブル" width="800" height="auto"></figure>
    </div>

    <h2 class="c-title-bar">子どもの体操クラスにいただいた<br class="u-br_sm">実際の声</h2>
    <div class="p-class-voice__wrap u-box-radius bg-pale-yellow">
      <?php
      $voices = [
        ["幼児6歳の父", "・大手体操教室に通っていましたが、子どもが積極的に自分から動ける方ではないので、大人数の中で埋もれて、いつまで経っても上達しないと感じていました。Akrosは一人一人しっかり見てくれるので、積極的ではない性格の娘も、先生に話せたり、分からない事を聞けたり、自分から発信する事ができてすごく良いと感じています。"],

        [
          "小１の母", "・他の運動教室のほかに、Akrosに通い始めました。「Akrosだと先生がいつも見てくれて上手になれるから、Akrosだけにしたい」と娘が言ってます。"
        ],

        [
          "４歳の母", "・どんな習い事に行っても泣いてしまったり、入る事ができず困っていましたが、娘が初めて喜んで楽しくできる習い事に出会えました。楽しく参加できる環境に感謝いたします。"
        ],

        [
          "9歳の母", "・レッスンの動画を見て、思わず声が出てしまうくらい驚きと嬉しさがわいてきました。短期間でこんなにも色々とできるようになる事に感動です。"
        ],

        [
          "5歳の母", "・ストレッチは痛いけれど、体が柔らかくなってできることが増えたことがうれしく、家でストレッチを自らするようになりました。"
        ],

        [
          "8歳の母", "・前に車を停められるので、送迎がしやすい。７Km離れているけれど、車で送迎できるので親の負担が少なくて助かります。"
        ],

        [
          "10歳の母", "・娘がどんどん成長していて驚きました。バク転の練習をしていて驚きました。娘は本当に毎週楽しみにしています。"
        ],

        [
          "6歳の母", "・先生たちのアットホームな対応のおかげで、娘が楽しく体操できました。伸び代がたくさんあり、これからの成長が楽しみです。"
        ],

        [
          "４歳の母", "・親子で通っています。娘の様子を動画を送ってもらい見れるので成長する姿が見えてうれしいです。"
        ],

        [
          "9歳の母", "・息子の体の硬さは親の遺伝もあると諦めていましたが、あっという間に柔らかくなり、体型がすらっとスマートになったので、周りに驚かれます。"
        ],
        ["5歳、10歳の母", "・こういう教室が絶対必要です。出会えてよかったです。親子で通います。"]
      ];
      ?>
      <div class="l-inner-box">
        <?php foreach ($voices as $voice) : ?>
          <dl class="p-class-voice">
            <dt><?= $voice[0]; ?></dt>
            <dd><?= $voice[1]; ?></dd>
          </dl>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- 申込ボタン -->
    <?php get_template_part('/template-parts/other/apply_btn'); ?>

  </main>
<?php
endwhile;
get_footer();
