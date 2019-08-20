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


//shortcode
function svg_func( $atts, $content = "" )  {
    return '<svg class="m-icon--'.$content.'"><use xlink:href="#'.$content.'"></use></svg>';
}
add_shortcode( 'svg', 'svg_func' );


//  wp-includes/css/dist/block-library/style.min.css
// （「Gutenberg」で出力されるHTMLに対応したスタイルシート）を無効化
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}

// WordPressがwp_headに自動で呼び出すJavaScriptについて…
// 管理画面以外で適用する/jquery.min.jsは非同期の対象外にする/それ以外のJavaScriptはasync属性を付与して非同期にするという設定
if (!(is_admin() )) {
    function add_async_to_enqueue_script( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;       //.js以外は対象外
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;       //'jquery.min.js'は、asyc対象外
    return "$url' async charset='UTF-8";                      // async属性を付与
    }
    add_filter( 'clean_url', 'add_async_to_enqueue_script', 11, 1 );
    }
?>

