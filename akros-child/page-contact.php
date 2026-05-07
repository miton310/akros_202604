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

    <p class="l-introduction-box --top text-center">必要事項にご記入の上、送信してください。<br>
      ご注意： ★印の項目は必ず入力してください。</p>

    <article <?php post_class(Arkhe::get_main_body_class()); ?> data-postid="<?php echo esc_attr($the_id); ?>">
      <?php
      do_action('arkhe_start_page_main', $the_id);
      Arkhe::get_part('page');
      do_action('arkhe_end_page_main', $the_id);
      ?>
    </article>


    <p class="text-center p-contact__footer">お電話でのお問い合わせは<br>
      <span>TEL 03-4400-8711</span>までお気軽にお問い合わせください。
    </p>
  </main>
<?php
endwhile;
get_footer();
