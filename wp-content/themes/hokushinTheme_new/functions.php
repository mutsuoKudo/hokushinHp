<?php

// Add SVG support SVGファイルをアップロードできるようにする
function custom_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );


//エントリーボタンから応募フォームに希望職種を渡す
function kaiza_form_select_filter($tag) {
  $formName = 'job-category'; //プルダウン名
  if ( ! is_array( $tag ) )
      return $tag;
  if( isset($_GET[$formName]) ) {
      $name = $tag['name'];
      if( $name === $formName ) {
          if( is_array( $tag['values'] ) ) {
              $index = $_GET[$formName];
              if( $index !== false ) {
                  $tag['options'][$key] = 'default:' . $index; //デフォルト値設定
              }
          }
      }
  }
  return $tag;
}
add_filter( 'wpcf7_form_tag', 'kaiza_form_select_filter', 11, 2);


?>

