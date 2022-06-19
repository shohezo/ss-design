<?php

/* 投稿にサムネイル設定を追加 */
add_theme_support('post-thumbnails');



function post_has_archive($args,$post_type){ //設定後に必ずパーマリンクを設定すること
    if('post' == $post_type){
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog';//アーカイブのドメイン名を定義
        $args['label'] = 'ブログ'; //管理画面の投稿ラベルをブログに変換
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);


/* カスタム投稿タイプの追加 */
// functions.phpの先頭はphpタグで始める（閉じタグはなくてもOK）
function cpt_register_works() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "works",
		"edit_item" => "works",
	];
	$args = [
		"label" => "Works", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "works", "with_front" => true ], //スラッグをworksに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail" ],
	];
	register_post_type( "works", $args );
}
add_action( 'init', 'cpt_register_works' );

/* カスタム投稿タイプにカテゴリーを追加 */
function cpt_register_dep() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "dep",
	];
	$args = [
		"label" => "カテゴリー",
		"labels" => $labels,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "dep",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "dep", [ "works" ], $args ); //「works」というカスタム投稿タイプにカテゴリーを追加
}
add_action( 'init', 'cpt_register_dep' );