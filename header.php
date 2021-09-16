<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap&text=未来を動かせ。" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Outlined" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>
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