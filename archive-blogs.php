<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>

<main class="main">
  <?php
  $args = array(
    'post_type' => 'blog',  // Change this to any custom post type
    'posts_per_page' => 10
  );
  $the_query = new WP_Query($args);
  ?>

  <section id="notice">
    <div class="container inner">
      <h2 class="main_title">記事一覧</h2>
      <div class="border"></div>
      <div class="notice-list">
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
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
  <?php wp_reset_postdata(); ?>
  <?php if (paginate_links()) : ?>
    <!--p-pagination-->
    <nav class="p-pagination">
      <?php
      echo paginate_links(
        array(
          'end_size' => 1,
          'mid_size' => 1,
          'prev_next' => true,
          'prev_text' => '<i class="fas fa-angle-left"></i>',
          'next_text' => '<i class="fas fa-angle-right"></i>',
          'total' => $the_query->max_num_pages,  // こちらを追加
        )
      );
      ?>
    </nav>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
