<?php

/**
 * Template Name: テスト
 */
get_header();
while (have_posts()) :
  the_post();
  $the_id = get_the_ID();
?>
<main id="main_content" class="<?php Arkhe::main_class(); ?>">
  <iframe id="hacomono-fixed-widget-w0001" src="https://akrosminamiazabu.hacomono.jp/widgets/1?isShowProgramName=true&studioId=1"></iframe>
<script src="https://akrosminamiazabu.hacomono.jp/js/widget.js"></script>
    <style>
    :root {
      --bg: #f5f6f8;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #6b7280;
      --border: #e5e7eb;
      --shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
      --radius: 16px;
      --max-width: 1200px;
    }

    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      background: var(--bg);
      color: var(--text);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif;
    }

    body {
      min-height: 100vh;
    }

    .container {
      width: min(100% - 24px, var(--max-width));
      margin: 0 auto;
      padding: 16px 0 24px;
    }

    .header {
      margin-bottom: 12px;
    }

    .title {
      margin: 0 0 6px;
      font-size: clamp(20px, 3vw, 32px);
      line-height: 1.2;
      font-weight: 700;
    }

    .description {
      margin: 0;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.7;
    }

    .frame-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .frame-wrap {
      width: 100%;
      background: #fff;
    }

    iframe {
      display: block;
      width: 100%;
      height: 82vh;
      min-height: 720px;
      border: 0;
      background: #fff;
    }

    .note {
      margin-top: 12px;
      color: var(--muted);
      font-size: 13px;
      line-height: 1.7;
    }

    .fallback {
      margin-top: 10px;
    }

    .fallback a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 44px;
      padding: 0 16px;
      border-radius: 999px;
      background: #111827;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
    }

    .fallback a:hover {
      opacity: 0.92;
    }

    @media (max-width: 768px) {
      .container {
        width: min(100% - 16px, var(--max-width));
        padding: 12px 0 20px;
      }

      .header {
        margin-bottom: 10px;
      }

      .description {
        font-size: 13px;
      }

      .frame-card {
        border-radius: 12px;
      }

      iframe {
        height: 100dvh;
        min-height: 900px;
      }
    }
  </style>

  <header class="header">
    <h1 class="title">予約カレンダー</h1>
    <p class="description">
      下記に予約ページを埋め込んでいます。表示されない場合は、埋め込み制限の可能性があるため下のリンクから直接開いてください。
    </p>
  </header>

  <section class="frame-card">
    <div class="frame-wrap">
      <iframe
        src="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/1"
        title="AKROS MINAMIAZABU 予約カレンダー"
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
    </div>
  </section>

  <p class="note">
    一般的に、iframe は親要素を 100% 幅にし、高さを明示するとレスポンシブに扱いやすいです。一方で、相手ページが X-Frame-Options や frame-ancestors を設定していると埋め込み表示はブロックされます。[web:17][web:27]
  </p>

  <div class="fallback">
    <a
      href="https://akrosminamiazabu.hacomono.jp/reserve/schedule/1/1"
      target="_blank"
      rel="noopener noreferrer">
      予約ページを別タブで開く
    </a>
  </div>

</main>

<?php
endwhile;
get_footer();