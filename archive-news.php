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
    <section class="news-archive">
      <div class="container">
        <span class="news-archive__subtitle">Archive</span>
        <h2 class="news-archive__title">お知らせ一覧</h2>
        <ul class="news-archive__list">
          <?php if (have_posts()) : 
            while (have_posts()) : the_post(); ?>
              <?php $terms = get_the_terms($post->ID, 'tax_news'); ?>
              <li class="news-archive__item">
                <time class="news-archive__date" datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
                <?php if (!empty($terms)) : ?>
                  <?php foreach ($terms as $term) : ?>
                    <span class="news-archive__category"><?php echo $term->name; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
                <a class="news-archive__text" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <li class="news-archive__empty">現在、お知らせはありません。</li>
          <?php endif; ?>
        </ul>
        <div class="news-archive__paging">
          <?php
            set_query_var('paging_query', $wp_query );
            get_template_part('paging');
          ?>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>