<?php
/*
 * Template Name: Page-Recruit
 */
?>

<?php get_header('page'); ?>

<main class="main">
  
  <!-- Page Head -->
  <div class="page-head js-sticky-nav">
    <div class="container">
      <span class="page-head__subtitle"><?php the_subtitle(); ?></span>
      <h1 class="page-head__title"><?php echo get_the_title(); ?></h1>
      <!-- Breadcrumb -->
      <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) : ?>
          <?php bcn_display(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!--Page Content-->
  <div class="page-content">
    <section class="recruit-guideline">
      <div class="container">
        <span class="recruit-guideline__subtitle">Guideline</span>
        <h2 class="recruit-guideline__title">募集要項</h2>
        <div class="recruit-guideline__body">
          <?php if(have_posts()): 
            while(have_posts()): the_post(); ?>
              <?php if(!empty($post->post_content)) :?>
                <?php the_content(); ?>
              <?php else : ?>
                <p>
                  弊社にご関心をいただき、誠にありがとうございます。<br>
                  大変申し訳ありませんが、現在、求人募集は行っておりません。
                </p>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php else : ?>
            <p>現在、募集は行っておりません。</p>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="recruit-member">
      <div class="container">
        <span class="recruit-member__subtitle">Member</span>
        <h2 class="recruit-member__title">社員紹介</h2>
        <div class="recruit-member__body">
          <div class="recruit-member__item">
            <div class="recruit-member__item-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_01.jpg" alt="メンバー1" class="">
            </div>
            <div class="recruit-member__item-body">
              <span class="recruit-member__item-join">2021年入社</span>
              <p class="recruit-member__item-category">ビジネス事業部</p>
              <p class="recruit-member__item-name">山田 太郎</p>
              <p class="recruit-member__item-text">
              精神に暮らしです方も同時に九月がどうしてもならでまし。ぼうっと嘉納さんを関係がたどう講演を儲けた人同じ秋刀魚私か観念をという皆教育たましただと、その当時はそれか社会作物を眺めるが、槙君ののが自分の私にけっして皆交渉としばあなた世間へお意見で云っようにけっしてご担任に行ったたて、単になお誘惑になっだから過ぎまし方を衝くたう。
              </p>
            </div>
          </div>
          <div class="recruit-member__item">
            <div class="recruit-member__item-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_02.jpg" alt="メンバー2" class="">
            </div>
            <div class="recruit-member__item-body">
              <span class="recruit-member__item-join">2021年入社</span>
              <p class="recruit-member__item-category">ビジネス事業部</p>
              <p class="recruit-member__item-name">山田 太郎</p>
              <p class="recruit-member__item-text">
              精神に暮らしです方も同時に九月がどうしてもならでまし。ぼうっと嘉納さんを関係がたどう講演を儲けた人同じ秋刀魚私か観念をという皆教育たましただと、その当時はそれか社会作物を眺めるが、槙君ののが自分の私にけっして皆交渉としばあなた世間へお意見で云っようにけっしてご担任に行ったたて、単になお誘惑になっだから過ぎまし方を衝くたう。
              </p>
            </div>
          </div>
          <div class="recruit-member__item">
            <div class="recruit-member__item-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-img_03.jpg" alt="メンバー3" class="">
            </div>
            <div class="recruit-member__item-body">
              <span class="recruit-member__item-join">2021年入社</span>
              <p class="recruit-member__item-category">ビジネス事業部</p>
              <p class="recruit-member__item-name">山田 太郎</p>
              <p class="recruit-member__item-text">
              精神に暮らしです方も同時に九月がどうしてもならでまし。ぼうっと嘉納さんを関係がたどう講演を儲けた人同じ秋刀魚私か観念をという皆教育たましただと、その当時はそれか社会作物を眺めるが、槙君ののが自分の私にけっして皆交渉としばあなた世間へお意見で云っようにけっしてご担任に行ったたて、単になお誘惑になっだから過ぎまし方を衝くたう。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>