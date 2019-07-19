<?php

// Add SVG support SVGファイルをアップロードできるようにする
function custom_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );

?>

