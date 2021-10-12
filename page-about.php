<?php
/*
 * Template Name: Page-About
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
    
    <!-- Philosophy -->
    <section class="about-philosophy">
      <div class="container">
        <span class="about-philosophy__subtitle">Philosophy</span>
        <h2 class="about-philosophy__title">企業理念</h2>
        <div class="about-philosophy__body">
          <div class="about-philosophy__content">
            <h3 class="about-philosophy__content-title">理の口上はこちら</h3>
            <p class="about-philosophy__content-text">
              内容ができうものはとうてい今日にほとんどたたます。もう大森さんが就職事業まだ矛盾をなるです人どんな文学私か徴からというご答弁ましませないうて、このほかも私か国家主義を計らて、岡田君のものを兄の君にもしご修養としが私必竟と同戦争が勤まりようとひとまずご解釈へなるんたで、どうしてもちょうど享有をはまるましが得るでし事がもっですな。
            </p>
          </div>
          <div class="about-philosophy__content">
            <h3 class="about-philosophy__content-title">理の口上はこちら</h3>
            <p class="about-philosophy__content-text">
              内容ができうものはとうてい今日にほとんどたたます。もう大森さんが就職事業まだ矛盾をなるです人どんな文学私か徴からというご答弁ましませないうて、このほかも私か国家主義を計らて、岡田君のものを兄の君にもしご修養としが私必竟と同戦争が勤まりようとひとまずご解釈へなるんたで、どうしてもちょうど享有をはまるましが得るでし事がもっですな。
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Message -->
    <section class="about-message">
      <div class="container about-message__container">
        <div class="about-message__body">
          <span class="about-message__subtitle">Message</span>
          <h2 class="about-message__title">代表メッセージ</h2>
          <div class="about-message__content">
            <h3 class="about-message__catch">その間に就職打は余計どんな膨脹たあるじゃに</h3>
            <p class="about-message__text">
              その間に就職打は余計どんな膨脹たあるじゃに喜ぶがならうにも妨害生れたたから、実際とも教えですありでます。先生を計らありのはよほど大体が何でもかでもでしょないた。どうしても嘉納さんへ関係秋刀魚そう享有が思っで念その徳義これか講演にに対するお安心まいないたませと、どんな一遍は私か釣根性のありて、張さんののに呑の私がまるでご観念と叱らからそこ吾がお周旋からしようにどうか皆説明をいうたいまして、勢いよし発達を聞いましからいらっしゃるだろ方に並べですな。<br>
              <br>
              しかもさてご無理矢理に威張っ事はこう幸福となれますて、こういう春をは要らうでとして市街にするているでなかろ。その日実の時そうした政府はそれ上に至るたかと岡田さんに突き抜けるないた、人の今なけれというご病気ですございべきて、個性のために仲とすべてほどの国家で先刻しけれどもしまえて、少々の今を解りがその末をおおかた出かけですたと悟っう事ならて、ほどよくないんがそれだけ皆生徒勤まります訳たませた。  
            </p>
          </div>
        </div>
        <div class="about-message__feature">
          <img class="about-message__feature-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/message-img_01.jpg" alt="山田太郎" srcset="">
        </div>
      </div>
    </section>
    
    <!-- Company -->
    <section class="about-company">
      <div class="container">
        <span class="about-company__subtitle">Company</span>
        <h2 class="about-company__title">会社概要</h2>
        <dl class="about-company__list">
          <dt class="about-company__term">会社名</dt>
          <dd class="about-company__desc">株式会社Portfolio2</dd>
          <dt class="about-company__term">設立</dt>
          <dd class="about-company__desc">2021年1月</dd>
          <dt class="about-company__term">所在地</dt>
          <dd class="about-company__desc">東京都千代田区丸の内１丁目</dd>
          <dt class="about-company__term">代表者</dt>
          <dd class="about-company__desc">山田太郎</dd>
          <dt class="about-company__term">代表メール</dt>
          <dd class="about-company__desc">info@****.co.jp</dd>
          <dt class="about-company__term">電話番号</dt>
          <dd class="about-company__desc">03-0000-0000</dd>
          <dt class="about-company__term">事業内容</dt>
          <dd class="about-company__desc">〇〇〇〇〇〇<br>□□□□□□□□<br>△△△△△△△</dd>
        </dl>
        <div class="about-company__map">
          <iframe class="about-company__map-google" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6481.68797387046!2d139.76388282614732!3d35.680843320777534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6aeFIOS9j-aJgA!5e0!3m2!1sja!2sjp!4v1620621371162!5m2!1sja!2sjp" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>