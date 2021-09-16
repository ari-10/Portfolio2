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
  </div>

</main>

<?php get_footer(); ?>