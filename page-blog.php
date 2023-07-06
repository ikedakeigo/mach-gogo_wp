<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>

    <main class="main">
      <div class="container inner">
        <h2 class="main_title">記事一覧</h2>
        <div class="border"></div>
        <div class="articles-grid">
          <?php
            $args = array(
              'post_type' => 'blog',  // Change this to any custom post type
              'posts_per_page' => 10
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if($the_query->have_posts()) : ?>
            <?php while($the_query->have_posts()) : ?>
              <?php $the_query->the_post(); ?>
              <div class="article-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="article-image">
                    <?php if(has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="no-img">
                    <?php endif; ?>
                  </div>
                  <div class="article-details">
                    <h6>
                      <?php the_time('Y.m.d'); ?>
                      <?php
                        $category = get_the_category();
                        if ($category[0]):
                      ?>
                      <span class="category">
                        <?php echo $category[0]->cat_name ?>
                      </span>
                      <?php endif; ?>
                    </h6>
                    <h4>
                        <?php echo mb_substr($post-> post_title, 0, 16).'...'; ?>
                    </h4>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>

        <?php if(paginate_links()) : ?>
        <!--p-pagination-->
        <nav class="p-pagination">
          <?php
          echo paginate_links(
            array(
              'end_size' => 1,
              'mid_size' => 1,
              'prev_next' => true,
              'prev_text' => '<i class="fas fa-angle-left"></i>',
              'next_text' => '<i class="fas fa-angle-right"></i>'
            )
            );
          ?>
        </nav>
        <?php endif; ?>
      </div>
    </main>

    <?php get_footer(); ?>
