<?php
/*
 * Template Name: Page-Contact
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
    
    <section class="contact-inquiry">
      <div class="container">
        <span class="contact-inquiry__subtitle">Inquiry</span>
        <h2 class="contact-inquiry__title">お問い合わせ</h2>
        <p class="contact-inquiry__text">お問い合わせは、こちらのフォームよりお願いいたします。</p>
        <div class="contact-inquiry__form">
          <?php if(have_posts()): 
            while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </div>
  
</main>

<?php get_footer(); ?>