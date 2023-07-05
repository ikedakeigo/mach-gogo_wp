<?php
/*
Template Name: news
*/
?>

<?php get_header(); ?>

    <main class="main">
        <section id="notice">
          <div class="container inner">
            <h2 class="main_title">お知らせ</h2>
            <div class="border"></div>
            <div class="notice-list">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : ?>
              <?php the_post();?>
              <div class="notice-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="notice-date">
                    <div class="date-text"><?php the_time('Y.m.d') ?></div>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </a>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </section>
    </main>

    <?php get_footer(); ?>
