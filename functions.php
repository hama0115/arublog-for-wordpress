<?php

if ( ! function_exists( 'arublogtheme_setup' )):
  function arublogtheme_setup() {
    //アイキャッチ画像を使う
    add_theme_support( 'post-thumbnails' );

    //ナビゲーションメニューを設定
    register_nav_menus(
      [
        'menu-1' => 'メインメニュー'
      ]
    );
  }
endif;
add_action( 'after_setup_theme', 'arublogtheme_setup' );