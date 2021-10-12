<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Portfolio2 | Takahisa Ariyama">
  <meta property="og:description" content="Takahisa Ariyamaのポートフォリオ2です。">
  <meta property="og:url" content="http://t-ariyama.com/portfolio2/">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="Portfolio2 | Takahisa Ariyama">
  <meta property="og:locale" content="ja_JP">
  <!-- <meta property="fb:app_id" content=""> -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="Takahisa Ariyamaのポートフォリオ2です。">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="canonical" href="http://t-ariyama.com/portfolio2/">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap&text=未来を動かせ。" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Outlined" rel="stylesheet">
  <title>
    <?php if (is_home()) : ?>
      <?php bloginfo('name'); ?>
    <?php else : ?>
      <?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="loading">
    <div class="loading__object"></div>
  </div>

  <header class="header">
    <div class="header__container">
      <a class="header__logo" href="<?php echo home_url(); ?>">Portfolio2</a>
      <nav class="gnav">
        <ul class="gnav__list">
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/service/')); ?>">事業紹介</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
          <li class="gnav__item gnav__item--strong"><a class="gnav__link gnav__link--strong" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
        <i class="gnav__btn"><span class="gnav__btn-line"></span></i>
      </nav>
      <nav class="snav">
        <ul class="snav__list">
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/service/')); ?>">事業紹介</a></li>
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a></li>
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
          <li class="snav__item"><a class="snav__link" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
        <div class="snav__footer">
          <p>Portfolio2</p>
        </div>
      </nav>
    </div>
  </header>