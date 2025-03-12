<?php
function sortString($str) {
    $chars = str_split($str);
		// Сортировка по возрастанию
    sort($chars);
    return implode('', $chars);
}

echo sortString("kysdgtk"); // "dgkksty"
?>