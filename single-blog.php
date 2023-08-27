<?php get_header(); ?>
    <div class="container">
      <div class="blogTop-img">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
        <?php endif ; ?>
      </div>

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
        <?php the_post(); ?>
        <div class="s-blog__date" datetime="<?php the_time('c') ?>">
          <?php the_time('Y.m.d'); ?>
          <?php
            $category = get_the_category();
            if ( $category[0]) :
          ?>
          <span class="s-blog__category">
            <a href="<?php echo get_category_link($category[0]->term_id); ?>" title="Uncategorized">
              <?php echo $category[0]->cat_name; ?>
            </a>
          </span>
          <?php endif; ?>
          <h1 class="s-blog__title">
            <?php the_title(); ?>
          </h1>
        </div>
        <?php endwhile ; ?>
      <?php endif; ?>

      <div class="s-blog__content entry-body">
        <?php the_content(); ?>
        <p><a href="/reserve-page/" class="btn">【予約はこちらから】</a></p>
        <div class="button-wrapper">
          <a href="/blogs/" class="button">お役立ち記事トップへ</a>
        </div>
      </div>

      <?php $post_tags = get_the_tags(); ?>
      <div class="entry-tag-items">
        <div class="entry-tag-head">タグ</div>
        <?php if($post_tags) :?>
          <?php foreach($post_tags as $tag) : ?>
            <div class="entry-tag-item"><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name; ?></a></div>
          <?php endforeach; ?>
        <?php endif ; ?>
      </div>

      <section id="articles">
        <div class="container inner">
          <h2 class="main_title">新着記事</h2>
          <div class="border"></div>
          <div class="articles-grid">
          <?php
            if(have_posts()) {
              $myposts = get_posts(array(
                'post_type' => 'blog',
                'posts_per_page' => '4',
                'post__not_in' => array($post->ID),
              ));
              if ($myposts) :
                foreach($myposts as $post) : setup_postdata($post); ?>
                  <div class="article-item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="article-image">
                        <?php
                        if (has_post_thumbnail()){
                          the_post_thumbnail('medium');
                        } else{
                          echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.png" alt="">';
                        }
                        ?>
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

          <div id="btn_set">
            <div class="button-wrapper">
              <a href="/blog/" class="button">すべてみる</a>
            </div>
          </div>

        </div>
      </section>

    </div>

    <?php get_footer(); ?>
