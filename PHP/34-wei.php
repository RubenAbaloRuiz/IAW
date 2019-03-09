<?php
$width=200;
$height=60;
$image=imagecreatetruecolor($width,$height);
$white=ImageColorAllocate($image,255,255,255);
imagefilledrectangle($image, 4, 4, 195, 55, $white);
$red=ImageColorAllocate($image,255,0,0);
ImageString($image, 10, 50, 25, "BOTON", $red);
Header ("Content-type: image/jpeg");
ImageJPEG ($image);
ImageDestroy($image);