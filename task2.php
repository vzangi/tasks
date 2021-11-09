<?php

$width = 200;
$height = 100;

// Загружаем картинку
$image = imagecreatefrompng('image.png');

// Создаем фон для новой картинки
$new_image = imagecreatetruecolor($width, $height);
$transparent = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
imagefill($new_image, 0, 0, $transparent);
imagesavealpha($new_image, true);

// Вписываем картинку в заданные рамки
imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));

imagedestroy($image);

// Возвращаем картинку в ответ
header('Content-Type: image/png');
imagepng( $new_image );