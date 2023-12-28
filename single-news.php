<?php get_header(); ?>
    <div class="container layout">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
        <?php the_post(); ?>
        <div class="s-blog__date" datetime="<?php the_time('c') ?>">
          <?php the_time('Y.m.d'); ?>
          <?php
          /*
            カテゴリーのリンクを表示（一旦非表示）
            $category = get_the_category();
            if ( $category[0]) :
          */
          ?>

          <!-- <span class="s-blog__category">
            <a href="<?php echo get_category_link($category[0]->term_id); ?>" title="Uncategorized">
              <?php echo $category[0]->cat_name; ?>
            </a>
          </span> -->
          <?php // endif; ?>

          <h1 class="s-blog__title">
            <?php the_title(); ?>
          </h1>
          <div class="blogTop-img">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="no-img"> -->
            <!-- 何も表示なし -->
        <?php endif ; ?>
      </div>
        </div>
        <?php endwhile ; ?>
      <?php endif; ?>

      <div class="s-blog__content">
        <?php the_content(); ?>
        <div class="button-wrapper">
          <a href="/news/" class="button">お知らせ一覧</a>
        </div>
      </div>

      <?php $post_tags = get_the_tags(); ?>
      <div class="entry-tag-items">
        <!-- <div class="entry-tag-head">タグ</div> -->
        <?php if($post_tags) :?>
          <?php foreach($post_tags as $tag) : ?>
            <div class="entry-tag-item"><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name; ?></a></div>
          <?php endforeach; ?>
        <?php endif ; ?>
      </div>

      <section id="articles">
        <div class="container inner">
        <?php if(have_posts() && is_single()):
          $post_count = wp_count_posts('news')->publish;
          if($post_count >= 2):
          ?>
          <h2 class="main_title">最新のお知らせ</h2>
          <div class="border"></div>
        <?php else: ?>
          <!-- 何も表示しない -->
        <?php
          endif;
        endif;
        ?>
          <div class="articles-grid">
          <?php
            if(have_posts()) {
              $myposts = get_posts(array(
                'post_type' => 'news',
                'posts_per_page' => '4',
                'post__not_in' => array($post->ID),
              ));
              if ($myposts) :
                foreach($myposts as $post) : setup_postdata($post); ?>
                  <div class="article-item">
                    <a href="<?php the_permalink(); ?>">
                    <div class="notice-date">
                      <div class="date-text"><?php the_time('Y-m-d'); ?></div>
                    </div>
                      <div class="article-details">
                        <h6>
                        <?php the_date('Y.m.d'); ?>
                        <?php
                          $category = get_the_category();
                          if( $category[0]) :
                        ?>
                        <span class="category">
                          <?php echo $category[0]->cat_name; ?>
                        </span>
                          <?php endif; ?>
                      </h6>
                        <h4>
                          <?php the_title(); ?>
                        </h4>
                      </div>
                    </a>
                  </div>
                <?php endforeach; wp_reset_postdata();
              endif;
            }
          ?>
          </div>


        </div>
      </section>

    </div>

    <?php get_footer(); ?>
