<?php get_header(); ?>
<div class="container-blog">
  <div class="archive-head m_description">
    <div class="archive-lead">カテゴリー名</div>
    <h1 class="archive-title m_category">
      <?php the_archive_title(); ?>
    </h1>
    <div class="archive-description">
      <p>
        <?php the_archive_description(); ?>
      </p>
    </div>
  </div>
  <section id="blog">
    <div class="blog-contents">
      <div class="blog-content">
        <?php if (is_category()) : ?>
          <?php
          // カテゴリーページの場合のみのクエリ
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog', // 投稿タイプ
            'posts_per_page' => 5, // 表示する記事数
            'paged' => $paged // 現在のページ番号
          );

          if (is_category()) {
            $args['cat'] = get_query_var('cat');
          }

          $query = new WP_Query($args);
          ?>
        <?php endif; ?>
        <?php if ($query->have_posts()): ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="blog-item">
              <a href="<?php the_permalink(); ?>" class="article_page">
                <div class="blog-item__image">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumbnail.jpeg" alt="神戸駅近クリニック">
                  <?php endif; ?>
                </div>
                <div class="blog-item__info">
                  <h6>
                    <?php the_time('Y.m.d'); ?>
                    <?php
                    $category = get_the_category();
                    if ($category[0]) :
                    ?>
                      <span class="category">
                        <?php echo $category[0]->cat_name; ?>
                      </span>
                    <?php endif; ?>
                  </h6>
                  <h4>
                    <?php
                    if (mb_strlen($post->post_title) > 40) {
                      echo mb_substr($post->post_title, 0, 40) . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h4>
                </div>
              </a>
            </div>

          <?php endwhile; ?>

          <!-- ページネーションの表示 -->
          <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示
          ?>
            <!-- pagination -->
            <div class="pagination">
              <?php
              echo paginate_links(
                array(
                  'end_size' => 1,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'prev_text' => '<i class="fas fa-angle-left"></i>',
                  'next_text' => '<i class="fas fa-angle-right"></i>',
                )
              );
              ?>
            </div><!-- /pagination -->
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>



        <?php get_sidebar(); ?>

      </div>
  </section>
</div>
<?php get_footer(); ?>
