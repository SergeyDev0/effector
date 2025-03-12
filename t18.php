<?php
function change_background_color() {
    $hour = date('H');
    if ($hour >= 6 && $hour < 18) {
        echo '<style>body { background-color: #AAA; }</style>';
    } else {
        echo '<style>body { background-color: #333; }</style>';
    }
}
add_action('wp_head', 'change_background_color');
?>