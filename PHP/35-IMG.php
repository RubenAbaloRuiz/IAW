<?php
$width=200;
$height=60;
$image=imagecreatetruecolor($width,$height);
$white=ImageColorAllocate($image,255,255,255);
ImageFill($image, 0, 0, $white);
$blue=ImageColorAllocate($image,0,0,255);
for ($i=0; $i < $_REQUEST["points"]; $i++) {
    $x1 = rand(0, $width);
    $y1 = rand(0, $height);
    $x2 = rand(10, 20);
    $y2 = rand(10, 20);
    imagefilledellipse($image, $x1, $y1, $x2, $y2, $blue);
}
Header ("Content-type: image/jpeg");
ImageJPEG ($image);
ImageDestroy($image);