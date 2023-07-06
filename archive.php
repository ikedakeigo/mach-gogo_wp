<?php get_header(); ?>



    <div class="blog-header">
      <header class="blog_hed"
      style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"
      >
        <?php if(have_posts())  :?>
          <?php the_post(); ?>
        <div class="blog_hed__text">
          <h1 class="blog_hed__title">
            <?php the_title(); ?>
          </h1>
        </div>
        <a href="<?php echo get_the_permalink(); ?>" class="btn2"
          >記事を読む
          <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" /></div>
        </a>
        <?php endif; ?>
      </header>
    </div>

    <div class="container-blog">

      <!-- <div class="archive-head m_description">
        <div class="archive-lead">カテゴリー名</div>
        <h1 class="archive-title m_category">
          <?php the_archive_title(); ?>
        </h1>
        <div class="archive-description">
          <p>
            <?php the_archive_description(); ?>
          </p>
        </div>
      </div> -->


      <section id="blog">
        <div class="blog-contents">
          <div class="blog-content">
            <h2 class="blog-title blog-title__top">人気記事</h2>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                  <?php the_post(); ?>
                  <div class="blog-item">
                    <a href="<?php the_permalink(); ?>" class="article_page" >
                      <div class="blog-item__image">
                      <?php if(has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                          <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
                        <?php endif; ?>
                      </div>
                      <div class="blog-item__info">
                        <h6>
                        <?php the_time('Y.m.d'); ?>
                        <?php
                          $category = get_the_category();
                          if ( $category[0]) :
                        ?>
                        <span class="category">
                          <?php echo $category[0]->cat_name; ?>
                        </span>
                        <?php endif; ?>
                        </h6>
                        <h4>
                          <?php echo mb_substr($post-> post_title, 0, 40).'...'; ?>
                        </h4>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            <h2 class="blog-title">新着記事</h2>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                  <?php the_post(); ?>
                  <div class="blog-item">
                    <a href="<?php the_permalink(); ?>" class="article_page" >
                      <div class="blog-item__image">
                      <?php if(has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                          <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
                        <?php endif; ?>
                      </div>
                      <div class="blog-item__info">
                        <h6>
                        <?php the_time('Y.m.d'); ?>
                        <?php
                          $category = get_the_category();
                          if ( $category[0]) :
                        ?>
                        <span class="category">
                          <?php echo $category[0]->cat_name; ?>
                        </span>
                        <?php endif; ?>
                        </h6>
                        <h4>
                          <?php echo mb_substr($post-> post_title, 0, 20).'...'; ?>
                        </h4>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

            <div><h2 class="blog-title">そのほかの記事</h2></div>

            <div class="blog-articles">
              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                  <?php the_post(); ?>
                  <div class="blog-articles__box">
                    <a href="<?php the_permalink(); ?>">
                      <div class="blog-articles__image">
                        <?php if(has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                          <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
                        <?php endif; ?>
                      </div>
                      <div class="blog-articles__info">
                        <h6>
                        <?php the_time('Y.m.d'); ?>
                        <?php
                          $category = get_the_category();
                          if ( $category[0]) :
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

            </div>
            <div id="btn_set">
            <div class="button-wrapper"><a href="/blog/" class="button">すべてみる</a></div>
          </div>
          </div>

          <?php get_sidebar(); ?>

        </div>
      </section>
    </div>

    <?php get_footer(); ?>
