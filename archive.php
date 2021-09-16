<?php get_header('page'); ?>

<main>
  
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
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php echo get_the_date("Y-m"); ?></span>
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
        <?php the_permalink(); ?>"><?php the_title(); ?>
        <?php endwhile; else : ?>
      <?php endif; ?>
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>