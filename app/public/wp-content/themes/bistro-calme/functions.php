<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );
add_filter( 'document_title_separator', 'my_document_title_separator' );
function my_document_title_separator($separator){
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
  if (is_home()){
    unset($title['tagline']); //PHPの配列要素の削除
    $title['tagline'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
    //要素の代入
  }
  return $title;
}
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );