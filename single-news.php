<?php get_header('page'); ?>

<main class="main">

  <!-- Page Head -->
  <div class="page-head js-sticky-nav">
    <div class="container">
      <span class="page-head__subtitle">News</span>
      <h1 class="page-head__title">お知らせ</h1>
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
    <section class="news-article">
      <div class="container">
        <?php while (have_posts()) : the_post(); ?>
          <?php $terms = get_the_terms($post->ID, 'tax_news'); ?>
          <article <?php post_class('news-article__content'); ?>>
            <header class="news-article__header">
              <h2 class="news-article__title"><?php the_title(); ?></h2>
              <time class="news-article__date" datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
              <?php if (!empty($terms)) : ?>
                <?php foreach ($terms as $term) : ?>
                  <span class="news-article__category"><?php echo $term->name; ?></span>
                <?php endforeach; ?>
              <?php endif; ?>
            </header>
            <div class="news-article__body">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; ?>
        <footer class="news-article__footer">
          <div class="news-article__more">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-article__button">お知らせ一覧</a>
          </div>
        </footer>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>