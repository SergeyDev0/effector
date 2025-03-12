<?php
// Замена фона изображения рисунком
$image = imagecreatefromjpeg('image.jpg');
$background = imagecreate(250, 200);
imagecopy($image, $background, 0, 0, 0, 0, 250, 200);
imagejpeg($image, 'output.jpg');
imagedestroy($image);
imagedestroy($background);
?>