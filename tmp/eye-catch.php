<?php //投稿・固定ページのアイキャッチ
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
//アイキャッチがない場合は非表示クラスを追加
$display_none = (is_eyecatch_visible() && has_post_thumbnail()) ? null : ' display-none'; ?>
<div class="eye-catch-wrap<?php echo $display_none; ?>">
<figure class="eye-catch" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
  <?php
  if (has_post_thumbnail()) {
    // アイキャッチ画像のIDを取得
    $thumbnail_id = get_post_thumbnail_id();
    // mediumサイズの画像内容を取得（引数にmediumをセット）
    $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'post-thumbnail' );
    $url = $eye_img[0];
    $width = $eye_img[1];
    $height = $eye_img[2];
    //アイキャッチの表示
    if ($width && $height) {
      the_post_thumbnail(array($width, $height));
    } else {
      the_post_thumbnail();
    }

  } else {
    $url = get_ogp_home_image_url();
    $size = get_image_width_and_height($url);
    $width = isset($size['width']) ? $size['width'] : 800;
    $height = isset($size['height']) ? $size['height'] : 600;
    echo ' <img src="'.$url.'" width="'.$width.'" height="'.$height.'" alt="">';
  }
  ?>
  <meta itemprop="url" content="<?php echo $url; ?>">
  <meta itemprop="width" content="<?php echo $width; ?>">
  <meta itemprop="height" content="<?php echo $height; ?>">
  <?php //アイキャッチラベルの表示
  if (is_eyecatch_label_visible()) {
    the_nolink_category(); //カテゴリラベルの取得
  }

  //アイキャッチにキャプションが設定されているとき
  $eye_catch_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
  if( $eye_catch_caption ) {
      echo '<figcaption class="eye-catch-caption">' . $eye_catch_caption . '</figcaption>';
  }
  ?>
</figure>
</div>