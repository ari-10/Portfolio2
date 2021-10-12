<?php get_header(); ?>

<!-- HERO -->
<div class="hero js-sticky-nav">
  <ul class="hero__slides">
    <li class="hero__slides-item hero__slides-item--first"></li>
    <li class="hero__slides-item hero__slides-item--second"></li>
    <li class="hero__slides-item hero__slides-item--third"></li>
    <li class="hero__slides-item hero__slides-item--fourth"></li>
  </ul>
  <div class="hero__content">
    <span class="hero__subtitle">Move the Future</span>
    <h1 class="hero__catch">未来を動かせ。</h1>
    <p class="hero__lead _sp">
      淋しけ欠けた一般通りはそのお尋ねと察せがはく助力の飯し。<br>
      不幸に自失知れられなところを手段が切り開いれませ相場間接の書物のない。
    </p>
  </div>
  <a class="scroll-navigation">Scroll</a>
</div>

<main class="main">
  <!-- INTRODUCTION -->
  <div class="intro">
    <div class="container">
      <div class="intro__content">
        <a class="intro__item" href="<?php echo esc_url(home_url('/service/')); ?>">
          <h2 class="intro__title">事業紹介</h2>
          <span class="intro__subtitle">Our Business</span>
        </a>
        <a class="intro__item" href="<?php echo esc_url(home_url('/about/')); ?>">
          <h2 class="intro__title">私たちについて</h2>
          <span class="intro__subtitle">About Us</span>
        </a>
        <a class="intro__item" href="<?php echo esc_url(home_url('/recruit/')); ?>">
          <h2 class="intro__title">採用情報</h2>
          <span class="intro__subtitle">Recruit</span>
        </a>
      </div>
    </div>
  </div>
  
  <!-- SERVICE -->
  <section class="home-service">
    <div class="container">
      <span class="home-service__subtitle">Our Business</span>
      <h1 class="home-service__title">事業紹介</h1>
      <div class="home-service__content">
        <figure class="home-service__feature">
          <img class="home-service__feature-img js-fade" src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img_01.jpg" alt="事業紹介1">
        </figure>
        <div class="home-service__desc">
          <h2 class="home-service__desc-ttl home-service__desc-ttl--first">腹の中が講演ある</h2>
          <p class="home-service__desc-text">
            その簡潔ませ無事はおそらく義務を注文述べるいんてたありない。よくらくなるてもどう左に相違寄っられしありれるになさいから来がで。あなたも私からないが馬鹿をありましのが留学云わのましだろます。
          </p>
          <div class="home-service__desc-link">
            <a class="button" href="<?php echo esc_url(home_url('/service/')); ?>">詳細を見る</a>
          </div>
        </div>
      </div>
      <div class="home-service__content home-service__content--reverse">
        <figure class="home-service__feature">
          <img class="home-service__feature-img js-fade" src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img_02.jpg" alt="事業紹介2">
        </figure>
        <div class="home-service__desc">
          <h2 class="home-service__desc-ttl home-service__desc-ttl--second">腹の中が講演ある</h2>
          <p class="home-service__desc-text">
            またはのらくらその亡骸が集っても明らかなくものがしる。道の英国自信というのも、肝影響擡げなかっ順序学校の表裏からありた大学という幸福が訊いけれどもいようん。または私はどっちも英に政府を反しといった発展。
          </p>
          <div class="home-service__desc-link">
            <a class="button" href="<?php echo esc_url(home_url('/service/')); ?>">詳細を見る</a>
          </div>
        </div>
      </div>
      <div class="home-service__content">
        <figure class="home-service__feature">
          <img class="home-service__feature-img js-fade" src="<?php echo get_template_directory_uri(); ?>/assets/images/service-img_03.jpg" alt="事業紹介3">
        </figure>
        <div class="home-service__desc">
          <h2 class="home-service__desc-ttl home-service__desc-ttl--third">腹の中が講演ある</h2>
          <p class="home-service__desc-text">
            いよいよ嚢界を思わてしまった自由は懐手の非常たもないとするた。とするのも、その簡潔ませ無事はおそらく義務を注文述べるいんてたありない。よくらくなるてもどう左に相違寄っられしありれるになさいから来がで。
          </p>
          <div class="home-service__desc-link">
            <a class="button" href="<?php echo esc_url(home_url('/service/')); ?>">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="home-about">
    <div class="container">
      <span class="home-about__subtitle">About Us</span>
      <h1 class="home-about__title">私たちについて</h1>
      <div class="home-about__content">
        <h2 class="home-about__lead">
          心をも落第眺める、<br>
          欝にも活動迂たてはしうかと見えれる。
        </h2>
        <p class="home-about__text">
          理の口上はこちらにますます観念思わせとつい、人情の複雑はそちらがするんて得たず。または私に誰も本位から先輩者かないから、じっと自身に投げなてとし。
        </p>
        <div class="home-about__desc-link">
          <a class="button" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWS -->
  <section class="home-news">
    <div class="container">
      <span class="home-news__subtitle">News</span>
      <h1 class="home-news__title">お知らせ</h1>
      <ul class="home-news__list">
        <?php
          $args = array(
            'post_type' => array('news'),
            'post_status' => 'publish',
            'posts_per_page' => 4,
          );
          $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="home-news__item">
              <span class="home-news__date">
                <?php echo get_the_date("Y-m"); ?>
              </span>
              <?php $terms = get_the_terms($post->ID, 'tax_news'); ?>
              <?php if (!empty($terms)) : ?>
                <?php foreach ($terms as $term) : ?>
                  <span class="home-news__category"><?php echo $term->name; ?></span>
                <?php endforeach; ?>
              <?php endif; ?>
              <a class="home-news__text" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
          <?php endwhile; else : ?>
          <p class="home-news__empty">現在、お知らせはありません。</p>
        <?php endif; ?>
	      <?php wp_reset_query(); // リセット ?>
	    </ul>
      <div class="home-news__more">
        <a class="button" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ一覧</a>
      </div>
    </div>
  </section>
  
  <!-- RECRUIT -->
  <section class="home-recruit">
    <div class="container">
      <span class="home-recruit__subtitle">Recruit</span>
      <h1 class="home-recruit__title">採用情報</h1>
      <p class="home-recruit__lead">
        私の淋しけ欠けた一般通りはそのお尋ねと察せがはかく助力の飯まし。<br>
        だから不幸に自失知れられなところを手段が切り開いれませ相場間接の書物のようないのあり。
      </p>
      <div class="home-recruit__link">
        <a class="button" href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a>
      </div>
      <div class="home-recruit__content">
        <div class="home-recruit__list">
          <div class="home-recruit__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_01.jpg" alt="メンバー1" class="home-recruit__image js-fade">
            <h2 class="home-recruit__catch">実は口義務というその時ありだ私の主義はざっとできがいた。</h2>
            <a class="home-recruit__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">
              <div class="button">
                <div class="home-recruit__detail">
                  <p class="home-recruit__category">ビジネス事業部</p>
                  <p class="home-recruit__name">山田 太郎 さん</p>
                </div>
              </div>
            </a>
          </div>
          <div class="home-recruit__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_02.jpg" alt="メンバー2" class="home-recruit__image js-fade">
            <h2 class="home-recruit__catch">ますますの時代が、よそもどことすわるた道具を事情で意見なっといるんだ。</h2>
            <a class="home-recruit__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">
              <div class="button">
                <div class="home-recruit__detail">
                  <p class="home-recruit__category">ビジネス事業部</p>
                  <p class="home-recruit__name">山田 太郎 さん</p>
                </div>
              </div>
            </a>
          </div>
          <div class="home-recruit__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_03.jpg" alt="メンバー3" class="home-recruit__image js-fade">
            <h2 class="home-recruit__catch">限りよりも精神に食わせろたば、気ご免は四人眺めるでしょなく。</h2>
            <a class="home-recruit__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">
              <div class="button">
                <div class="home-recruit__detail">
                  <p class="home-recruit__category">ビジネス事業部</p>
                  <p class="home-recruit__name">山田 太郎 さん</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>