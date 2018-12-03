<?php //画像設定に必要な定数や関数
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

//アイキャッチの表示
define('OP_EYECATCH_VISIBLE', 'eyecatch_visible');
if ( !function_exists( 'is_eyecatch_visible' ) ):
function is_eyecatch_visible(){
  return get_theme_option(OP_EYECATCH_VISIBLE, 1);
}
endif;

//アイキャッチラベルの表示
define('OP_EYECATCH_LABEL_VISIBLE', 'eyecatch_label_visible');
if ( !function_exists( 'is_eyecatch_label_visible' ) ):
function is_eyecatch_label_visible(){
  return get_theme_option(OP_EYECATCH_LABEL_VISIBLE, 1);
}
endif;

//アイキャッチの中央寄せ
define('OP_EYECATCH_CENTER_ENABLE', 'eyecatch_center_enable');
if ( !function_exists( 'is_eyecatch_center_enable' ) ):
function is_eyecatch_center_enable(){
  return get_theme_option(OP_EYECATCH_CENTER_ENABLE);
}
endif;

//アイキャッチをカラム幅に引き伸ばす
define('OP_EYECATCH_WIDTH_100_PERCENT_ENABLE', 'eyecatch_width_100_percent_enable');
if ( !function_exists( 'is_eyecatch_width_100_percent_enable' ) ):
function is_eyecatch_width_100_percent_enable(){
  return get_theme_option(OP_EYECATCH_WIDTH_100_PERCENT_ENABLE);
}
endif;

//アイキャッチキャプションを表示する
define('OP_EYECATCH_CAPTION_VISIBLE', 'eyecatch_caption_visible');
if ( !function_exists( 'is_eyecatch_caption_visible' ) ):
function is_eyecatch_caption_visible(){
  return get_theme_option(OP_EYECATCH_CAPTION_VISIBLE, 1);
}
endif;

//Auto Post Thumbnail
define('OP_AUTO_POST_THUMBNAIL_ENABLE', 'auto_post_thumbnail_enable');
if ( !function_exists( 'is_auto_post_thumbnail_enable' ) ):
function is_auto_post_thumbnail_enable(){
  return get_theme_option(OP_AUTO_POST_THUMBNAIL_ENABLE);
}
endif;

//画像の枠線効果
define('OP_IMAGE_WRAP_EFFECT', 'image_wrap_effect');
if ( !function_exists( 'get_image_wrap_effect' ) ):
function get_image_wrap_effect(){
  return get_theme_option(OP_IMAGE_WRAP_EFFECT, 'none');
}
endif;

//画像の拡大効果
define('OP_IMAGE_ZOOM_EFFECT', 'image_zoom_effect');
if ( !function_exists( 'get_image_zoom_effect' ) ):
function get_image_zoom_effect(){
  return get_theme_option(OP_IMAGE_ZOOM_EFFECT, 'baguettebox');
}
endif;

//Lightboxが有効
if ( !function_exists( 'is_lightbox_effect_enable' ) ):
function is_lightbox_effect_enable(){
  return get_image_zoom_effect() == 'lightbox';
}
endif;
//lityが有効
if ( !function_exists( 'is_lity_effect_enable' ) ):
function is_lity_effect_enable(){
  return get_image_zoom_effect() == 'lity';
}
endif;
//baguetteboxが有効
if ( !function_exists( 'is_baguettebox_effect_enable' ) ):
function is_baguettebox_effect_enable(){
  return get_image_zoom_effect() == 'baguettebox';
}
endif;

//サムネイル画像タイプ
define('OP_THUMBNAIL_IMAGE_TYPE', 'thumbnail_image_type');
if ( !function_exists( 'get_thumbnail_image_type' ) ):
function get_thumbnail_image_type(){
  return get_theme_option(OP_THUMBNAIL_IMAGE_TYPE, '16_9');
}
endif;

//NO IMAGE画像
define('OP_NO_IMAGE_URL', 'no_image_url');
if ( !function_exists( 'get_no_image_url' ) ):
function get_no_image_url(){
  return get_theme_option(OP_NO_IMAGE_URL);
}
endif;
if ( !function_exists( 'get_no_image_file' ) ):
function get_no_image_file(){
  return url_to_local(get_no_image_url());
}
endif;
if ( !function_exists( 'get_no_image_sized_url' ) ):
function get_no_image_sized_url($url, $w, $h){
  $ext = get_extention($url);
  $sized_url = str_replace('.'.$ext, '-'.$w.'x'.$h.'.'.$ext, $url);
  return $sized_url;
}
endif;
if ( !function_exists( 'get_no_image_320x180_url' ) ):
function get_no_image_320x180_url(){
  if ($no_image_url = get_no_image_url()) {
    $res = get_no_image_sized_url(get_no_image_url(), 320, 180);
  } else {
    $res = NO_IMAGE_320;
  }
  return $res;
}
endif;
if ( !function_exists( 'get_no_image_320x180_file' ) ):
function get_no_image_320x180_file(){
  return url_to_local(get_no_image_320x180_url());
}
endif;
if ( !function_exists( 'get_no_image_160x90_url' ) ):
function get_no_image_160x90_url(){
  if ($no_image_url = get_no_image_url()) {
    $res = get_no_image_sized_url(get_no_image_url(), 160, 90);
  } else {
    $res = NO_IMAGE_160;
  }
  return $res;
}
endif;
if ( !function_exists( 'get_no_image_160x90_file' ) ):
function get_no_image_160x90_file(){
  return url_to_local(get_no_image_160x90_url());
}
endif;
if ( !function_exists( 'get_no_image_150x150_url' ) ):
function get_no_image_150x150_url(){
  if ($no_image_url = get_no_image_url()) {
    $res = get_no_image_sized_url(get_no_image_url(), 150, 150);
  } else {
    $res = NO_IMAGE_150;
  }
  return $res;
}
endif;
if ( !function_exists( 'get_no_image_150x150_file' ) ):
function get_no_image_150x150_file(){
  return url_to_local(get_no_image_150x150_url());
}
endif;
if ( !function_exists( 'get_no_image_large_url' ) ):
function get_no_image_large_url(){
  if (($no_image_url = get_no_image_url()) && file_exists(get_no_image_file())) {
    $res = $no_image_url ;
  } else {
    $res = NO_IMAGE_LARGE;
  }
  return $res;
}
endif;
