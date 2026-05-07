<?php

/**
 * 固定ページテンプレート
 */
get_header();
while (have_posts()) :
  the_post();
  $the_id = get_the_ID();
?>
  <main id="main_content" class="page-adult <?php Arkhe::main_class(); ?>">
    <div class="l-container--wide bg-grad">
      <div class="p-class-top l-inner">
        <div class="p-class-top__head">
          <div class="p-class-top__inner">
            <h2 class="text-center">STRETCH</h2>
            <p class="text-center u-nowrap">大人のストレッチ・体操</p>
            <ul class="p-class-top__list ">
              <li>●2名1時間</li>
              <li>●3名1.5時間 </li>
            </ul>
          </div>
        </div>
        <p class="p-class-top--text">「まるで魔法」<br>先生が一人一人にストレッチをかけていくので、どんどん身体が柔らかくなり可動域が広がり身体本来の機能を活かす事ができます。 『健康寿命』を伸ばそう。いつまでも動ける身体に!! ３・４人までのグループレッスンですが、ストレッチは一人ずつ、先生がかけていきます。1人1人のお体を見ながら、筋肉をほぐしながらストレッチしていきます。</p>
      </div>
    </div>

    <!-- menu -->
    <h3 class="c-title--lv3">MENU</h3>
    <div class="p-class-menu">
      <div class="p-class-menu__wrap">
        <figure class="l-container--content-wide-sm p-class-menu__fig">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult002.jpg.webp" alt="大人のストレッチ" width="100%">
          <figcaption class="bg-grad u-mt-none p-class-menu__figc">大人のストレッチ</figcaption>
        </figure>
        <p class="p-class-menu__text">自分ではなかなか伸ばす事ができない筋肉もしっかり伸ばしていき、関節の可動域を広げていきます。 ・体を柔らかくしたいが、自分ではどうやってストレッチしてよいか分からない方 ・他のスポーツのパフォーマンスを上げる為 ・ケガの予防 ・肥満の予防…など、体が硬いのでストレッチクラスを受けるのが不安な方こそぜひ、体が硬いからこそ受けていただきたいです。</p>
        <div class="p-class-menu__schedule bg-light-gray --third">
          <div class="p-class-menu__schedule-head">TIME SCHEDULE</div>
          <div>［月曜日］10:00-14:00</div>
          <div>［火曜日］19:00-20:00</div>
          <div>［水曜日］10:00-14:00　19:30-21:00</div>
          <div>［木曜日］19:30-21:00</div>
          <div>［金曜日］10:00-13:30</div>
          <div>［日曜日］10:00-11:30(不定期)14:00-15:00</div>
        </div>
      </div>

      <!-- シニアのストレッチ -->
      <div class="p-class-menu__wrap">
        <figure class="l-container--content-wide-sm p-class-menu__fig">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult003.jpg.webp" alt="シニアのストレッチ" width="100%">
          <figcaption class="bg-grad u-mt-none p-class-menu__figc">シニアのストレッチ</figcaption>
        </figure>
        <p class="p-class-menu__text">『何かを始めるのに年齢は関係ない いくつになっても始められる』 70代の方が「同世代が毎週病院に通うなか、私は週一回ストレッチに通いたい」と来てくださいました。 実際に通ってられる方の声 ・五十肩が治った ・膝の痛みがなくなった ・180度開脚したいなど、新しい目標ができた ･冷えが改善され体の調子が良くなった ・可動域を上げてゴルフが上手になりたい ・いつまでも自分の足で歩きたい 一人一人のお身体を見ながら無理なくストレッチしていきます。</p>
        <div class="p-class-menu__schedule bg-light-gray --third">
          <div class="p-class-menu__schedule-head">TIME SCHEDULE</div>
          <div>［月曜日］10:00-14:00</div>
          <div>［火曜日］19:00-20:00</div>
          <div>［水曜日］10:00-14:00　19:30-21:00</div>
          <div>［木曜日］19:30-21:00</div>
          <div>［金曜日］10:00-13:30</div>
          <div>［日曜日］10:00-11:30(不定期)14:00-15:00</div>
        </div>
      </div>

      <!-- ママのストレッチ -->
      <div class="p-class-menu__wrap">
        <figure class="l-container--content-wide-sm p-class-menu__fig">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult004.jpg.webp" alt="ママのストレッチ" width="100%">
          <figcaption class="bg-grad u-mt-none p-class-menu__figc">ママのストレッチ</figcaption>
        </figure>
        <p class="p-class-menu__text">～Baby 子連れでも大丈夫～ 授乳や抱っこで、首や肩が痛い、腕がパンパン、ケアしたいけれど、子どもを預けるのも大変だし不安。産後の体型を変えたい、スタイルをよくしたい。 そんなママに、子連れOKで、お母さんの身体のケアをします。しっかりほぐして、筋肉を伸ばします。 国家資格を持つ「小児作業療法士」にお子さまの発達や疑問や悩みの相談もできます。 その時期にこそ、お子様が一番必要としている事は何なのか？そんなグループセッションもやっていますので、ぜひご相談下さい。</p>
        <div class="p-class-menu__schedule bg-light-gray">
          <div class="p-class-menu__schedule-head">TIME SCHEDULE</div>
          <div>［月曜日］11:00－</div>
        </div>
      </div>

      <!-- ストレッチ＆ボディーケア -->
      <div class="p-class-menu__wrap">
        <figure class="l-container--content-wide-sm p-class-menu__fig">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult005.jpg.webp" alt="ストレッチ＆ボディーケア" width="100%">
          <figcaption class="bg-grad u-mt-none p-class-menu__figc">ストレッチ＆ボディーケア</figcaption>
        </figure>
        <p class="p-class-menu__text">ガチガチな身体の方に、可動域を上げるためにほぐしを入れたストレッチのコースです。中高年の方に特に人気です。 お仕事・家事・育児、体がガチガチな方にしっかり体をケアするコースです。 リンパケアリストが一人一人の体を見ながら、リンパを流し、しっかりほぐします。</p>
        <div class="p-class-menu__schedule bg-light-gray">
          <div class="p-class-menu__schedule-head">TIME SCHEDULE</div>
          <div>［月曜日］10:00 － 14:00</div>
          <div>［火曜日］19:00 － 20:00</div>
          <div>［水曜日］10:00 － 14:00</div>
          <div>［金曜日］10:00 － 13:00</div>
          <div>［日曜日］14:00 － 15:00</div>
        </div>
      </div>
    </div>

    <!-- menuここまで -->

    <!-- エクササイズクラス -->
    <div class="l-container--wide bg-grad">
      <div class="p-class-top l-inner">
        <div class="p-class-top__head">
          <div class="p-class-top__inner">
            <h2 class="text-center">EXERCISE</h2>
            <p class="text-center">エクササイズ・運動</p>
            <ul class="p-class-top__list ">
              <li>●1クラス60分</li>
            </ul>
          </div>
        </div>
        <p class="p-class-top--text">Akros南麻布の魅力は、様々な運動ができる事!!各分野のエキスパートがサポートします!!</p>
      </div>
    </div>


    <!-- menu -->
    <h3 class="c-title--lv3">MENU</h3>
    <?php
    $menus = [
      ["adult006", "キックボクササイズ", "現役のK-1ファイターによる指導。キックボクシングのミット打ちという練習を実際にグローブをはめて行うクラスです。しっかり基本のフォーム習得し、気持ちよくミットにパンチやキックを打ち込んでいきます。 初心者から上級者まで、上手になりたい方、ストレス解消やダイエットに。", "<div>［月曜日］19:00－20:00</div>", "対象：大人、シニア"],

      ["adult007", "KICKOUT", "KICK OUTはムエタイやキックボクシング、その他格闘技の動きを取り入れ音楽に合わせて行う格闘技エクササイズです。 ゆりっぺ先生のとても楽しいレッスンなので、 運動がちょっぴり苦手な方も、 運動不足解消させたい方、 動いてストレス発散させたい方、 かっこいいフォームを学びたい方へ。", "<div>［金曜日］13:00－14:00</div>", "対象：大人、シニア"],

      ["adult008", "アシュタンガストレッチ入門クラス", "８２のポーズが作り出す美しい体と心生きるバランス、あのマドンナや、スティングなど、有名アーティストも、その実践者として、世界的に有名なシークエンス。 星の数ほどあるヨガの中で流れるような動きが特徴のアシュタンガ、美しい身体、シンプルな生活、さらにしなやかな心までもそんな魅了たっぷりのアシュタンガヨガを色々な角度から学んで実践してみましょう。 みるみる変わる自分の身体と心に感動します。", "<div>［土曜日］10:00－11:00</div>", "対象：大人、シニア"],

      ["adult009", "ピラティス～入門～", "初心者でも大丈夫です。 目指すはしなやかな心と身体、 しなやかに伸びる筋肉へ、さらに身体と心が密接に繋がっているその大切さにきづかせてくれる。 20世紀初頭、1人のドイツ人ジョセフピラティスさんによって考案された合理的で情熱的なボディーワーク。ダイエット・機能回復・けが予防・運動能力向上・現代のフィットネスの道しるべとなり、その清潔な精神は光のように降りそそぐ。 ハリウッドセレブや世界中でも愛されている、欲しいという理想のボディーへと導いてくれます。", "<div>［土曜日］10:00－11:00</div>", "対象：大人、シニア"],

      ["adult010", "大人の体操クラス", "基礎作りをしっかりやります!技をするのに必要な柔軟性や筋力、リズム等に焦点をあて、丁寧に進めていきます。 キレイでリズミカルな側転など目指したい方は一度体験してみて下さい。 ※ただ技ができれば良いという考え方ではないので、バク転だけやりたいという方には不向きな体操です。", "<div>［水曜日］18:00－19:00</div>", "対象：大人、シニア"],

    ];
    ?>
    <div class="p-class-menu">
      <?php foreach ($menus as $value) : ?>
        <div class="p-class-menu__wrap">
          <figure class="l-container--content-wide-sm p-class-menu__fig">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/<?= $value[0]; ?>.jpg.webp" alt="<?= $value[1]; ?>" width="100%">
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
    <!-- menuここまで -->


    <!-- 料金 -->
    <div class="l-section" id="price">
      <h2 class="c-title-bar">料金のご案内</h2>
      <div class="p-class-price">
        <div class="bg-pale-yellow u-box-radius l-inner-box --member">
          <h4 class="p-class-price--title">■会員価格</h4>
          <p class="bg-white">月会費 3,500円</p>
          <dl class="p-class-price__menu">
            <?php
            $prices = [
              ["ストレッチ", "5,000円"],
              ["ストレッチ＆ボディケア", "7,000円"],
              ["キックボクササイズ", "2,500円"],
              ["KICK OUT", "2,500円"],
              ["アシュタンガストレッチ", '5,500円<span class="u-inline">（4回20,000円）</span>'],
              ["ピラティス", "5,500円（4回20,000円）"],
            ]; ?>
            <?php foreach ($prices as $key) : ?>
              <div>
                <dt><?= $key[0]; ?></dt>
                <dd><?= $key[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
          <p class="u-mb12 p-class-price--text p-text-bold-20 p-color-paleGreen">月3,500円お支払いいただくと<br>ストレッチを1回5,000円で受ける事ができます。</p>

          <div class="bg-white l-inner stretch-box">
            <div class="l-flex stretch">
              月3回ストレッチを受ける場合<br>3,500円＋（5,000円×3）=18,500円
              <p class="text-center">1回あたり<br>税込6,170円</p>
            </div>
            <div class="l-flex stretch">
              月4回ストレッチを受ける場合<br>3,500円＋（5,000円×4）=23,500円
              <p class="text-center">1回あたり<br>税込5,880円</p>
            </div>
          </div>

          <div class="bg-pale-green text-center u-pd16">月3回以上ストレッチを<br class="u-br_sm">受ける方はお得です!!</div>
        </div>

        <div class="bg-pale-yellow u-box-radius l-inner-box --non-member">
          <h4 class="p-class-price--title">■会員以外<span>※回数券は3ヶ月間有効です。</span></h4>
          <div class="non-member-price bg-white l-inner">
            <div class="">
              <p>回数券4回券28,600円（税込）</p>
              <span>《1回6,500円(税込7,150円)》</span>
            </div>
            <div class="">
              <p>回数券8回券52,800円（税込）</p>
              <span>《1回6,000円(税込6,600円)》</span>
            </div>
          </div>
          <dl class="p-class-price__menu u-mb0">
            <?php
            $prices = [
              ["ストレッチ", "回数券1回分"],
              ["ストレッチ&ボディケア", '回数券1回分<span class="u-inline">+2,000円</span>'],
              ["キックボクササイズ", "（2回）回数券1回分"],
              ["KICK OUT", "（2回）回数券1回分"],
              ["アシュタンガストレッチ", '5,500円<span class="u-inline">（4回20,000円）</span>'],
              ["ピラティス", "5,500円（4回20,000円）"],
            ]; ?>
            <?php foreach ($prices as $key) : ?>
              <div>
                <dt><?= $key[0]; ?></dt>
                <dd><?= $key[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </div>
    </div>


    <!-- 鍼灸 -->
    <div class="l-container--wide bg-grad">
      <div class="p-class-top l-inner --hari">
        <div class="p-class-top__head">
          <h2 class="text-center">MASSAGE & ACUPUNCTURE</h2>
          <p class="text-center">マッサージ鍼治療</p>
        </div>
        <p class="text-center p-class-top--text">鍼灸マッサージ院<br> TCF 当院は港区高輪に開院して<br class="u-br_sm">今年で丸10年を迎えます。<br>運動後のケア〜日常生活での<br class="u-br_sm">疲労への治療を、今回アクロス南麻布と<br class="u-br_sm">提携し行って行きます。</p>
      </div>
    </div>

    <div class="p-class-adult-top bg-light-gray">
      <div class="l-inner-box">
        <div class="p-class-adult-top__head">
          <p class=" p-class-adult-top__headline text-center p-text-bold-20 p-color-lightGreen">当教室は<br class="u-br_sm"> 鍼灸マッサージ院TCFと<br>パートナーシップを結んでいます</p>
          <p class="p-class-adult-top__text">ストレッチをする事で骨盤が開き、骨盤の中の内臓が元気になり、働きが上がります。</p>
        </div>
        <figure class="p-class-adult-top__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult001.jpg.webp" alt="当教室は整骨院BSO/進級マッサージ院TCFとパートナーシップを結んでいます" width="100%" height="auto"></figure>
      </div>
    </div>

    <div class="p-class-hari">
      <p class="p-class-hari--text p-text-14">普段使えてない筋肉や使い過ぎて硬くなった筋肉などに対しマッサージや鍼での治療を行う事で、筋肉を緩めて関節の動きを広げたり、筋肉の疲労の回復を早めたりする事でストレッチの効果をより高める事が出来ます。<br><br>
        お一人お一人にあった治療やケアをストレッチの先生方とも協力しご提案・ご提供させて頂きます。<br><br>
        スタッフはプロスポーツ選手の治療も担当しており筋肉や関節への知識や治療経験が豊富の為、筋肉や関節への疑問〜普段のセルフケアまで幅広くご相談頂ければと思います。</p>

      <div class="l-flex p-class-hari--fig">
        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult011.jpg.webp" alt="マッサージ鍼治療イメージ" width="100%" height="auto"></figure>
        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/adult012.jpg.webp" alt="マッサージ鍼治療イメージ" width="100%" height="auto"></figure>
      </div>
    </div>

    <!-- time -->
    <div class="u-mb48">
      <div class="c-title-bar">時間が変更になりました</div>
      <p class="p-text-14">ストレッチの後にマッサージ・鍼を受けたいというご要望が多いので、日時のご要望を承ります。<br>
        ［ 月・火・水・木・金・土 終日 ］ 要相談<br>
        ［ 日・祝 ］ 要相談</p>
    </div>

    <!-- 料金 -->
    <div class="l-section" id="price2">
      <h2 class="c-title-bar">料金のご案内</h2>
      <div class="p-class-price">
        <div class="bg-pale-yellow u-box-radius l-inner-box --member">
          <h4 class="p-class-price--title">■会員価格</h4>
          <p class="bg-white">月会費 3,500円</p>
          <dl class="p-class-price__menu u-mb0">
            <?php
            $prices = [
              ["マッサージのみ30分", "4,400円（税込）"],
              ["鍼治療のみ30分", "4,400円（税込）"],
              ["マッサージ+鍼治療", "6,600円（税込）"],
              ["美容鍼+フェイスマッサージ", "6,600円（税込）"],
            ]; ?>
            <?php foreach ($prices as $key) : ?>
              <div>
                <dt><?= $key[0]; ?></dt>
                <dd><?= $key[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>

        <div class="bg-pale-yellow u-box-radius l-inner-box --non-member">
          <h4 class="p-class-price--title">■会員以外<span>※回数券は3ヶ月間有効です。</span></h4>
          <div class="non-member-price bg-white l-inner">
            <div class="">
              <p>回数券4回券28,600円（税込）</p>
              <span>《1回6,500円(税込7,150円)》</span>
            </div>
            <div class="">
              <p>回数券8回券52,800円（税込）</p>
              <span>《1回6,000円(税込6,600円)》</span>
            </div>
          </div>
          <dl class="p-class-price__menu u-mb0">
            <?php
            $prices = [
              ["マッサージのみ30分", "回数券1回分"],
              ["鍼治療のみ30分", '回数券1回分'],
              ["マッサージ+鍼治療", '回数券1回分<span class="u-inline">+2,200円</span>'],
              ["美容鍼+フェイスマッサージ", '回数券1回分<span class="u-inline">+2,200円</span>'],
            ]; ?>
            <?php foreach ($prices as $key) : ?>
              <div>
                <dt><?= $key[0]; ?></dt>
                <dd><?= $key[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </div>
    </div>


    <!-- タイムテーブル -->
    <div class="l-section">
      <h2 class="c-title-bar">タイムテーブル</h2>
      <figure class="p-class-timetable__fig"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adult/graph.png.webp" alt="タイムテーブル" width="800" height="auto">
      </figure>
      <p class="p-class-timetable__figc">マッサージ・鍼の時間は要相談<br class="u-br_sm">希望時間をお聞きして、受けられます</p>
    </div>

    <!-- 予約 -->
    <?php get_template_part('/template-parts/other/apply_btn'); ?>

  <?php
endwhile;
get_footer();
