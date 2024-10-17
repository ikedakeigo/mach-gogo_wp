<?php get_header() ?>

<!-- 1/2非表示 -->
<!-- <main class="imgbg">
    <img src="<?php echo get_template_directory_uri()  ?>/assets/img/machspeedBg.png" alt="">
  </main> -->

<main class="main hidden">
  <section class="main_mv">
    <div class="container-front2">
      <div class="front-text2">
        <h1>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/machMvTitle.png" class="" alt="はたらく人のためのエキナカ内科クリニック">
          <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/machMvTitle_sp.png" class="is-sp" alt="はたらく人のためのエキナカ内科クリニック"> -->
        </h1>

        <!-- <div class="front-text2__secondary2">
            当院は熱がある、お腹が痛い、鼻水など体に不調のある方が、
            <span class="highlight2">忙しい日常の合間</span>
            に気軽に予約・受診できることを目指します。
          </div> -->

      </div>
      <div class="front-contents">
        <a href="/reserve-page/" class="front-button2__link2">
          <div class="front-button2">
            <div class="reservation-text2">・予約する<br />・予約確認</div>
          </div>
        </a>
      </div>
    </div>
    <div class="slick-slider">
      <div class="slick-slide mv_slideHight" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/mach_mv.png')"></div>
    </div>
  </section>

  <!-- <header class="header">
      <div class="container-front">
        <div class="front-text">
          <p class="front-text__main">駅なかクリニックで<br class="is-sp" />音速で帰ろう</p>
          <div class="front-text__secondary">
            当院は熱がある、お腹が痛い、鼻水など体に不調のある方が、
            <span class="highlight">忙しい日常の合間</span>
            に気軽に予約・受診できることを目指します。
          </div>
        </div>
        <a href="#" class="front-button__link">
          <div class="front-button">
            <div class="reservation-text">・予約する<br />・予約確認</div>
          </div>
        </a>
      </div>
    </header> -->

  <section class="container">
    <!-- wp側で管理 -->
    <div class="covid19-attention">
      <h2 class="attention-title js-faq-question">予約システムで<br class="is-sp">予約が困難な場合</h2>
      <div class="attention-text">
        <p>
          予約システムで予約が困難<br class="is-sp">(うまく予約できない)場合、
          <br>
          <a class="covid19-reservation-link" href="https://line.me/ti/p/OA4E-m18Au" target="_blank">こちら</a>のLINEで<br class="is-sp">連絡をお願いいたします。<br />
          <!-- <a class="covid19-reservation-link" href="https://line.me/ti/p/OA4E-m18Au" target="_blank">こちら</a>を参照ください。 -->
          <br>
          LINEからの予約希望時は<br class="is-sp">受診希望時間、
          <br>
          お名前、性別、生年月日をご連絡のほどよろしくお願いいたします。
        </p>
        <p class="attention-text__border">
          LINEの対応時間は<br>
          水曜日〜金曜日<br class="is-sp">11：30〜20：00 <br>
          土曜・日曜・祝日<br class="is-sp">8：30〜17：00 <br>
          となります。
        </p>
      </div>
    </div>
    <!-- ここまで -->
    <!-- <div id="reservation ">
          <h2 class="main_title">本日の診療状況</h2>
          <div class="border"></div>
          <div class="reservation-box">
            <div class="background-image">

              <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg_box.svg" alt="予約セル表" class="background-image-cell" />


              <div class="status">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/status00.svg" alt="9:00-12:00" />
              </div>


              <div class="status">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/status01.svg" alt="12:00-14:00" />
              </div>


              <div class="status">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/status02.svg" alt="15:00-19:00" />
              </div>


              <div class="status">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/status03.svg" alt="19:00-20:00" />
              </div>

            </div>
          </div>
        </div> -->
  </section>
  <section id="medical">
    <div class="medical-content container inner">
      <h2 class="main_title">診療内容</h2>
      <div class="border"></div>
      <div class="medical-content__flex">

        <div class="medical-content__item">
          <a href="/about/#anchor01">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/medical_01.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">
                内科
              </div>
            </div>
          </a>
        </div>

        <div class="medical-content__item">
          <a href="/fever-clinic">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/prevention@2x.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">発熱外来<br />その他感染症</div>
            </div>
          </a>
        </div>



        <div class="medical-content__item">
          <a href="/pill-clinic">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/gynecology@2x.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">
                ピル<br>
                (2回目以降のみ)
              </div>
            </div>
          </a>
        </div>

        <div class="medical-content__item">
          <a href="/after-pill">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ec.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">
                アフターピル
              </div>
            </div>
          </a>
        </div>


        <div class="medical-content__item">
          <a href="/about/#anchor02">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/medical_02.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">
                ワクチン
              </div>
            </div>
          </a>
        </div>

        <div class="medical-content__item">
          <a href="/self-pay-beauty">
            <div class="item-content">
              <div class="item-content__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/medical_03.png" width="72" height="72" alt="" /></div>
              <div class="item-content__text">
                自費<br>(美容・点滴)
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- <section id="value">
        <div class="container">
          <h2 class="main_title">当院の提供価値</h2>
          <h2 class="main_title">当院の特徴</h2>
          <div class="border"></div>
          <div class="value-container">
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_01_01.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  完全WEB予約で受付から<br class="is-sp" /><span class="mh_tRed01">マッハ</span>で診察へ
              </h3>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_02_02.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  キャッシュレス決済
                  <br class="is-sp">
                  各種対応
                </h3>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_03_03.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  薬局と連携して医療の<br class="is-sp">待ち時間を<span class="mh_tRed01">マッハ</span>で解決
                </h3>
              </div>
            </div>

          </div>
        </div>
      </section> -->

  <section id="features">
    <div class="inner">
      <h2 class="main_title">当院の特徴</h2>
      <div class="border"></div>

      <div class="section">

        <div class="features-list__item">
          <div class="features-list__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_01_01.png" alt="" />
          </div>
          <h3 class="sub_title">
            <span>①</span>完全WEB予約で受付から<br class="is-sp" /><span class="mh_tRed01">マッハ</span>で診察へ
          </h3>
        </div>

        <div class="features-list__item">
          <div class="features-list__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_02_02.png" alt="" />
          </div>
          <h3 class="sub_title">
            <span>②</span></span>キャッシュレス決済
            <br class="is-sp">
            各種対応
          </h3>
        </div>

        <div class="features-list__item">
          <div class="features-list__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_03_03.png" alt="" />
          </div>
          <h3 class="sub_title">
            <span>③</span>薬局と連携して医療の<br class="is-sp">待ち時間を<span class="mh_tRed01">マッハ</span>で解決
          </h3>
        </div>

      </div>

      <!-- <div class="section">

            <div class="slider-area">
              <div class="full-screen slider">
                <div class="slide feature-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_01_01.png" alt="125naroom" />
                  <div class="slide-title">完全WEB予約</div>
                  <div class="slide-description">受付から<span class="mh_tRed01">マッハ</span>で診察へ</div>
                </div>

                <div class="slide feature-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_02_02.png" alt="125naroom" />
                  <div class="slide-title">キャッシュレス決済</div>
                  <div class="slide-description">各種対応</div>
                </div>

                <div class="slide feature-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/features_03_03.png" alt="125naroom" />
                  <div class="slide-title">待ち時間解消</div>
                  <div class="slide-description">
                  薬局と連携して医療の<br class="is-sp">待ち時間を<span class="mh_tRed01">マッハ</span>で解決
                  </div>
                </div>

              </div>
            </div>


          </div> -->

    </div>
  </section>

  <section id="flow">
    <div class="container inner">
      <h2 class="main_title">診療の流れ</h2>
      <div class="border"></div>
      <div class="medical-steps">

        <div class="medical-step">
          <div class="step-number__pc">1</div>
          <div class="step-number__pc-box">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/flow_01.png" width="106" height="85" alt="" class="img" />
          </div>
          <div class="step-content">
            <div class="step-title">
              <div class="step-number__sp">1</div>
              <div class="step-text">スマホで予約</div>
            </div>
            <p class="step-desc">オンラインのみ対応</p>
          </div>
        </div>

        <div class="medical-step">
          <div class="step-number__pc">2</div>
          <div class="step-number__pc-box">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/flow_02.png" width="106" height="85" alt="" class="img" />
          </div>
          <div class="step-content">
            <div class="step-title">
              <div class="step-number__sp">2</div>
              <div class="step-text">来院</div>
            </div>
            <p class="step-desc">診療の待ち時間を<br class="is-sp">マッハでご案内</p>
          </div>
        </div>

        <div class="medical-step">
          <div class="step-number__pc">3</div>
          <div class="step-number__pc-box">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/flow_03.png" width="106" height="85" alt="" class="img" />
          </div>
          <div class="step-content">
            <div class="step-title">
              <div class="step-number__sp">3</div>
              <div class="step-text">診察</div>
            </div>
            <p class="step-desc">
              親切・丁寧な診察を心がけております。
            </p>
          </div>
        </div>

        <div class="medical-step">
          <div class="step-number__pc">4</div>
          <div class="step-number__pc-box">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/flow_04.png" width="106" height="85" alt="" class="img" />
          </div>
          <div class="step-content">
            <div class="step-title">
              <div class="step-number__sp">4</div>
              <div class="step-text">会計・帰宅</div>
            </div>
            <p class="step-desc">
              キャッシュレス決済・薬局との<br class="is-sp">連携によりマッハで帰宅
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section id="business_hours">
    <div class="container inner">
      <h2 class="main_title">診療時間</h2>
      <div class="border"></div>
      <div class="schedule">
        <div class="schedule-row">
          <h5>
            <div class="schedule-day">平日</div>
          </h5>
          <h5>
            <div class="schedule-time">12:00〜20:00</div>
          </h5>
        </div>
        <div class="schedule-row">
          <h5>
            <div class="schedule-day">土日祝</div>
          </h5>
          <h5>
            <div class="schedule-time">9:00〜17:00</div>
          </h5>
        </div>
        <div class="schedule-row">
          <h6><span class="schedule-label">休診日</span></h6>
          <h6><span class="schedule-day">月・火</span></h6>
          <!-- <h6><span class="schedule-label">休憩</span></h6>
              <h6><span class="schedule-time__holiday">14:00〜15:00</span></h6> -->
        </div>
      </div>
      <div class="features-list">
        <div class="feature-item">
          <div class="feature-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon1_1.png" width="88" height="88" /></div>
          <div class="feature-text">
            <h5>お昼休みに<br />受診可能</h5>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon2_2.png" width="88" height="88" /></div>
          <div class="feature-text">
            <h5>土日・祝日<br />受診可能</h5>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon3_3.png" width="88" height="88" /></div>
          <div class="feature-text">
            <h5>18時以降<br />受診可能</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="question">
    <div class="container inner">
      <h2 class="main_title">よくある質問</h2>
      <div class="border"></div>
      <div id="accordion" class="accordion-container">
        <?php
        $args = array(
          'post_type' => 'faq',
          'posts_per_page' => 5
        );
        $faq_query = new WP_Query($args);

        if ($faq_query->have_posts()) :
          while ($faq_query->have_posts()) :
            $faq_query->the_post();
        ?>
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title"><?php the_title(); ?></div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <!--/#accordion-->

      <div id="btn_set">
        <div class="button-wrapper"><a href="/faq/" class="button">すべてみる</a></div>
      </div>

    </div>
  </section>
  <section id="notice">
    <div class="container inner">
      <h2 class="main_title">お知らせ</h2>
      <div class="border"></div>
      <div class="notice-list">
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 4
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) :
            $news_query->the_post();
        ?>
            <div class="notice-item">
              <a href="<?php the_permalink(); ?>">
                <div class="notice-date">
                  <div class="date-text"><?php the_time('Y-m-d'); ?></div>
                </div>
                <h3><?php the_title(); ?></h3>
              </a>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>

      <div id="btn_set">
        <div class="button-wrapper"><a href="<?php echo get_post_type_archive_link('news'); ?>" class="button">すべてみる</a></div>
      </div>
    </div>
  </section>


  <!-- <section id="articles">
        <div class="container inner">
          <h2 class="main_title">お役立ち記事</h2>
          <div class="border"></div>
          <div class="articles-grid">
            <?php
            $args = array(
              'post_type' => 'blog',  // Change this to any custom post type
              'posts_per_page' => 4
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
                <div class="article-item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="article-image">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
                      <?php endif; ?>
                    </div>
                    <div class="article-details">
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
                      <h4><?php the_title(); ?></h4>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="button-wrapper">
            <a href="/blogs/" class="button">すべてみる</a>
          </div>
        </div>
      </section> -->

  <section id="move_section" class="container inner">
    <div class="p-youtube">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/iCRcvoJ2uYg?si=7mmvVFeV13UgqiiE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen=""></iframe>
    </div>
  </section>
</main>

<?php get_footer(); ?>
