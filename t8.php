<?php
// Плагин для добавления фона на страницу поста
function add_post_background() {
    echo '<style>.post { background-image: url("background.jpg"); background-size: cover; }</style>';
}
add_action('wp_head', 'add_post_background');
?>