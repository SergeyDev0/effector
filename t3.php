<?php
$image = imagecreatefromjpeg('image.jpg');
$watermark = imagecreatefrompng('watermark.png');

// Самая светлая область
$lightest_area = ['x' => 100, 'y' => 100];

// Водяного знак
imagecopy($image, $watermark, $lightest_area['x'], $lightest_area['y'], 0, 0, imagesx($watermark), imagesy($watermark));
imagejpeg($image, 'output.jpg');

imagedestroy($image);
imagedestroy($watermark);
?>