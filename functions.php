add_action( 'woocommerce_single_product_summary', 'codeithub_echo_short_desc_if_empty', 21 );
 
function codeithub_echo_short_desc_if_empty() {
   global $post;
   if ( empty ( $post->post_excerpt  ) ) {
      $post_excerpt = '<p class="default-short-desc">';
        $post_excerpt .= 'This is the default, global, short description.<br>It will show if <b>no short description has been entered!</b>';
        $post_excerpt .= '</p>';
      echo $post_excerpt;
   }
}
