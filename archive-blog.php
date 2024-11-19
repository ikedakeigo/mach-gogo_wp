<?php get_header(); ?>
<?php if (is_post_type_archive('blog')) : ?>
  <div class="container-blog">
    <?php if (is_category()) : ?>
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
    <?php else: ?>
      <div class="blog-header">
        <header class="blog_hed"
          style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
      url('<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/img/common/default-thumbnail.jpeg'; ?>');">
          <?php if (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="blog_hed__text">
              <h1 class="blog_hed__title">
                <?php the_title(); ?>
              </h1>
            </div>
            <a href="<?php echo get_the_permalink(); ?>" class="btn2">
              記事を読む
              <div class="arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" />
              </div>
            </a>
          <?php endif; ?>
        </header>
      </div>


    <?php endif; ?>

    <section id="blog">
      <div class="blog-contents">
        <div class="blog-content">
          <?php if (is_category()) : ?>
            <?php
            // カテゴリーページの場合のみのクエリ
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'post', // 投稿タイプ
              'posts_per_page' => 10, // 表示する記事数
              'paged' => $paged // 現在のページ番号
            );

            if (is_category()) {
              $args['cat'] = get_query_var('cat');
            }

            $query = new WP_Query($args);
            ?>

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
              <!-- <p>記事はありません。</p> -->
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

          <?php endif; ?>

          <!-- 以下の部分はカテゴリーページでは表示されません -->
          <?php if (!is_category()): ?>

            <h2 class="blog-title blog-title__top">人気記事</h2>
            <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 3,
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            );
            $popular_query = new WP_Query($args);
            ?>

            <?php if ($popular_query->have_posts()) : ?>
              <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
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
                      <h6><?php the_time('Y.m.d'); ?></h6>
                      <h4> <?php
                        if (mb_strlen($post->post_title) > 20) {
                          echo mb_substr($post->post_title, 0, 20) . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?></h4>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <h2 class="blog-title">新着記事</h2>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : ?>
                <?php the_post(); ?>
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
                        if (mb_strlen($post->post_title) > 20) {
                          echo mb_substr($post->post_title, 0, 20) . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </h4>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            <div>
              <h2 class="blog-title">そのほかの記事</h2>
            </div>

            <div class="blog-articles">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                  <?php the_post(); ?>
                  <div class="blog-articles__box">
                    <a href="<?php the_permalink(); ?>">
                      <div class="blog-articles__image">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumbnail.jpeg" alt="神戸駅近クリニック">
                        <?php endif; ?>
                      </div>
                      <div class="blog-articles__info">
                        <h6>
                          <?php the_time('Y.m.d'); ?>
                          <?php
                          $category = get_the_category();
                          if ($category[0]) :
                          ?>
                            <span class="category">
                              <?php echo $category[0]->cat_name ?>
                            </span>
                          <?php endif; ?>
                        </h6>
                        <h4>
                          <?php
                          if (mb_strlen($post->post_title) > 16) {
                            echo mb_substr($post->post_title, 0, 16) . '...';
                          } else {
                            echo $post->post_title;
                          }
                          ?>
                        </h4>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

            </div>

            <div id="btn_set">
              <div class="button-wrapper">
                <a href="/blog/" class="button">すべてみる</a>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </section>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
