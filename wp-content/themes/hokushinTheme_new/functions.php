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

    


// keywords description
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

// 記事ページと固定ページでカスタムフィールドを表示
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
}
function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);
  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60"></p>';
  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160"></p>';
}

// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords'])){
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  }else{
    delete_post_meta($post_id, 'keywords');
  }
  if(!empty($_POST['description'])){
    update_post_meta($post_id, 'description', $_POST['description'] );
  }else{
    delete_post_meta($post_id, 'description');
  }
}
function MataTitle() {
  // カスタムフィールドの値を読み込む
  $custom = get_post_custom();
  if(!empty( $custom['keywords'][0])) {
    $keywords = $custom['keywords'][0];
  }
  if(!empty( $custom['description'][0])) {
    $description = $custom['description'][0];
  }
  if(is_home()){// トップページ
    echo '<meta name="keywords" content="'.$keywords.'">';
    echo '<meta name="description" content="'.$description.'">';
  }elseif(is_single()){// 記事ページ
    echo '<meta name="keywords" content="'.$keywords.'">';
    echo '<meta name="description" content="'.$description.'">';
  }elseif(is_page()){// 固定ページ
    echo '<meta name="keywords" content="'.$keywords.'">';
    echo '<meta name="description" content="'.$description.'">';
  }elseif(is_archive()){// 記事ページ
    echo '<meta name="keywords" content="'.$keywords.'">';
    echo '<meta name="description" content="'.$description.'">';
  }elseif(is_category()){// カテゴリーページ
    echo '<meta name="description" content="'.single_cat_title().'の記事一覧">';
  }elseif(is_tag()){// タグページ
    echo '<meta name="robots" content="noindex, follow">';
    echo '<meta name="description" content="'.single_tag_title("", true).'の記事一覧">';
  }elseif(is_404()){// 404ページ
    echo '<meta name="robots" content="noindex, follow">';
    echo '<title>404:お探しのページが見つかりませんでした</title>';
  }else{// その他ページ
    echo '<meta name="robots" content="noindex, follow">';
  };
}
?>