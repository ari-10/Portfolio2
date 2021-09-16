  <footer class="footer">
    <!-- トップページにだけ表示 -->
    <?php if (is_home() || is_front_page()) : ?>
      <div class="footer__hero">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-image_01.jpg" alt="" class="footer__hero-img">
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="footer__content">
        <a class="logo footer__logo" href="">Portfolio2</a>
        <nav class="fnav">
          <ul class="fnav__list">
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/service/')); ?>">事業紹介</a></li>
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a></li>
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
            <li class="fnav__item"><a class="fnav__link" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
          <address class="footer__address">
            株式会社Portfolio2<br>
            〒100-0005 東京都千代田区丸の内１丁目<br>
          </address>
          <div class="footer__contact">
            <span class="footer__contact-tel">03-0000-0000</span>
            <span class="footer__contact-mail">info@****.co.jp</span>
          </div>
          <p class="footer__copyright">Copyright © Ari-10 All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
  <?php wp_footer(); ?>
</body>