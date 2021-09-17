<?php

function my_enqueue_scripts(){
  wp_deregister_script('jquery'); //wpデフォルトのjQueryを削除
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0');
  wp_enqueue_script('script.js',get_template_directory_uri().'/assets/js/script.js',array());
  wp_enqueue_style('style',get_template_directory_uri().'/assets/style.css',array());
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');



add_action('init', 'create_news');
function create_news() {
  register_post_type('news', array(
    'labels' => array(
    'name' => 'お知らせ', // 投稿タイプの一般名
    'singular_name' => 'お知らせ', // この投稿タイプのオブジェクト1個の名前
  ),
  'public' => true, // パブリックにするかどうか。初期値: false
  'publicly_queryable' => true, // post_typeクエリが実行可能かどうか。初期値: public引数の値
  'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。初期値: public引数の値
  'query_var' => true, // query_varキーの名前。初期値: true - $post_typeの名前
  'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。初期値: true
  'capability_type' => 'post', // 権限の指定。初期値: 'post'
  'has_archive' => true, // アーカイブページを有効にするかどうか。初期値: false
  'hierarchical' => false, // 階層構造を持つかどうか。初期値: false
  'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
  'supports' => array('title', 'editor', 'thumbnail') // 投稿できる項目。初期値: titleとeditor
  ));
	
  register_taxonomy('tax_news',array('news'), array(
    'hierarchical' => true,
    'label' => 'カテゴリー',
    'show_ui' => true,
    'public' => true
  ));
 
  register_taxonomy_for_object_type('tax_news', array('news'));
}


add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
if (!is_admin() && $query->is_main_query() && is_post_type_archive('news')) {
  $query->set('posts_per_page', 5);
  }
}


// single.phpでパンくずリストの記事タイトルを非表示にする
function foo_pop($trail) {
	if (is_single()) {
		{array_shift($trail->trail);}
	}
}
add_action('bcn_after_fill', 'foo_pop');