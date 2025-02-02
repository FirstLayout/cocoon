<?php //CSSやJSファイルの呼び出し
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_custom' );
if ( !function_exists( 'wp_enqueue_scripts_custom' ) ):
function wp_enqueue_scripts_custom() {
////////////////////////////////////////////////////////////////
//
//スタイルシートの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //テーマスタイルの呼び出し
  ///////////////////////////////////////////
  wp_enqueue_style_theme_style();
  wp_enqueue_style_theme_keyframes();

  ///////////////////////////////////////////
  //Font Awesome
  ///////////////////////////////////////////
  wp_enqueue_style_font_awesome();

  ///////////////////////////////////////////
  //IcoMoon
  ///////////////////////////////////////////
  wp_enqueue_style_icomoon();

  ///////////////////////////////////////////
  //ソースコードのハイライト表示
  ///////////////////////////////////////////
  wp_enqueue_highlight_js();

  ///////////////////////////////////
  //画像リンク拡大効果がLightboxのとき
  ///////////////////////////////////
  wp_enqueue_lightbox();

  ///////////////////////////////////
  //画像リンク拡大効果がLityのとき
  ///////////////////////////////////
  wp_enqueue_lity();

  ///////////////////////////////////
  //画像リンク拡大効果がbaguetteboxのとき
  ///////////////////////////////////
  wp_enqueue_baguettebox();

  ///////////////////////////////////
  //画像リンク拡大効果がspotlightのとき
  ///////////////////////////////////
  wp_enqueue_spotlight();

  ///////////////////////////////////
  //サイドバー追従領域やグローバルナビの追従用
  ///////////////////////////////////
  //wp_enqueue_clingify();

  ///////////////////////////////////
  //サイドバー追従領域やグローバルナビの追従用
  ///////////////////////////////////
  wp_enqueue_stickyfill();

  ///////////////////////////////////
  //カルーセル用
  ///////////////////////////////////
  wp_enqueue_slick();

  ///////////////////////////////////
  //ツリー型モバイルボタン
  ///////////////////////////////////
  wp_enqueue_slicknav();

  ///////////////////////////////////
  //レスポンシブテーブルのヒント
  ///////////////////////////////////
  wp_enqueue_scrollhint();

////////////////////////////////////////////////////////////////
//
//スキンスタイルの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //スキンスタイルの読み込み
  ///////////////////////////////////////////
  wp_enqueue_style_theme_skin_style();
  wp_enqueue_style_theme_skin_keyframes();


////////////////////////////////////////////////////////////////
//
//カスタムスタイルの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //設定変更に必要なCSS
  ///////////////////////////////////////////
  wp_add_css_custome_to_inline_style();

////////////////////////////////////////////////////////////////
//
//子テーマスタイルの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //子テーマのstyle.css
  ///////////////////////////////////////////
  wp_enqueue_style_theme_child_style();
  wp_enqueue_style_theme_child_keyframes();

////////////////////////////////////////////////////////////////
//
//WordPress関係スクリプトの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //jQueryの読み込み
  ///////////////////////////////////////////
  //wp_enqueue_script('jquery');

  //レンダリングをブロックしている jQuery, jQuery-migrate をフッタに移動する
  if (!is_admin()) {

    ///////////////////////////////////////////
    // barba.jsスクリプトの読み込み
    ///////////////////////////////////////////
    wp_enqueue_script_barba_js();

    ///////////////////////////////////////////
    // Lazy Load
    ///////////////////////////////////////////
    wp_enqueue_lazy_load();

    //jQueryライブラリの読み込み
    wp_enqueue_script_jquery_js();

    //タイルカード
    wp_enqueue_jquery_masonry();

    //MathJax
    // wp_enqueue_mathjax();
  }

  ///////////////////////////////////////////
  //コメント返信時のフォームの移動（WPライブラリから呼び出し）
  ///////////////////////////////////////////
  if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

  ///////////////////////////////////////////
  //テーマ内で使用するJavaScript関数をまとめて定義する外部ファイルを呼び出す（javascript.js）
  ///////////////////////////////////////////
  wp_enqueue_script_theme_js();

  ///////////////////////////////////
  //はてブシェアボタン用のスクリプト呼び出し
  ///////////////////////////////////
  //wp_enqueue_script_hatebu_share_button_js();

  ///////////////////////////////////
  //クリップボードスクリプトの呼び出し
  ///////////////////////////////////
  //wp_enqueue_script_clipboard_js();

  ///////////////////////////////////
  //Pinterest用のスクリプト呼び出し
  ///////////////////////////////////
  //wp_enqueue_script( 'pinterest-js', '//assets.pinterest.com/js/pinit.js', array(), false, true );

////////////////////////////////////////////////////////////////
//
//スキンscriptの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //スキンのjavascript.js
  ///////////////////////////////////////////
  wp_enqueue_script_theme_skin_js();

////////////////////////////////////////////////////////////////
//
//子テーマscriptの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //子テーマのjavascript.js
  ///////////////////////////////////////////
  wp_enqueue_script_theme_child_js();



  ///////////////////////////////////////////
  //Google Fonts
  ///////////////////////////////////////////
  wp_enqueue_google_fonts();
}
endif;
