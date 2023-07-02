<?php
function my_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ));
}
add_action('after_setup_theme', 'my_setup');




function my_script_init(){
  wp_enqueue_style("font-awesome", "https://use.fontawesome.com/releases/v5.6.4/css/all.css", array(), "5.6.4", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('/assets/css/style.css')), "all");
  wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/css/about.css', array(), filemtime(get_theme_file_path('/assets/css/about.css')));
  wp_enqueue_style( 'access-style', get_template_directory_uri() . '/assets/css/access.css', array(), filemtime(get_theme_file_path('/assets/css/access.css')));
  wp_enqueue_style( 'blogs-style', get_template_directory_uri() . '/assets/css/blogs.css', array(), filemtime(get_theme_file_path('/assets/css/blogs.css')));

  // Enqueue other scripts
wp_enqueue_script("my_script", get_template_directory_uri() . "/assets/js/main.js", array("jquery"), filemtime(get_theme_file_path("/assets/js/main.js")), true);
  $image_urls = array(
    get_template_directory_uri() . '/assets/img/mach_mv_2.png',
    get_template_directory_uri() . '/assets/img/mach_mv_3.png',
    get_template_directory_uri() . '/assets/img/mach_mv_4.png',
    get_template_directory_uri() . '/assets/img/mach_mv_2.png',
);

wp_localize_script( 'my_script', 'mySliderData', array(
    'imageUrls' => $image_urls,
));


}
add_action("wp_enqueue_scripts", "my_script_init");

function my_menu_init(){
  register_nav_menus(
    array(
      "global" => "ヘッダーメニュー",
      "footer" => "フッターメニュー",
      "drawer" => "ドロワーメニュー",
    )
    );
}
add_action("init", "my_menu_init");


function my_archive_title($title){

  if (is_category()){
    $title = single_cat_title('', false);
  } elseif(is_tag()){
    $title = single_tag_title('', false);
  } elseif(is_post_type_archive()){
    $title = post_type_archive_title('', false);
  } elseif(is_tax()){
    $title = single_term_title('', false);
  } elseif(is_author()){
    $title = get_the_author();
  } elseif( is_date()){
    $title = '';
    if(get_query_var('year')){
      $title .= get_query_var('year') . '年';
    }
    if(get_query_var('monthnum')){
      $title .= get_query_var('monthnum') . '月';
    }
    if(get_query_var('day')){
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_action('get_the_archive_title', 'my_archive_title');

?>
