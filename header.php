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
<!--
    <script defer src="/assets/js/main.js"></script> -->

    <title>マッハGoGoクリニック</title>
    <meta name="description" content="" />

    <!-- <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com" /> -->
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=6.2" id="bootstrap-js-js"></script>

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="sp-menu">
      <div class="sp-menu__container">
        <a href="index.html" class="sp-nav__logo-link">
          <div class="sp-nav__logo">
            <img src="https://placehold.jp/240x23.png" width="240" height="23" alt="ロゴの画像" />
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
          <a href="#" class="page-bottom__link">
            <div class="page-bottom__text">予約枠を確認・予約する</div>
          </a>
        </div>
      </div>
    </div>

    <section id="top">
      <div class="container-header__nav">
        <div class="header__flex">
          <div class="header-logo">
            <a href="/" class="header-logo__link">
              <div class="top-logo__box">
                <div><img src="https://placehold.jp/240x23.png" width="240" height="23" alt="ロゴの画像" /></div>
              </div>
            </a>
            <h5 class="header__address">兵庫県西脇市黒田庄123-5 大国神社前</h5>
          </div>
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
