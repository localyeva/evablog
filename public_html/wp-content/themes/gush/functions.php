<?php

//jQuery
function load_script(){
    wp_enqueue_script('jquery');
}
add_action('init', 'load_script');

//アイキャッチサムネイル
add_theme_support('post-thumbnails');
add_image_size('thumb100',100,100,true);
add_image_size('thumb110',110,110,true);

//投稿スラッグ自動生成
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

//RSS
add_theme_support('automatic-feed-links');

//エディタスタイル
add_theme_support('editor-style');
add_editor_style('editor-style.css');
function custom_editor_settings( $initArray ){
	$initArray['body_class'] = 'editor-area';
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

//画像に重ねる文字の色
define('HEADER_TEXTCOLOR', '');

//画像に重ねる文字を非表示にする
define('NO_HEADER_TEXT',true);

//投稿用ファイルを読み込む
get_template_part('functions/create-thread');

//カスタム背景
add_theme_support( 'custom-background' );

//ヘッダー整理
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' ); 

//セルフピンバック禁止
function no_self_ping( &$links ) {
    $home = home_url();
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );

//ウイジェット追加
if (function_exists('register_sidebar')) {

//サイドバー
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<li>',
     'after_widget' => '</li>',
     'before_title' => '<h4>',
     'after_title' => '</h4>',
) );

//サイドバー336広告
register_sidebar( array(
     'name' => __( 'サイド広告' ),
     'id' => 'side-ad',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '',
     'after_title' => '',
) );

//記事下左300広告
register_sidebar( array(
     'name' => __( '記事下左300px' ),
     'id' => 'efa_l',
     'before_widget' => '<div class="efa_left">',
     'after_widget' => '</div>',
     'before_title' => '',
     'after_title' => '',
) );

//記事下右300広告
register_sidebar( array(
     'name' => __( '記事下右300px' ),
     'id' => 'efa_r',
     'before_widget' => '<div class="efa_right">',
     'after_widget' => '</div>',
     'before_title' => '',
     'after_title' => '',
) );

//フッター左
register_sidebar( array(
     'name' => __( 'フッター左' ),
     'id' => 'footer_left',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h2>',
     'after_title' => '</h2>',
) );

//フッター中央
register_sidebar( array(
     'name' => __( 'フッター中' ),
     'id' => 'footer_center',
     'before_widget' => '<li>',
     'after_widget' => '</li>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );

//フッター右
register_sidebar( array(
     'name' => __( 'フッター右' ),
     'id' => 'footer_right',
     'before_widget' => '<li>',
     'after_widget' => '</li>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
}

//更新日の追加
function get_mtime($format) {
    $mtime = get_the_modified_time('Ymd');
    $ptime = get_the_time('Ymd');
    if ($ptime > $mtime) {
        return get_the_time($format);
    } elseif ($ptime === $mtime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}

//スマホ表示分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

?>
