<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    )
  );
}
add_action('after_setup_theme', 'my_setup');




function my_script_init()
{
  wp_enqueue_style("font-awesome", "https://use.fontawesome.com/releases/v5.6.4/css/all.css", array(), "5.6.4", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('/assets/css/style.css')), "all");
  wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css', array(), filemtime(get_theme_file_path('/assets/css/about.css')));
  wp_enqueue_style('access-style', get_template_directory_uri() . '/assets/css/access.css', array(), filemtime(get_theme_file_path('/assets/css/access.css')));
  wp_enqueue_style('blogs-style', get_template_directory_uri() . '/assets/css/blogs.css', array(), filemtime(get_theme_file_path('/assets/css/blogs.css')));
  wp_enqueue_style('404-style', get_template_directory_uri() . '/assets/css/404.css', array(), filemtime(get_theme_file_path('/assets/css/404.css')));

  // Enqueue other scripts
  wp_enqueue_script("my_script", get_template_directory_uri() . "/assets/js/main.js", array("jquery"), filemtime(get_theme_file_path("/assets/js/main.js")), true);
  $image_urls = array(
    get_template_directory_uri() . '/assets/img/mach_mv_2.png',
    get_template_directory_uri() . '/assets/img/mach_mv_3.png',
    get_template_directory_uri() . '/assets/img/mach_mv_4.png',
    get_template_directory_uri() . '/assets/img/mach_mv_2.png',
  );

  wp_localize_script('my_script', 'mySliderData', array(
    'imageUrls' => $image_urls,
  ));
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_menu_init()
{
  register_nav_menus(
    array(
      "global" => "ヘッダーメニュー",
      "footer" => "フッターメニュー",
      "drawer" => "ドロワーメニュー",
    )
  );
}
add_action("init", "my_menu_init");


function my_archive_title($title)
{

  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_author()) {
    $title = get_the_author();
  } elseif (is_date()) {
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_action('get_the_archive_title', 'my_archive_title');

// カスタム投稿タイプを作成する関数
function create_news_post_type()
{
  $args = array(
    'labels' => array(
      'name' => 'News',
      'singular_name' => 'News',

      // Other labels...
    ),
    'public' => true,
    'show_in_rest' => true, // これによりGutenbergのブロックエディターが有効化されます
    'has_archive' => true, // これによりアーカイブページが有効化されます
    'rewrite' => array('slug' => 'news'), // アーカイブページと個別投稿のURLスラッグを設定します
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag'),
    // Other settings...
  );
  register_post_type('news', $args);
}

add_action('init', 'create_news_post_type');

function post_has_archive($args, $post_type)
{
  if ('post'  == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; // ページ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function create_blog_post_type()
{
  $args = array(
    'labels' => array(
      'name' => 'お役立ち情報',
      'singular_name' => 'Blog',
    ),
    'public' => true,
    'show_in_rest' => true, // これによりGutenbergのブロックエディターが有効化されます
    'has_archive' => true, // これによりアーカイブページが有効化されます
    'rewrite' => array('slug' => 'blog'), // アーカイブページと個別投稿のURLスラッグを設定します
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag'),
    'menu_icon' => 'dashicons-welcome-write-blog',
    // Other settings...
  );
  register_post_type('blog', $args);
}
add_action('init', 'create_blog_post_type');


function blogs_has_archive($args, $post_type)
{
  if ('blog'  == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; // ページ名
  }
  return $args;
}
add_filter('register_post_type_args', 'blogs_has_archive', 10, 2);

// カスタム投稿のアーカイブページ表示件数
function change_posts_per_page($query)
{
  if (is_admin() || ! $query->is_main_query())
    return;
  if ($query->is_post_type_archive('blog')) { //カスタム投稿タイプを指定
    $query->set('posts_per_page', '3'); //表示件数を指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page');


// テンプレートを階層化に合わせる
// page-about.php -> page-about__〇〇.php というファイル名にする
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && ! $template) {
    $pagename = str_replace('/', '__', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}

// デフォルトの投稿を非表示
function remove_menus()
{
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');

// faqのカスタム投稿タイプ
function create_faq_post_type()
{
  register_post_type(
    'faq',
    array(
      'labels' => array(
        'name' => __('FAQs'),
        'singular_name' => __('FAQ')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields'),
      'rewrite' => array('slug' => 'faqs'),
    )
  );
}
add_action('init', 'create_faq_post_type');


// 診療状況のカスタム投稿タイプ
function create_clinic_status_post_type()
{
  register_post_type(
    'clinic_status',
    array(
      'labels' => array(
        'name' => __('診療状況'),
        'singular_name' => __('診療状況')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'clinic-status'),
    )
  );
}
add_action('init', 'create_clinic_status_post_type');


// svgファイルをアップロードできるようにする
function add_file_types_to_uploads($file_types)
{
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);
  return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

// ページごとに動的なタイトルを生成
add_theme_support('title-tag');

// ページごとにカスタムタイトルを設定
function custom_wp_title($title)
{
  if (is_front_page()) {
    $title = "神戸駅ナカの待たない土日祝日診察の内科｜マッハスピードクリニック";
  } elseif (is_page('naika')) {
    $title = "JR神戸駅直結の待たない内科｜マッハスピードクリニック";
  } elseif (is_page('fever-clinic')) {
    $title = "神戸駅直結の待たない・断らない・土日祝日診療の発熱外来滴｜マッハスピードクリニック";
  } elseif (is_page('pill-clinic')) {
    $title = "神戸駅ナカの待たないピル（２回目以降）処方｜マッハスピードクリニック";
  } elseif (is_page('after-pill')) {
    $title = "神戸駅ナカで土日祝・夜間・待たずにアフターピル処方｜マッハスピードクリニック";
  } elseif (is_page('self-pay-beauty')) {
    $title = "神戸駅ナカで土日祝・夜間・待たずに美白内服処方・美容点滴｜マッハスピードクリニック";
  } elseif (is_page('vaccine')) {
    $title = "神戸駅ナカで土日祝・夜間・待たずにインフルエンザの予防接種｜マッハスピードクリニック";
  }
  return $title;
}
add_filter('wp_title', 'custom_wp_title');


// wp_head() による <title> タグの自動生成を無効化
remove_action('wp_head', '_wp_render_title_tag');


// 追加 25/01/18
function set_post_views($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '1');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
// 投稿が表示されるたびに閲覧数をカウント
function track_post_views($postID)
{
  if (!is_single()) return;
  if (empty($postID)) {
    global $post;
    $postID = $post->ID;
  }
  set_post_views($postID);
}
add_action('wp_head', 'track_post_views');

// 管理画面に閲覧数を表示
function add_post_views_column($columns)
{
  $columns['post_views'] = '閲覧数';
  return $columns;
}
add_filter('manage_posts_columns', 'add_post_views_column');

function show_post_views($column_name, $post_id)
{
  if ($column_name === 'post_views') {
    $count = get_post_meta($post_id, 'post_views_count', true);
    echo $count ? $count : '0';
  }
}
add_action('manage_posts_custom_column', 'show_post_views', 10, 2);
