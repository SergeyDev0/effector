<?php
function add_post_page_count() {
  $post_count = wp_count_posts()->publish;
  $page_count = wp_count_posts('page')->publish;
  echo "<p>Сообщений: $post_count, Страниц: $page_count</p>";
}
add_action('admin_notices', 'add_post_page_count');
?>