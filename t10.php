<?php
$image = imagecreatefromjpeg('image.jpg');

// Центр изображения
$center_x = imagesx($image) / 2;
$center_y = imagesy($image) / 2;
$radius = 75;

for ($y = 0; $y < imagesy($image); $y++) {
    for ($x = 0; $x < imagesx($image); $x++) {
        if (pow($x - $center_x, 2) + pow($y - $center_y, 2) <= pow($radius, 2)) {
            $color = imagecolorat($image, $x, $y);
            $r = ($color >> 16) & 0xFF;
            $g = ($color >> 8) & 0xFF;
            $b = $color & 0xFF;
            $r = min(255, $r + 50);
            $g = min(255, $g + 50);
            $b = min(255, $b + 50);
            $new_color = imagecolorallocate($image, $r, $g, $b);
            imagesetpixel($image, $x, $y, $new_color);
        }
    }
}

imagejpeg($image, 'output.jpg');
imagedestroy($image);
?>