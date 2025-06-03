<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- フロートbtn フォント -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css" />
  <!-- <link rel="stylesheet" href="/assets/css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

  <!-- =========カルーセル＝＝＝＝＝＝＝＝ -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- ＝＝＝＝＝＝＝カルーセル＝＝＝＝＝＝ -->

  <title>
    <?php
    if (is_front_page()) {
      // echo '神戸駅ナカの待たない土日祝日診察の内科｜神戸駅ナカ内科マッハスピードクリニック';
      echo '神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('naika')) {
      echo 'JR神戸駅直結の待たない内科｜神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('fever-clinic')) {
      echo '神戸駅直結の待たない・断らない・土日祝日診療の発熱外来滴｜神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('pill-clinic')) {
      echo '神戸駅ナカの待たないピル（２回目以降）処方｜神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('after-pill')) {
      echo '神戸駅ナカで土日祝・夜間・待たずにアフターピル処方｜神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('self-pay-beauty')) {
      echo '神戸駅ナカで土日祝・夜間・待たずに美白内服処方・美容点滴｜神戸駅ナカ内科マッハスピードクリニック';
    } elseif (is_page('vaccine')) {
      echo '神戸駅ナカで土日祝・夜間・待たずにインフルエンザの予防接種｜神戸駅ナカ内科マッハスピードクリニック';
    } else {
      echo get_the_title() . '｜神戸駅ナカ内科マッハスピードクリニック';
    }
    ?>
  </title>

  <meta name="keywords" content="神戸駅,内科,診療,予約,診療時間,診療科目,アクセス,診療内容,医師紹介,診療案内 " />
  <meta name="description" content="神戸駅直結徒歩0分｜平日20時・土日祝も診療の内科" />

  <!-- <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com" /> -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com" />

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=6.2" id="bootstrap-js-js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <div class="hidden">
    <div class="sp-menu" id="js-close">
      <div class="sp-menu__container">
        <a href="/" class="sp-nav__logo-link">
          <div class="sp-nav__logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mach-logo02.png" width="300" height="50" alt="神戸駅直結徒歩ゼロ分の内科 神戸駅ナカ内 " />
          </div>
        </a>
        <?php
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'drawer',
            'container' => '',
            'menu_class' => 'sp-nav__list',
          )
        )
        ?>
        <div class="close js-close">
          <span class="close__icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/batu.svg" /></span>
        </div>
      </div>
    </div>
    <div class="footer-box">
      <div class="footer__flex">
        <div class="menu-toggle js-spmenu"><img src="<?php echo get_template_directory_uri() ?>/assets/img/menu.png" /></div>
        <div class="page-bottom">
          <a href="/reserve-page/" class="page-bottom__link">
            <div class="page-bottom__text">予約枠を確認・予約する</div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section id="top">
    <div class="container-header__nav">
      <div class="header-logo">
        <a href="/" class="header-logo__link">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/mach-logo02.png" alt="神戸駅直結徒歩ゼロ分の内科 神戸駅ナカ内科" />
        </a>
        <h5 class="header__address">
          JR神戸駅直結 プリコ神戸 大垣書店奥
        </h5>
      </div>

      <div class="header__flex hidden">
        <div class="header-navigation">

          <?php
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'global',
              'container' => '',
              'menu_class' => 'header-nav__list',

            )
          )
          ?>

        </div>
      </div>
    </div>
  </section>
