<?php
add_action('init', function(){
  register_post_type('skill', [
    'label' => 'スキル',
    'singular_name' => 'skill',
    'public' => true,
    'menu_position' => 20,
    'has_archive' => true,
    'menu_icon' => 'dashicons-star-filled',
    'supports' => ['thumbnail', 'title', 'editor','custom-fields'],
    'has_archive' => true
  ]);
  register_post_type('work', [
    'label' => '制作物',
    'singular_name' => 'work',
    'public' => true,
    'menu_position' => 21,
    'has_archive' => true,
    'menu_icon' => 'dashicons-media-code',
    'supports' => ['thumbnail', 'title', 'editor','custom-fields'],
    'has_archive' => true
  ]);
  register_post_type('flow', [
    'label' => '制作フロー',
    'singular_name' => 'flow',
    'public' => true,
    'menu_position' => 22,
    'has_archive' => true,
    'menu_icon' => 'dashicons-controls-play',
    'supports' => ['title', 'editor'],
    'has_archive' => true
  ]);
  register_post_type('price', [
    'label' => '価格表',
    'singular_name' => 'price',
    'public' => true,
    'menu_position' => 23,
    'has_archive' => true,
    'menu_icon' => 'dashicons-money-alt',
    'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
    'has_archive' => true
  ]);
});

/**
 * clieanblog からもってきた functions.php
 */
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  //メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
});

/* アイキャッチ画像がなければ、標準画像を取得する */
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;
  return $img;
}

//お問い合わせ後、thanksページへ遷移させる
add_action('wp_footer', 'add_origin_thanks_page' );
function add_origin_thanks_page(){
  echo <<< EOC
  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ){
    location = 'https://bobu.work/thanks/';
  }, false);
  </script>
  EOC;
}

// /**
//  * WordPress標準機能
//  *
//  * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
//  */
// function my_setup(){
//   add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
//   add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
//   add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
//   add_theme_support( 'html5', array(  /* HTML5のタグで出力 */
//     'search-form',
//     'comment-form',
//     'comment-list',
//     'gallery',
//     'caption',
//   ) );
// }
// add_action( 'after_setup_theme', 'my_setup' );


// /**
//  * CSSとJavaScriptの読み込み
//  *
//  * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
//  */
// function my_script_init(){
//   wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
//   wp_enqueue_script( 'script-name', get_template_directory_uri() . '/script.js', array( 'jquery' ), '1.0.0', true );
// }
// add_action( 'wo_enqueue_scripts', 'my_script_init' );
