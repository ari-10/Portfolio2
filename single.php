<?php get_header('page'); ?>

<main class="main">

  <div class="page__head">
    <div class="page__container">
      <span class="page__subtitle"><?php the_subtitle(); ?></span>
      <h1 class="page__title"><?php echo get_the_title(); ?></h1>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) : ?>
          <?php bcn_display(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="page__content">
    <div class="page__container">
      <?php if(have_posts()): the_post(); ?>
        <article <?php post_class('article__content'); ?>>
          <div class="article__header">
            <!--投稿日を取得-->
            <span class="article__date">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
          </div>
          <!--タイトル-->
          <h2 class="article__title"><?php the_title(); ?></h2>
          <!--本文取得-->
          <div class="article__body">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endif; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>