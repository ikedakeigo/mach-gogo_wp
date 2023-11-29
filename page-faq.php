<?php
/*
Template Name: faq
*/
?>


<?php get_header(); ?>
      <section id="question">
        <div class="container inner">
          <h2 class="main_title">よくある質問</h2>
          <div class="border"></div>
          <div id="accordion" class="accordion-container">
            <?php
            $args = array(
              'post_type'=> 'faq',
              'posts_per_page' => -1,
            );
            $faq_query = new WP_Query($args);

            if($faq_query->have_posts()) :
              while($faq_query->have_posts()) :
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
        </div>
      </section>

    <?php get_footer(); ?>
